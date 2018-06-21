import pickle

def predictPrice(userInput):
    loaded_model = pickle.load(open('cores/finalized_car_model.sav', 'rb'))
    result = loaded_model.predict([userInput])
    return int(result)
