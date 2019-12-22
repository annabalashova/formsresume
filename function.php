<?php
function filterInput($var)
{
    return htmlspecialchars(strip_tags(stripslashes(trim($var))));
}

function validateString($var)
{
    if (empty($var) || strlen($var) < 2 || strlen($var) > 32)
    {
        return true;
    }
    return false;
}
function uploadFile() {
    if ($_FILES['avatar']['error'] != 0) {
        switch ($_FILES['avatar']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo 'Файл превышает допустимый размер';
                break;
            case UPLOAD_ERR_PARTIAL:
                echo 'Загружаемый файл был получен не полностью';
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo 'Не удалось записать файл на диск';
                break;
        }
    } else {
        $whitelist = ['image/jpeg', 'image/gif', 'image/png'];
        $imagesize = getimagesize($_FILES['avatar']['tmp_name']);
        $blacklist = ['.php', '.phtml', '.php3', '.php4'];
        foreach ($blacklist as $ext)
            if (!in_array($_FILES['avatar']['type'], $whitelist)) {
                exit('Недопустимый тип файла');
            } elseif (!in_array($imagesize['mime'], $whitelist)) {
                exit('Недопустимый тип файла');
            } elseif (strpos($_FILES['avatar']['name'], $ext) !== false) {
                exit ('Недопустимое расширение файла');
            } else {
                $fileName = $_SERVER["DOCUMENT_ROOT"] . "/images/" . $_FILES["avatar"]["name"];
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $fileName)) {
                    $resume['photo'] = $fileName;
                }
            }
    }

}

