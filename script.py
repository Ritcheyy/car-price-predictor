import sys, json
from cores import TransformIN, CarModel

# Load the data that PHP sent us
try:
    # data = json.loads(sys.argv[1])
    # Load from Json File to py array
    with open('data.json') as paramt:
        data = json.load(paramt)
except:
    print("ERROR")
    sys.exit(1)


# Transform User input with LabelEncoder
userInput = TransformIN.transformInput(data)

# Predict price
predict_price = CarModel.predictPrice(userInput)

# Send it to stdout (to PHP)
result = {'result':predict_price}
print(json.dumps(result))