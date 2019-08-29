<b>Timestamp: time и mktime</b>
<p>Для решения задач данного блока вам понадобятся следующие функции: time, mktime.</p>
<p>Выведите текущее время в формате timestamp.</p>
<?php
echo time();
?>
<p>Выведите 1 марта 2025 года в формате timestamp.</p>
<?php
echo mktime(0, 0, 0, 3, 1, 2025);
?>
<p>Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен.</p>
<?php
echo mktime(0,0,0, 12, 31);
?>
<p>Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.</p>
<?php
echo time() - mktime(13, 12, 59, 3, 15, 2000);
?>
<p>Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.</p>
<?php
echo (time() - mktime(7, 23, 48))/3600;
?>
<p></p><br>
<b>Функция date</b>
<p>Для решения задач данного блока вам понадобятся следующие функции: date.</p>
<p>Выведите на экран текущий год, месяц, день, час, минуту, секунду.</p>
<?php
echo date('Y.m.d').'<br>';
echo date ('H:i:s');
?>
<p>Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.</p>
<?php
echo date('Y-m-d').'<br>';
echo date('d.m.Y').'<br>';
echo date('d.m.y').'<br>';
echo date ('H:i:s');
?>
<p>С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'.</p>
<?php
echo date('d.m.Y', mktime(0, 0, 0, 02, 12, 25));
?>
<p>Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения.</p>
<?php
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$day = date('w', mktime());
echo $week[$day];
?>
<br>
<?php
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$day = date('w', mktime(0, 0, 0, 06, 06, 2006));
echo $week[$day];
?>
<p>Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date.</p>
<?php
$month = [1 => 'январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
echo $month[date('n')];
?>
<p>Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.</p>
<?php
echo date('t');
?>
<p>Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.</p>
<form action="" method="GET">
    <input type="text" name="year" placeholder="Введите год" value="<?php if (!empty($_GET['date'])) echo $_GET['date']; ?>">
    <input type="submit" value="Отправить">
</form>
<?php

if (!empty($_REQUEST['year'])) {
    $year = strip_tags($_REQUEST['year']);
    if (date('L', mktime(0, 0, 0, 1, 1, $year)) == 1) {
        echo 'Високосный!';
    } else {
        echo 'Не високосный!';
    }
}
?>
<p>Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.</p>
<form action="" method="GET">
    <input type="text" name="date" placeholder="Введите дату" value="<?php if (!empty($_GET['date'])) echo $_GET['date']; ?>">
    <input type="submit" value="Отправить">
</form>
<?php

if (!empty($_REQUEST['date'])) {
    $date = explode('.', strip_tags($_REQUEST['date']));
    $week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
    echo $week[date('w', mktime(0, 0, 0, $date[1], $date[0], $date[2]))];
}
?>
<p>Сделайте форму, которая спрашивает дату в формате '2025-12-31'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.</p>
<form action="" method="GET">
    <input type="text" name="date" placeholder="Введите дату" value="<?php if (!empty($_GET['date'])) echo $_GET['date']; ?>">
    <input type="submit" value="Отправить">
</form>
<?php

if (!empty($_REQUEST['date'])) {
    $date = explode('-', strip_tags($_REQUEST['date']));
    $month = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
    echo $month[date('n', mktime(0, 0, 0, $date[1], $date[2], $date[0]))];
}
?>
<p></p><br>
<b>Сравнение дат</b>
<p>Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.</p>
<form action="" method="GET">
    <input type="text" name="date1" placeholder="Введите дату" value="<?php if (!empty($_GET['date1'])) echo $_GET['date1']; ?>">
    <input type="text" name="date2" placeholder="Введите дату" value="<?php if (!empty($_GET['date2'])) echo $_GET['date2']; ?>">
    <input type="submit" value="Отправить">
</form>
<?php

if (!empty($_REQUEST['date1']) && !empty($_REQUEST['date1'])) {
    $date1 = strip_tags($_REQUEST['date1']);
    $date2 = strip_tags($_REQUEST['date2']);
    if ($date1 > $date2) {
        echo $date1;
    } elseif ($date1 < $date2) {
        echo $date2;
    } else {
        echo 'даты равны';
    }
}
?>
<p></p><br>
<b>На strtotime</b>
<p>Для решения задач данного блока вам понадобятся следующие функции: strtotime.</p>
<p>Дана дата в формате '2025-12-31'. С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'.</p>
<?php
echo date('d-m-Y', strtotime('2025-12-31'));
?>
<p>Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'.</p>
<form action="" method="GET">
    <input type="text" name="date" placeholder="Введите дату" value="<?php if (!empty($_GET['date'])) echo $_GET['date']; ?>">
    <input type="submit" value="Отправить">
</form>
<?php

if (!empty($_REQUEST['date'])) {
    $data = strip_tags($_REQUEST['date']);
    echo date('H:i:s d.m.Y', strtotime($data));
}
?>
<p></p><br>
<b>Прибавление и отнимание дат</b>
<p>Для решения задач данного блока вам понадобятся следующие функции: date_create, date_modify, date_format.</p>
<p>В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.</p>
<?php
$date = date_create('2025-12-31');
date_modify($date, '2 day');
echo date_format($date, 'd.m.Y') . '<br>';

$date = date_create('2025-12-31');
date_modify($date, '1 month 3 day');
echo date_format($date, 'd.m.Y') . '<br>';

$date = date_create('2025-12-31');
date_modify($date, '1 year');
echo date_format($date, 'd.m.Y') . '<br>';

$date = date_create('2025-12-31');
date_modify($date, '-3 day');
echo date_format($date, 'd.m.Y') . '<br>';
?>
<p></p><br>
<b>Задачи</b>
<p>Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.</p>
<?php
$numYear = date('z');
if (date('L') == 1) $daysYear = 366; else $daysYear = 365;
$newYear = $daysYear - $numYear;
echo 'до Нового Года ' . $newYear . ' дней!';
?>
<p>Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат.</p>
<form action="" method="GET">
    <input type="text" name="year" placeholder="Введите год" value="<?php if (!empty($_GET['year'])) echo $_GET['year']; ?>">
    <input type="submit" value="Отправить">
</form>
<?php

if (!empty($_REQUEST['year'])) {
    $year = strip_tags($_REQUEST['year']);
    for ($i = 1, $arr = []; $i < 12; $i++) {
        $count = mktime(0, 0, 0, $i, 13, $year);
        if (date('w', $count) == 5) {
            $arr[] = date('d-m-Y', $count);
        }
    }
    var_dump($arr);
}
?>
<p>Узнайте какой день недели был 100 дней назад.</p>
<?php
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
$current = strtotime(time());
$date = date_create($current);
date_modify($date, '-100 day');
echo $week[date_format($date, 'w')];
?>