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
            max-height: 250px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h2>
<?php
$name = $unserArray['name'];
echo $name;
?></h2>
<h4><?php
    $position = $unserArray['position'];
    echo $position;
    ?></h4>
</div>
<div class="block">
    <div class="float-left">
        <p>
            <?php
            $tel = $unserArray['tel'];
            echo $tel;
            ?>
        </p>
        <p>
            <?php
            $email = $unserArray['email'];;
            echo "Эл. почта: $email";
            ?>
        </p>
        <p>
            <?php
            $wage = $unserArray['wage'];;
            echo "Предполагаемый уровень зарплаты: $wage";
            ?>
        </p>
        <p>
            <?php
            $age = $unserArray['age'];;
            echo "Возраст: $age";
            ?>
        </p>
        <p>
            <?php
            $exp = $unserArray['exp'];;
            echo "Опыт работы: $exp";
            ?>
        </p>
        <p>
            <?php
            $city = $unserArray['city'];
            echo "Город проживания: $city";
            ?>
        </p>
        <p>
            <?php
            $relocation = $unserArray['relocation'];
            echo "Готов к переезду: $relocation" ;
            ?>
        </p>
    </div>
    <div class="avatar float-left">
        <?php
        $photo = $unserArray['photo'] ;
        echo $photo;
        ?>
    </div>
</div>
<div class="block">
    <?php
    $proficiency = $unserArray['proficiency'];
     <<< HERE
        $proficiency;
HERE;
    ?>
</div>
</div>
</body>
</html>