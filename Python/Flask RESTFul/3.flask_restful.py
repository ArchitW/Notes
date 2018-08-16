"""
pip install virtualenv

virtualenv [folder_name] --python=python version

pip install Flask-RESTFul
"""

from flask import Flask
from flask_restful import Resource, Api


app = Flask(__name__)
api = Api(app)

class Student(Resource) # inherit Resource class
    def get(self,name):
        return {'name':name}


api.add_resource(Student,'/student/<string:name>') #127.0.0.1:5000/student


app.run(port = 5000)