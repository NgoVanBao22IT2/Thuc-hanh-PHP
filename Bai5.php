<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
function giai_PT_bac_1($a,$b){
    if($a==0){
        if($b==0)
            $nghiem = "phuong trinh co vo so nghiem";
        if($b<>0)
            $nghiem = "Phuong trinh vo nghiem";
    }else{
        $x=round(-($b/$a),2);
        $nghiem="x=$x";
    }
    return $nghiem;
}

function giai_PT_bac_2($a,$b,$c)
{
    if($a==0)
        $nghiem = giai_PT_bac_1($b,$c);
        if($a<>0){
            $delta = pow($b,2)-4*$a*$c;
            if($delta<0)
            $nghiem = "Phuong trinh vo nghiem";
            if($delta==0){
                $nghiem = "Phuong trinh co nghiem kep x1=x2=".-($b/2*$a);
            }else{
                $can = sqrt($delta);
                $x1 = (-$b+$can)/(2*$a);
                $x2 = (-$b-$can)/(2*$a);
                $nghiem = "Phuong trinh co 2 nghiem phan biet x1=".round($x1,2)." x2=".round($x2,2);
            }
            
        }
        return $nghiem;
    
    }
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        $nghiem = giai_PT_bac_2($_POST['a'], $_POST['b'], $_POST['c']);
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
        border-collapse: collapse ;

    }

    .header:nth-child(1){
        background: #2981c0;
        text-align: center;
        font-weight: bold;
    }
    .footer{
        margin-left: 350px;
        width: 100px;
        background-color: #2981c0;
        border: 1px solid blue;
    }
    .kq{
        width: 550px;
    }
    table{
        width: 800px;
        margin-left: 400px;
        margin-top: 20px;
    }
    input{
        margin-left: 5px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .content{
        padding-left: 4px;
    }

   
  
</style>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td class="header" colspan="6">Giai phuong trinh bac 2</td>
            </tr>
            <tr>
                <td class="content">Phuong trinh</td>
                <td><input type="text" name="a"><label for=""> X<sup>2</sup></label></td>
                <td><input type="text" name="b"><label for=""> X +</label></td>
                <td><input type="text" name="c"><label for=""> = 0</label></td>

            </tr>
            <tr>
                <td class="content"><label for="">Nghiem</label></td>
                <td colspan="3"><input class="kq" type="text" value="<?php if(isset($nghiem)) echo $nghiem ?>" ></td>
            </tr>
            <tr>
                <td colspan="5">
                    <input class="footer" type="submit" value="Xuat">
                </td></tr>
        </table>
    </form>
</body>
</html>