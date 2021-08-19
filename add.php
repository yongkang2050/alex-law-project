
<?php

if(isset($_POST['btnadd'])){
    $data = file_get_contents('users.json');
    $data = json_decode($data, true);
    $data_arr = array(
        'Name' => $_POST['name'],
        'Email' => $_POST['email'],
        'Subject' => $_POST['subject'],
        'Mass'=> $_POST['Massenge']

    );
    $data[] = $data_arr;
    $data = json_encode($data, JSON_PRETTY_PRINT);

    file_put_contents('users.json', $data);
}

?>

<form method = "post" name = "form_add">
<input type = "number" name = "Name">
<input type = "email" name = "Email">
<input type = "text" name = "Subject">
<input type = "text" name = "Massenge">
<input type = "submit" value = "add" name = "btnadd">

</form>