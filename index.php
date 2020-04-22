<?php
include_once "Function.php";
define('VIETTEL', ['086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039']);
define('MOBIPHONE', ['089', '090', '093', '070', '079', '077', '076', '078']);
define('VINAPHONE', ['088', '091', '094', '083', '084', '085', '081', '082']);
define('FIRST_NUMBER_INDEX', 0);
define('THIRD_NUMBER', 3);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumberList = $_REQUEST["phone-number"];
    $phoneNumberArray = explode(',', $phoneNumberList);
    $mobiphone = classifyPhoneNumber($phoneNumberArray, MOBIPHONE);
    $vinaphone = classifyPhoneNumber($phoneNumberArray, VINAPHONE);
    $viettel = classifyPhoneNumber($phoneNumberArray, VIETTEL);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 500px;
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
        }

        td {
            vertical-align: top;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <textarea id="phone-number" name="phone-number" rows="10">0967654321,0974100531,0989382516,0914093671,0939219680,0892185021,0943215830,0888732301,0909396704</textarea><br>
    <button type="submit">Classify</button>
</form>
<br>
<?php if (isset($_REQUEST["phone-number"])): ?>
    <table>
        <tr>
            <th>VIETTEL</th>
            <th>VINAPHONE</th>
            <th>MOBIPHONE</th>
        </tr>
        <tr>
            <td><?php display($viettel); ?></td>
            <td><?php display($vinaphone); ?></td>
            <td><?php display($mobiphone); ?></td>
        </tr>
    </table>
<?php endif; ?>


</body>
</html>