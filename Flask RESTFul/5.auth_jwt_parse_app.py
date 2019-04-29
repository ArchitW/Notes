"""
Authentication

pip insall Flask-JWT
JWT: Json Web Token
"""


from flask import Flask, request
from flask_restful import Resource, Api, reqparse  # reqparse: request parsing ,passes perticular variables only
from flask_jwt import JWT, jwt_required # decorator @


from security import authenticate, identity


app = Flask(__name__)
#
app.secret_key = 'key'
#
api = Api(app)

jwt = JWT(app, authenticate, identity)  # import from security
# creates new end point /auth
# sends to authenticate function -> find user and compare pass , if match
# returns JW token
# use to send token with request


items =[]


class Item(Resource):
    parser = reqparse.RequestParser()
    parser.add_argument('price',
                        type=float,
                        required=True,
                        help="can not be blank")


    @jwt_required()
    def get(self, name): # get data
        item = next(filter(lambda x: x['name'] == name, items), None)
        return {'item': item}, 200 if item else 404

    def post(self, name): # post data
        if next(filter(lambda x: x['name'] == name, items), None) is not None:
            return {'message: Item with name {} already exsist'.format(name)}, 400

        data = request.get_json()
        item = {'name': name, 'price': data['price']}
        items.append(item)
        return item, 201

    def delete(self, name):
        # python gonna think its a local variable , need to tell python its a globalvariable
        global items

        # Check if item is in the list before deleting , if not it will raise error
        if next(filter(lambda x: x['name'] == name, items), None) is None:
            return {'message':'Item not Found'}

        items = next(filter(lambda x: x['name'] != name, items), None)
        # trick: add only those items which is not equal to item, all elements except 1 and overwirte items list
        return {'message': 'item deleted'}

    def put(self,name):
        # insert or update
        # Parse Request #
        # parser = reqparse.RequestParser()
        # parser.add_argument('price',
        #                    type=float,
        #                    required=True,
        #                    help="can not be blank")
        # put it on the top for reuse call it with class name Item.parser.parse_args()
        # data = request.get_json()
        data = Item.parser.parse_args()
        item = next(filter(lambda x: x['name'] == name, items), None)
        if item is None:
            item = {'name': name, 'prince': data['price']}
            items.append(item)
        else:
            item.update(data)
        return item



class ItemsList(Resource):
    def get(self):
        return {'items':items}


api.add_resource(Item,'/item/<string:name>')
api.add_resource(ItemsList, '/items')


app.run(debug=True)