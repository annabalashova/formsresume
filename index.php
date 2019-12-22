<?php ini_set('display_errors',1);

include 'function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $inputName = filterInput($_POST['name']);
    $inputPosition = filterInput($_POST['position']);
    $inputTel = filterInput($_POST['tel']);
    $inputEmail = filterInput($_POST['email']);
    $inputWage = filterInput($_POST['wage']);
    $inputAge = filterInput($_POST['age']);
    $inputExp = filterInput($_POST['exp']);
    $inputCity = filterInput($_POST['city']);
    $inputProficiency = filterInput($_POST['proficiency']);
    $inputRelocation = filterInput($_POST['relocation']);
}
    $resume = [];

if (!validateString($inputName)){
    $resume['name'] = $inputName ;
    }
if (!validateString($inputPosition)){
    $resume['position'] = $inputPosition ;
}
if (!validateString($inputTel)){
    $resume['tel'] = $inputTel ;
}

if (!validateString($inputEmail)){
    $resume['email'] = $inputEmail ;
}

if (!validateString($inputWage)){
    $resume['wage'] = $inputWage ;
}

if (!validateString($inputAge)){
    $resume['age'] = $inputAge ;
}

if (!validateString($inputExp)){
    $resume['exp'] = $inputExp ;
}

if (!validateString($inputCity)){
    $resume['city'] = $inputCity ;
}

if (!validateString($inputProficiency)){
    $resume['proficiency'] = $inputProficiency ;
}

if (!validateString($inputRelocation)){
    $resume['relocation'] = $inputRelocation ;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["avatar"])) {
    uploadFile();
}
print_r($resume);

$serArray = serialize($resume);
$file = fopen ("../array.txt", "w");
fwrite($file, $serArray);
fclose($file);

//$content= file_get_contents("../
$file = fopen("../array.txt", "r");
$content = fread($file, 999);
fclose($file);
$unserArray = unserialize($content);
global $unserArray;
print_r($unserArray);
?>
    <div class "menu">
    <span>
    <a href="?mode=view">Просмотр</a>
</span>
    <span>
    <a href="?mode=edit">Редактирование</a>
</span>
    </div>
<?php
$mode = $_GET['mode'];
if($mode == 'edit'){include 'formsforresume.php';
} elseif($mode == 'view' || $mode == null){
    include 'resumeforms.php';
}




