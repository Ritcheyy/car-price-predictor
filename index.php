<?php
    require 'car_names.php';
?>

    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/scripts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="assets/MaterializeCss/css/materialize.min.css" media="screen,projection" />
        <link type="text/css" rel="stylesheet" href="assets/index.css" media="screen,projection" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="green" />
        <title>Car Price Predictor</title>
    </head>

    <body>
        <div id="preloader">
            <i class="fa fa-car fa-5x fa-spin white-text"></i>
        </div>

        <div class="navbar-fixed">
            <nav class="white">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo green-text left"><img src="assets/Curators_copy.jpg"/></a>
                    <ul class="right">
                        <li>
                            <a href="" onclick="window.location.reload()" class="green-text"><i class="fa fa-refresh"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container-fluid">
            <form class="form green" method="post" action="predict.php">
                <div class="row">
                    <h5 class="center white-text">Do you want to Buy or Sell a Car?</h5>
                    <h6 class="center white-text">Select the Car details let's predict the market price for you.</h6>
                    <br>
                    <div class="col l4 m5 s12 offset-l2 offset-m1">
                        <label>Name</label>
                        <select class="browser-default" name="car_name" required>
                        <option value="" disabled selected>Select Car Name and Model</option>
                        <?php 
                            foreach ($names as $name) {
                                echo "<option>".$name."</option>";
                            }
                        ?>
                    </select>
                    </div>

                    <div class="col l4 m5 s12">
                        <label>Location</label>
                        <select class="browser-default" name="car_location" required>
                        <option value="" disabled selected>Select Location</option>
                        <?php
                            $locations_arr = ['Abia', 'Abuja', 'American Imports', 'Anambra', 'Cotonou', 'Cross-river', 'Delta', 'Edo', 'Enugu', 'Ibadan', 'Imo', 'Kaduna', 'Kwara', 'Lagos', 'Ogun', 'Ondo', 'Oyo', 'Rivers', 'Ship & Import Ready'];

                            foreach ($locations_arr as $loc) {
                                echo "<option>".$loc."</option>";
                            }
                        ?>
                    </select>
                    </div>

                    <div class="col l4 m5 s12 offset-l2 offset-m1">
                        <label>Condition</label>
                        <select class="browser-default" name="car_condition" required>
                        <option value="" disabled selected>Select Car Condition</option>
                        <option>Brand New</option>
                        <option>Foreign Used</option>
                        <option>Locally Used</option>
                    </select>
                    </div>

                    <div class="col l4 m5 s12">
                        <label>Year</label>
                        <select class="browser-default" name="car_year" required>
                        <option value="" disabled selected>Select Car Year</option>
                        <?php
                            // $i = 1988;
                            for($i=2018; $i >= 1988; $i--){
                                echo "<option>".$i."</option>";
                            }
                        ?>
                    </select>
                    </div>

                    <div class="col l4 m5 s12 offset-l2 offset-m1">
                        <label>Mileage (km)</label>
                        <input type="number" step="500" value="0" max="500000000" name="car_mileage" class="browser-default inputMil" required/>
                    </div>

                    <div class="col l4 m5 s12">
                        <label>Transmission</label>
                        <select class="browser-default" name="car_transmission" required>
                            <option value="" disabled selected>Select Car Transmission</option>
                            <option>Manual</option>
                            <option>Automatic</option>  
                    </select>
                    </div>

                </div>
                <div class="center">
                    <br>
                    <button class="btn btn-large white green-text"><b>Submit</b></button>
                    <br>
                    <br>
                </div>

            </form>
        </div>



        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/MaterializeCss/js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('select').material_select();
            });
        </script>

        <script src="assets/scripts/loader.js" type="text/javascript"></script>
    </body>

    </html>