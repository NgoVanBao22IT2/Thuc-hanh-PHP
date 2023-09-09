<?php 
if(isset($_POST['so_dau']) && isset($_POST['so_cuoi'])){
    $so_dau = $_POST['so_dau'];
    $so_cuoi = $_POST['so_cuoi'];
    $tong = 0;
    $tong_chan = 0;
    $tong_le = 0;
    $tich = 1;
    for($i=$so_dau; $i<=$so_cuoi; $i++)
    $tong = $tong + $i;
    for($i=$so_dau; $i<=$so_cuoi; $i++)
    $tich = $tich * $i;
    for($i=$so_dau; $i<=$so_cuoi; $i++)
    if($i%2==0)
    $tong_chan = $tong_chan + $i;
    for($i=$so_dau; $i<=$so_cuoi; $i++)
    if($i%2!=0)
    $tong_le = $tong_le + $i;
    


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    td{
        border: 1px solid #111;
        border-collapse: collapse;
    }
    table{
        border: 1px solid #111;
        margin-left: 450px;
        margin-top: 20px;
    }
</style>
<body>
    <form action="Bai4.php" method="POST">
        <table>
            <tr>
                <td></td>
                <td><label for="start">So bat dau</label></td>
                <td><input type="text" id="start" value="<?php if(isset($_POST['so_dau'])) echo $_POST['so_dau']; ?>"></td>
                <td><label for="end">So ket thuc</label></td>
                <td><input type="text" id="end" value="<?php if(isset($_POST['so_cuoi'])) echo $_POST['so_cuoi']; ?>"></td>
            </tr>
            <tr>
                <td colspan="5"><label for="">Ket qua</label></td>
            </tr>
            <tr>
                <td ><label for="tong">Tong cac so</label></td>
                <td colspan="4"><input type="text" id="tong" name="tong" value="<?php if(isset($tong)) echo $tong; ?>"></td>
            </tr>
            <tr>
                <td ><label for="tich">Tich cac so</label></td>
                <td colspan="4"><input type="text"id="tich" name="tich" value="<?php if(isset($tich)) echo $tich; ?>"></td>
            </tr>
            <tr>
                <td ><label for="chan">Tong cac so chan</label></td>
                <td colspan="4"><input type="text" id="chan" name="tong_chan" value="<?php if(isset($tong_chan)) echo $tong_chan; ?>"></td>
            </tr>
            <tr>
                <td ><label for="le">Tong cac so le</label></td>
                <td colspan="4"><input type="text" id="le" name="tong_le" value="<?php if(isset($tong_le)) echo $tong_le; ?>"></td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="submit" name="submit" value="Tinh toan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>