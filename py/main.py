from database import MyDatabase


MyDatabase().add_new_portfolio("Hugo")

values = [
    40,50,80,200
]

portfolios = MyDatabase().get_portfolios()


for portfolio in portfolios:
    for value in values: 
        MyDatabase().add_new_value_to_portfolio(portfolio,value)