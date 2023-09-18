<?php 
require('database.php');
$query = 'SELECT * FROM categories ORDER BY categoryID ';
$statement = $db -> prepare($query);
$statement -> execute();
$Categories = $statement -> fetchAll();
$statement-> closeCursor();


?>

<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    td{
        border: none;
        width: 500px;
        padding: 2px;

    }
    form{
        border: 2px solid black;
        width: 610px;
        height: 230px;
        margin-left: 450px;
        margin-top: 20px;
    }
    th{
        background: #f39a34;
        height: 70px;
    }
    label, a{
        padding-left: 10px;
    }
    .button{
        margin-left: 278px;
    }
    .button:hover{
        cursor: pointer;
    }
   
   

</style>
<body>

    <form action="add_product.php" method="post" id="add_product_form">
        <table>
            
            <tr>
                <th colspan="2">Product Manager <br>
                    Add Product</th>
                
            </tr>
            <tr >
                <td ><label for="">Category:</label></td>
                <td><select name="category_id">
                    <?php foreach ($Categories as $category) : ?>
                        <option value="<?php echo $category['categoryID']; ?>">
                            <?php echo $category['categoryName']; ?>
                        </option>
                    <?php endforeach; ?>
                    </select></td>
            </tr>
            <tr>
                <td><label for="">Code:</label></td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td><label for="">Name:</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label for="">List Price:</label></td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="button" type="submit" value="Add Product"></td>
            </tr>
            <tr>
                <td colspan="2"><p><a href="index.php">View Product List</a></p></td>
            </tr>
            <tr>
                <td colspan="2"><p style="text-align: center;">&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p></td>
            </tr>
        </table>
    </form>

    
</body>
</html>