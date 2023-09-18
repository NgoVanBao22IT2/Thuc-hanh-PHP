<?php 
$name = filter_input(INPUT_POST,'name');
if($name == null || $name == false){
    $error = 'Invalid category data. Check on fields and try again.';
    include('error.php');
}else{
    require_once('database.php');
    $query = "INSERT INTO categories (category_name) VALUES (:category_name)";
    $statement = $db -> prepare($query);
    $statement -> bindValue(':category_name', $category_name);
    $statement -> execute();
    $statement -> closeCursor();

    include('category_list.php');

}


?>