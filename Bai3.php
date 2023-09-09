<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST['so'])) {
    if (is_numeric($_POST['so'])) {
        switch ($_POST['so']) {
            case 0:
                $chu = "không";
                break;
            case 1:
                $chu = "Một";
                break;
            case 2:
                $chu = "Hai";
                break;
            case 3:
                $chu = "Ba";
                break;
            case 4:
                $chu = "Bốn";
                break;
            case 5:
                $chu = "Năm";
                break;
            case 6:
                $chu = "Sáu";
                break;
            case 7:
                $chu = "Bảy";
                break;
            case 8:
                $chu = "Tám";
                break;
            case 9:
                $chu = "Chín";
                break;
            default:
                $chu="Không hợp lệ";
                break;
        }
    }
}
?>
<style>
    * {
        padding: 10px;
        margin: 0 70px;
        box-sizing: border-box;

    }

    table {
        width: 600px;
        height: 100px;
        border-collapse: collapse;
    }

    table,
    td {
        border: 2px solid black;
        font-weight: bold;
    }

    .header {
        background: linear-gradient(90deg, rgb(162, 222, 57) 0%, rgb(18, 138, 96) 35%, rgb(42, 90, 222) 100%);
    }

    .content1 {
        background-color: rgb(121, 211, 85);

    }

    .content2 {
        background-color: rgb(21, 142, 118);

    }

    .content3 {
        background-color: rgb(59, 125, 196);

    }

    .footer1 {
        background-color: rgb(121, 211, 85);
    }

    .footer2 {
        background-color: rgb(59, 125, 196);

    }

    .submit {
        background: linear-gradient(90deg, rgb(244, 153, 68) 10%, rgb(231, 68, 53)70%);
        font-weight: bold;
        border-radius: 10px;
        cursor: pointer;
        border: none;
    }

    .submit:hover {
        box-shadow: 0px 0px 40px #c1f505;
    }
</style>


<body>
    <form action="#" method="POST">
        <table>
            <tr>
                <td class="header" colspan="6">Đọc số</td>
            </tr>
            <tr>
                <td class="content1" colspan="2">Nhập số (0-9)</td>
                <td class="content2" rowspan="3"><input class="submit" type="submit" value="Submit"></td>
                <td class="content3" colspan="3">Bằng chữ</td>
            </tr>
            <tr>
                <td class="footer1"  colspan="2"><input type="text" name="so"></td>

                <td class="footer2"  colspan="3"><input type="text" name="chu" value="<?php echo $chu; ?>"></td>
            </tr>
        </table>
    </form>
</body>

</html>