<?php

// confirmQuery Function

function confirmQuery($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED".mysqli_error($connection));
    }
}

//insery password for counting how many time passwords is generate

function insertPassword(){

    global $connection;
    global $password;
    $password = "";
    if(isset($_POST['submit'])){

        $input_number =  ($_POST['input_number']);

        $capital_letter = isset($_POST['capital_letter']) ? true :false;
        $small_letter = isset($_POST['small_letter']) ? true :false;
        $number = isset($_POST['number']) ? true :false;
        $special = isset($_POST['special']) ? true :false;


        $time = time();

        if((!empty($input_number) || $input_number != "") && is_numeric($input_number)  || ($capital_letter == true || $small_letter==true || $number == true || $special == true)){
            if($input_number <= 74){
                $original_text = "";
                if($capital_letter == true){
                    $original_text .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                }
                if($small_letter == true){
                    $original_text .= "abcdefghijklmnopqrstuvwxyz";
                }
                if($number == true){
                    $original_text .= "0123456789";
                }
                if($special == true){
                    $original_text .= "!@#$%^&*()_+?><:~";
                }
                if(!$capital_letter && !$small_letter && !$number && !$special){
                    $original_text .= "abcdefghijklmnopqrstuvwxyz0987654321ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+";
                }
                $convert_array = str_split($original_text);
                shuffle($convert_array);
                $convert_string = join("",$convert_array);
                $password = "";
                for($i=0; $i<$input_number; $i++){
                    $password .= "{$convert_string[$i]}";
                }

                $query = "INSERT INTO `random_password`(`session_time`, `password`) VALUES ('$time','$password')";
                $query_insert_passwword = mysqli_query($connection,$query);
                confirmQuery($query_insert_passwword);
            }else{
                echo "<a href='' class='text-danger p-3'> We dont accept more than 74 character </a>";
            }
        }else{
            echo "<a href='' class='text-danger p-3'> We dont accept your query </a>";
        }
    }
}
// count Password

function countPassword(){
    global $connection;
    $query = "SELECT * FROM `random_password`";
    $query_fetch_all_password = mysqli_query($connection,$query);
    $password_count = mysqli_num_rows($query_fetch_all_password);
    if($password_count > 0){
        echo "<p>***Awesome Total {$password_count} Times Generate</p>";
    }else{
        echo "0 Times";
    }
}




?>