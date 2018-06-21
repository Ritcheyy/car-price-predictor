<?php
    if(isset($_GET['price'])){
        $price = $_GET['price'];
        $data_file = fopen("data.json", "r") or die("Unable to open file!");
        $paramet = fread($data_file,filesize("data.json"));
        $input = json_decode($paramet, true);
        fclose($data_file);

        $text = "The predicted price for a ".$input[2].", ".$input[5].", ".$input[0].", ".$input[3]." with a mileage of ".$input[4]." from ".$input[1]." is: ";
    } else{
        echo "An Error Occured";
        die;
    }
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
        <div class="navbar-fixed">
            <nav class="white">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo green-text left"><img src="assets/Curators_copy.jpg"/></a>
                    <ul class="right">
                        <li>
                            <a href="/cpp" class="green-text"><i class="fa fa-refresh"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container-fluid">
            <div class="form green">
                <div class="row">
                    <br><br><br><br>
                   <h5 class="center white-text" id="pre_text" >Analyzing....</h5>
                    <div class="center">
                        <img id="progress" src="assets/progress_gif.gif" width="100px"/>
                    </div>

                    <h5 class="center white-text" id="text" style="visibility: hidden;"><?php echo $text?></h5>
                     <h2 id="price" class="center black-text" style="visibility: hidden;">₦ <?php echo $price?></h2>
                    
                    <br>
                </div>  
            </div>
        </div>



        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/MaterializeCss/js/materialize.min.js"></script>
        <script src="assets/scripts/analyzer.js" type="text/javascript"></script>
    </body>

    </html>