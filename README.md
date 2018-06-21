# Car Price Predictor (PHP | Python)
### (Underdeveloped)
A ML web application that predicts the market price of a car for a seller that has no idea how much to sell, and a buyer that doesn't know how much to budget, based on given information. 
<br/>Car price predictor still runs on an accuracy of 55%.

#### C.P.P uses DecisionTreeRegression. 
#### Data were gotten from [Cheki](http://cheki.com.ng)

## Structure
* assets (frontend)
* Cores
  * finalized_car_model.sav   __//the trained model__
  * Carmodel.py    __//loads the model from the saved file for use__
  * new_cars_data.csv    __//the cleaned data that was used in training the model__
  * TransformIN.py   __//module for transforming categorical input variables into integers__
  
* car_names.php    __//An array of all available car names in the data___
* data.json    __//for transfering inputs between PHP & Python__
* index.php    __//homepage__
* predict.php    __//gets all inputs and run python script__
* output.php     __//shows output returned from python script__
* script.py    __//gets input and do the prediction__

<p align="">
  <img align="" src="https://github.com/RitcheyDevs/car_price_predictor/blob/master/assets/localhost_cpp_(iPhone%206_7_8%20Plus)%20(2).png" width="250"/>
  <img align="" src="https://github.com/RitcheyDevs/car_price_predictor/blob/master/assets/localhost_cpp_output.php_price%3D13000000(iPhone%206_7_8%20Plus).png" width="250"/>
</p>
