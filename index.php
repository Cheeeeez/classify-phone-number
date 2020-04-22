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
    $mobiphone = [];
    $vinaphone = [];
    $viettel = [];
    classifyPhoneNumber($phoneNumberArray);
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
</head>
<body>
<form action="" method="post">
    <textarea id="phone-number" name="phone-number" rows="10">0967654321,0974100531,0989382516,0914093671,0939219680,0892185021,0943215830,0888732301,0909396704</textarea><br>
    <button type="submit">Classify</button>
</form>
<br>
<?php
if (!empty($viettel)) {
    echo 'Những số điện thoại viettel là: ';
    echo "<ul>";
    foreach ($viettel as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
}

if (!empty($vinaphone)) {
    echo 'Những số điện thoại vinaphone là: ';
    echo "<ul>";
    foreach ($vinaphone as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
}

if (!empty($mobiphone)) {
    echo 'Những số điện thoại mobiphone là: ';
    echo "<ul>";
    foreach ($mobiphone as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>