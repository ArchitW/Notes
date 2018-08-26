from user import User

"""
1. table for registered user
2. Username Mapping
3. Id Mapping
"""
"""
Same can be implimented using class
users =[
    {
        'id': 1,
        'username': 'bob',
        'pass': '1'
    }
    ]
username_mapping = {
    'bob':{
        'id': 1,
        'username': 'bob',
        'pass': '1'
    }
}
userid_mapping = {
    '1': {
        'id': 1,
        'username': 'bob',
        'pass': '1'
    }
}
"""


users = [
    User(1, 'bob', 'bob')
]

username_mapping ={
    u.username: u for u in users
    # bob : 1,bob,bob
}

userid_mapping = {
    u.id: u for u in users
    # 1 :1,bob,bob
}


"""
1. Authenticate User Username + Pass
2. Identity fun unique to JWT
"""


def authenticate(username, password):
    user = User.find_by_username(username)
    if user and user.password == password:
        return user

def identity(payload):
    user_id = payload['identity']
    return User.find_by_id(user_id)

