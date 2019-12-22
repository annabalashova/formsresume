<html>
<body>
<form method="post" action="" enctype="multipart/form-data" autocomplete="on">
    <lablel>Фамилия, имя, отчество</lablel>
    <br>
    <input name="name">
    <br>
    <lablel>Должность</lablel>
    <br>
    <input name="position">
    <br>
    <lablel>Телефон</lablel>
    <br>
    <input name="tel">
    <br>
    <lablel>email</lablel>
    <br>
    <input type="email" name="email">
    <br>
    <lablel>Предполагаемый уровень зарплаты </lablel>
    <br>
    <input name="wage">
    <br>
    <lablel>Возраст</lablel>
    <br>
    <input name="age">
    <br>
    <lablel>Опыт работы</lablel>
    <br>
    <input name="exp">
    <br>
    <lablel>Город проживания</lablel>
    <br>
    <input name="city">
    <br>
    <lablel>Знания и навыки</lablel>
    <br>
    <textarea name="proficiency" cols="45" rows="8"></textarea>
    <br>
    <label>Согласны на переезд</label>
    <br>
    <input type="radio" name="relocation" value="yes">да
    <br>
    <input type="radio" name="relocation" value="no">нет
        <br><br>
        <input type="file" name="avatar">
        <button type="submit" name="upload">Отправить</button>
</form>
</body>
</html>