<html>
<head>
    <title>add-user</title>
    <style type='text/css'>
        .err{border-color: red}
    </style>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data" autocomplete="on">
    <lablel>Фамилия, имя, отчество</lablel>
    <br>
    <input name="name" value="<?php if(array_key_exists('name', $unserArray)) echo $unserArray['name'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('name', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>Должность</lablel>
    <br>
    <input name="position" value="<?php if(array_key_exists('position', $unserArray)) echo $unserArray['position'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('position', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>Телефон</lablel>
    <br>
    <input name="tel" value="<?php if(array_key_exists('tel', $unserArray)) echo $unserArray['tel'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('tel', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>email</lablel>
    <br>
    <input name="email" value="<?php if(array_key_exists('email', $unserArray)) echo $unserArray['email'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('email', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>Предполагаемый уровень<br> зарплаты(грн.) </lablel>
    <br>
    <input name="wage" value="<?php if(array_key_exists('wage', $unserArray)) echo $unserArray['wage'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('wage', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>Возраст</lablel>
    <br>
    <input name="age" value="<?php if(array_key_exists('age', $unserArray)) echo $unserArray['age'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('age', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>Опыт работы(лет)</lablel>
    <br>
    <input name="exp" value="<?php if(array_key_exists('exp', $unserArray)) echo $unserArray['exp'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('exp', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>Город проживания</lablel>
    <br>
    <input name="city" value="<?php if(array_key_exists('city', $unserArray)) echo $unserArray['city'];
    else echo 'Введите корректные данные'?>" <?php if(!array_key_exists('city', $unserArray)) echo 'class="err"'?>>
    <br>
    <lablel>Знания и навыки</lablel>
    <br>
    <textarea placeholder="<?php if(array_key_exists('proficiency', $unserArray))echo $unserArray['proficiency'];
    else echo 'Введите данные'?>" name="proficiency" cols="45" rows="8"
        <?php if(!array_key_exists('proficiency', $unserArray)) echo 'class="err"'?>></textarea>
    <br>
    <label>Согласны на переезд</label>
    <br>
    <input type="radio" name="relocation" value="да">да
    <br>
    <input type="radio" name="relocation" value="нет">нет
        <br><br>
        <input type="file" name="avatar">
        <button type="submit" name="upload">Отправить</button>
</form>
</body>
</html>