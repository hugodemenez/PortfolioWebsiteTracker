import datetime
import mysql.connector






class MyDatabase:
    def __init__(self):
        pass
    
    
    def add_new_portfolio(self,name:str):
        cnx = mysql.connector.connect(user='hugodemenez', database='database',password='password')
        cursor = cnx.cursor()

        query = (f"INSERT INTO portfolio values ('{name}')")


        self.execute_request(cursor, query, cnx)
        
    def get_portfolios(self) -> list:
        cnx = mysql.connector.connect(user='hugodemenez', database='database',password='password')
        cursor = cnx.cursor()

        query = 'SELECT * FROM portfolio'

        cursor.execute(query)

        results = cursor.fetchall()
        cursor.close()
        return [value[0] for value in results]
    
    
    def add_new_value_to_portfolio(self,portfolioName,value):
        cnx = mysql.connector.connect(user='hugodemenez', database='database',password='password')
        cursor = cnx.cursor()
        query = (f"INSERT INTO data values ('{portfolioName}','{datetime.date.today()}',{value})")


        self.execute_request(cursor, query, cnx)

    def execute_request(self, cursor, query, cnx):
        cursor.execute(query)
        cursor.close()
        cnx.commit()
        cnx.close()