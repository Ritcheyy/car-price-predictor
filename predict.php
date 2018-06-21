<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['car_name'];
        $location = $_POST['car_location'];
        $useType = $_POST['car_condition'];
        $year = $_POST['car_year'];
        $mileage = $_POST['car_mileage'];
        $transmission = $_POST['car_transmission'];


        // Open File to pass parameters
        $data_file = fopen("data.json", "w") or die("Unable to open file!");

        // Writing parameters to a Json file
        $data = [$name, $location, $useType, $year, $mileage, $transmission];
        fwrite($data_file, json_encode($data));
        fclose($data_file);

        // Execute the python script after passing the JSON data
        $run_py = shell_exec('python script.py');

        // Decode the result
        $resultData = json_decode($run_py, true);

        header('Location: output.php?price='.$resultData['result']);
    
    } else{
        echo "An Error Occured!";
    }

    // $name = 'Toyota Camry XLE Automatic';
    // $location = 'Lagos';
    // $useType = 'Foreign Used';
    // $year = '2009';
    // $mileage = '78743';
    // $transmission = 'Automatic';

    
?>
