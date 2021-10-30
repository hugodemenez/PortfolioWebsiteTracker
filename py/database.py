import datetime
import mysql.connector

cnx = mysql.connector.connect(user='hugodemenez', database='database',password='password')
cursor = cnx.cursor()

query = ("INSERT INTO portfolio values ('bank',30,36)")


cursor.execute(query)
cursor.close()

cnx.commit()
cnx.close()