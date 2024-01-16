<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: "DejaVu Sans";
            input{
                width: 100%;
            }
        }
    </style>
    <title>Document</title>
</head>
<body>
<form action="savePDF.php">
    Указать наименование собственника жилого помещения или управомоченного лица <input type="text" name="name">
    <br>
    <br>
    Должность, Ф. И. О. полностью <input type="text" name="post">
    <br>
    <br>
    Устава, положения, доверенности <input type="text" name="charter">
    <br>
    <br>
    Ф. И. О. полностью <input type="text" name="fullName">
    <br>
    <br>
    Паспорт серии <input type="text"name="series">
    <br>
    <br>
    Значение <input type="text" name="value">
    <br>
    <br>
    Наименование органа, выдавшего паспорт, дата выдачи <input type="text" name="passport">
    <br>
    <br>
    Код подразделения <input type="text" name="code">
    <br>
    <br>
    Зарегистрированный(ая) по адресу <input type="text" name="address">
    <br>
    <br>
    Квартира/жилой дом/часть квартиры/часть жилого дома <input type="text" name="flat">
    <br>
    <br>
    Указать год постройки <input type="text" name="year">
    <br>
    <br>
    Комнат <input type="text" name="room">
    <br>
    <br>
    Общей полезной площадью <input type="text" name="area">
    <br>
    <br>
    Жилой площадью <input type="text" name="livingArea">
    <br>
    <br>
    Указать наименование правоустанавливающих документов, орган, их выдавший или утвердивший, дату выдачи документов <input type="text" name="documents">
    <br>
    <br>
    Ф. И. О. полностью, паспортные данные/данные свидетельства о рождении <input type="text" name="fullNamePassport">
    <br>
    <br>
    Указать наименование органа, выдавшего справку <input type="text" name="organization">
    <br>
    <br>
    Вписать нужное <input type="text" name="need">
    <br>
    <br>
    Помещения в месяц составляет <input type="text" name="month">
    <br>
    <br>
    Ежемесячно/ежеквартально <input type="text" name="quarter">
    <br>
    <br>
    Не позднее числа<input type="text" name="date">
    <br>
    <br>
    Перечисления причитающейся суммы на расчетный счет Наймодателя/непосредственной передачи Наймодателю с оформлением акта приема-передачи денежных средств за найм Помещения <input type="text" name="money">
    <br>
    <br>
    Наименование суда <input type="text" name="court">
    <br>
    <br>
    Договор вступает в силу со дня его подписания Сторонами и действует до  <input type="text" name="dateEnd">
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>