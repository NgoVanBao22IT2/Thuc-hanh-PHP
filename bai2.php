<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
if(isset($_POST['a']) && isset($_POST['b'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    if($a==0){
        if($b==0)
            $nghiem = "phuong trinh co vo so nghiem";
        if($b<>0)
            $nghiem = "Phuong trinh vo nghiem";
    }else{
        $x=-($b/$a);
        $x=round($x,2);
        $nghiem="x=$x";
    }
}
?>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    td{
        border: 1px solid black;
        width: 500px;
        padding: 2px;

    }
    form{
        border: 2px solid black;
        width: 610px;
        height: 120px;
        margin-left: 450px;
        margin-top: 20px;
    }
    .header:nth-child(1){
        background: #2981c0;
        text-align: center;
        font-weight: bold;
    }
    .footer{
        margin-left: 250px;
        width: 70px;
    }
   
  
</style>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td class="header" colspan="5">Giai phuong trinh bac 1</td>
            </tr>
            <tr>
                <td class="content">Phuong trinh</td>
                <td><input type="text" name=a></td>
                <td><label for="">X +</label></td>
                <td><input type="text" name=b></td>
                <td><label for="">= 0</label></td>
            </tr>
            <tr>
                <td><label for="">Nghiem</label></td>
                <td colspan="4"><input type="text" value="<?php if(isset($nghiem)) echo $nghiem ?>" ></td>
            </tr>
            <tr>
                <td colspan="5">
                    <input class="footer" type="submit" value="Xuat">
                </td></tr>
        </table>
    </form>
</body>
</html>