import sqlite3
from flask_restful import Resource, reqparse

class User:
    def __init__(self, _id, username, password):
        self.id = _id
        self.username = username
        self.password = password

    @classmethod # change self to cls since it is class method
    def find_by_username(cls,username):
        connection = sqlite3.connect('data.db')
        cursor = connection.cursor()

        query = "select * from users where username=?"
        result = cursor.execute(query, (username, )) # param will always to be touple (value,)

        row = result.fetchone()

        if row:
            # user = cls(row[0], row[1], row[2])
            # or
            user = cls(*row)
        else:
            user = None

        connection.close()
        return user

    @classmethod
    def find_by_id(cls, _id):
        connection = sqlite3.connect('data.db')
        cursor = connection.cursor()

        query = "select * from users where id=?"
        result = cursor.execute(query, (_id,))

        row = result.fetchone()

        if row:
            # user = User(row[0],row[1,row[2]])
            user = cls(*row)
        else:
            user = None
        connection.close()
        return user



class UserRegister(Resource):

    parser = reqparse.RequestParser()
    parser.add_argument("username",
                        type=str,
                        required=True,
                        help="can not be blank")
    parser.add_argument("password",
                        type=str,
                        required=True,
                        help="can not be blank")
    def post(self):
        connection = sqlite3.connect('data.db')
        cursor = connection.cursor()

        data = UserRegister.parser.parse_args()
        query = "insert into users values (NULL, ?, ?)"
        cursor.execute(query,(data['username'], data['password']))

        connection.commit()
        connection.close()

        return {"message": 'user created successfully'}, 201
