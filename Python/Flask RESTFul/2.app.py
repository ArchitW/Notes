from flask import Flask, jsonify, request


app = Flask(__name__)

stores =[
    {
        'name' : 'x',
        'items' :[
    {
        'name' :'item name',
        'price':12.99
    }
]
    }
]



"""
#@app.route('/') #decorator
#def home():
#   return "Hello World!"
"""
"""
POST - used to recive data
GET - used to send data

Endpoints we will be needing
POST /store data:name
GET /store/<string:name> <string:name> Flask syntax
GET /store
POST /store/<string:name>/item {name:price}
GET /store/<string;name>/item
"""


# POST /store i/p Name
@app.route('/store', methods=['POST'])
def create_store():
    request_data = request.get_json()
    new_store = {
        'name': request_data['name'],
        'items': []
    }
    stores.append(new_store)
    return jsonify(new_store)


# GET /store/<string:name> <string:name> Flask syntax
@app.route('/store/<string:name>')
def get_store(name):
    # loop through store if matches then return else return error message

    for store in stores:
        if store['name'] == name:
            return jsonify(store)
    return jsonify({'error': 'store not found'})


# GET /store
@app.route('/store')
def get_stores():
    return jsonify({'stores': stores})


# POST /store/<string:name>/item
@app.route('/store/<string:name>/item', methods=['POST'])
def create_item_in_store(name):
    request_data = request.get_json()
    for store in stores:
        if store['name'] == name:

            item_data = {
                'name': request_data['name'],
                'price': request_data['price']
            }
            store['items'].append(item_data)
            return jsonify(item_data)
    return jsonify({'error': 'store not found'})


# GET /store/<string:name>/item
@app.route('/store/<string:name>/item')
def get_items_in_store(name):
    for store in stores:
        if store['name'] == name:
            return jsonify(store['items'])
    return jsonify({'error': 'items not found'})


app.run(port=1911)