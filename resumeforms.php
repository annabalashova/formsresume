<html>
<head>
    <title>Резюме</title>
    <style>
        .wrapper {
            width: 740px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .block {
            border-top: 1px solid #333333;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        .avatar {
            text-align: right;
            max-height: 60px;
        }
        img {
            max-height: 150px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h2>
<?php
$name = !empty($unserArray['name']) ? $unserArray['name'] : '';
echo $name;
?></h2>
<h4><?php
    $position = !empty($unserArray['position']) ? $unserArray['position'] : '';
    echo $position;
    ?></h4>
</div>
<div class="block">
    <div class="float-left">
        <p>
            <?php
            $tel = !empty($unserArray['tel']) ? $unserArray['tel'] : '';
            echo $tel;
            ?>
        </p>
        <p>
            <?php
            $email = !empty($unserArray['email']) ? $unserArray['email'] : '';
            echo "Эл. почта: $email";
            ?>
        </p>
        <p>
            <?php
            $wage = !empty($unserArray['wage']) ? $unserArray['wage'] : '';
            echo "Предполагаемый уровень зарплаты: $wage грн.";
            ?>
        </p>
        <p>
            <?php
            $age = !empty($unserArray['age']) ? $unserArray['age'] : '';
            echo "Возраст: $age";
            ?>
        </p>
        <p>
            <?php
            $exp = !empty($unserArray['exp']) ? $unserArray['exp'] : '';
            echo "Опыт работы(лет): $exp";
            ?>
        </p>
        <p>
            <?php
            $city = !empty($unserArray['city']) ? $unserArray['city'] : '';
            echo "Город проживания: $city";
            ?>
        </p>
        <p>
            <?php
            $relocation = !empty($unserArray['relocation']) ? $unserArray['relocation'] : '';
            echo "Готов к переезду: $relocation" ;
            ?>
        </p>
    </div>
    <div class="avatar float-left">
        <?php $photo = !empty($unserArray['photo']) ? $unserArray['photo'] : '';?>
        <img src="<?php echo $photo;?>">

    </div>
</div>
<div class="block">
    <?php
    $proficiency = !empty($unserArray['proficiency']) ? $unserArray['proficiency'] : '';
     echo <<< HERE
        $proficiency
HERE;
    ?>
</div>
</div>
</body>
</html>