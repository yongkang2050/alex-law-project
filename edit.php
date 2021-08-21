<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit</title>
</head>
<body>
<?php

$edit_id=$_GET['edit_id'];
$current_data = file_get_contents('user_data.json');
$array_data = json_decode($current_data, true);
$row= $array_data[$edit_id];
?>

<?php
if(isset($_POST['btnUpdate']))
{
$update_arr= array(
    'id' => $_POST['id'],
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'subject' => $_POST['subject'],
	'message' => $_POST['message']
);

$array_data[$edit_id] = $update_arr;
$current_data = json_encode($array_data,JSON_PRETTY_PRINT);
file_put_contents('user_data.json',$current_data);

header('location: index.php');
}
?>

<form method="post" name="frmUpdate">
    <table align="center">
        <tr>
            <td colspan="2" align="center">Update Record</td>
</tr>
<tr>
    <td>ID.</td>
    <td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
</tr>
<tr>
    <td>Name</td>
    <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
</tr>
<tr>
    <td>Email</td>
    <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
</tr>
<tr>
    <td>Subject</td>
    <td><input type="text" name="subject" value="<?php echo $row['subject'];?>"></td>
</tr>
<tr>
    <td>Message</td>
    <td><input type="text" name="message" value="<?php echo $row['message'];?>"></td>
</tr>

<tr>
    <td colspan="2" align="center"><input type="submit" value="Update" name="btnUpdate"> 
</tr>
</table>
</form>
</body>
</html>

