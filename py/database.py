import mysql.connector

class database:
    #On initalise la classe en créant une variable de connexion à la base de données ainsi que l'initialisation du curseur pour effectuer les requetes
    def __init__(self):
        self.database = mysql.connector.connect(
        host="localhost",
        user="hugodemenez",
        password="password",
        database="website",
        auth_plugin='mysql_native_password',
        )
        self.cursor = self.database.cursor()
        
database = database() 
data = database.cursor()       
database.data.execute("SELECT * FROM website")
for values in data:
  print(values)