<?php
$final_data = file_get_contents('user_data.json');
$final_data = json_decode($final_data);

if(!empty($final_data)){
    $index = 0;

    foreach($final_data as $row){

        echo "<tr>";
        echo "<td>ID: </td>".$row -> id;
        echo "</tr>";
        echo "<br />";
        echo "<tr>";
        echo "<td>Name: </td>".$row -> name;
        echo "</tr>";
        echo "<br />";
        echo "<tr>";
        echo "<td>Email: </td>".$row -> email;
        echo "</tr>";
        echo "<br />";
        echo "<tr>";
        echo "<td>Subject: </td>".$row -> subject;
        echo "</tr>";
        echo "<br />";
        echo "<tr>";
        echo "<td>Message: </td>".$row -> message;
        echo "</tr>";
        echo "<br />";
        echo"<a href='edit.php?edit_id=".$index."'>Edit |</a>";
        echo"<a href='delete.php?delete_id=".$index."'> Delete</a>";     
      
        $index ++; //increment the index
        echo "<hr>";
 
    }
    
}
?>