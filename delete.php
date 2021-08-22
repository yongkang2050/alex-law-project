<?php
$current_data = file_get_contents('user_data.json');
$current_data = json_decode($current_data);

if(isset($_GET['delete_id'])){
    $current_data = file_get_contents('user_data.json'); //get file
    $current_data = json_decode($current_data); //decode json

    $delete_id = $_GET['delete_id']; //get the id
    unset($current_data[$delete_id]); //delete data

    $current_data = json_encode($current_data, JSON_PRETTY_PRINT); //print in pretty

    file_put_contents('user_data.json', $current_data); //save the file

    header('location:listView.php'); //redirect index
}

?>