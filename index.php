<?php

function filterInput($var)
{
    return htmlspecialchars(strip_tags(stripslashes(trim($var))));
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    $resume = [];
    $errors = [];

    if (preg_match('/^[А-Яа-я\s]{10,120}$/u', $inputName) && $inputName != "Введите корректные данные") {
        $resume['name'] = $inputName;
    } else {
        $errors['name'] = $inputName;
    }

    if (preg_match('/^[А-Яа-яA-Za-z0-9\s\.,-:\(\)]{10,120}$/u', $inputPosition) &&
        $inputPosition != "Введите корректные данные") {
        $resume['position'] = $inputPosition;
    } else {
        $errors['position'] = $inputPosition;
    }

    if (preg_match('/^[0-9\s-\(\)+]{10,20}$/u', $inputTel)) {
        $resume['tel'] = $inputTel;
    } else {
        $errors['tel'] = $inputTel;
    }

    if (preg_match('/^[А-Яа-яA-Za-z0-9\s\.,:\(\)_@]{2,50}$/u', $inputEmail) &&
        (strpos($inputEmail, '@') !== false)) {
        $resume['email'] = $inputEmail;
    } else {
        $errors['email'] = $inputEmail;
    }

    if (preg_match('/^[0-9\s]{4,6}$/u', $inputWage)) {
        $resume['wage'] = $inputWage;
    } else {
        $errors['wage'] = $inputWage;
    }

    if (preg_match('/^[0-9]{2}$/u', $inputAge) && $inputAge >= 14 && $inputAge <= 80) {
        $resume['age'] = $inputAge;
    } else {
        $errors['age'] = $inputAge;
    }

    if (preg_match('/^[0-9\.,]{2}$/u', $inputAge) && $inputAge <= 50) {
        $resume['exp'] = $inputExp;
    } else {
        $errors['exp'] = $inputExp;
    }

    if (preg_match('/^[А-Яа-я\s-]{2,50}$/u', $inputCity) && $inputCity != "Введите корректные данные") {
        $resume['city'] = $inputCity;
    } else {
        $errors['city'] = $inputCity;
    }

    if (!empty($inputProficiency) && strlen($inputProficiency) > 2 && strlen($inputProficiency) < 999) {
        $resume['proficiency'] = $inputProficiency;
    } else {
        $errors['proficiency'] = $inputProficiency;
    }

    if (!empty($inputRelocation)) {
        $resume['relocation'] = $inputRelocation;
    } else {
        $errors['relocation'] = $inputRelocation;
    }

        if (!empty($_FILES["avatar"])) {
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
                                $resume['photo'] = "/images/" . $_FILES["avatar"]["name"];
                            }

                        }
                }
            }
        if (!array_key_exists('photo',$resume)){$errors['photo'] = "/images/" . $_FILES["avatar"]["name"];}
        //print_r($resume);
        //print_r($errors);
        if (!empty($errors)) {
            echo "Данные не введены полностью либо введены некорректно<br>";
        }

        if (array_key_exists ('relocation',$errors)) {
            echo "Выберитe значение в пунктe \"Сoгласны на переезд\"<br>";

        }
        if (array_key_exists ('photo',$errors)) {
        echo "Выберитe файл с фотографией";
        }
    if (empty($errors)) {
        echo "Все данные успешно отправлены<br>";
    }



    $serArray = serialize($resume);
        $file = fopen("../array.txt", "w");
        fwrite($file, $serArray);
        fclose($file);
    }

    $file = fopen("../array.txt", "r");
    $content = fread($file, 999);
    fclose($file);
    $unserArray = unserialize($content);

   //print_r($unserArray);
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
    $mode = !empty($_GET['mode']) ? $_GET['mode'] : 'view';
    if ($mode == 'edit') {
        include 'formsforresume.php';
    } elseif ($mode == 'view') {
        include 'resumeforms.php';
    }

