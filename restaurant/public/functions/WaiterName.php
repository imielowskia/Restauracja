<?php $name = DB::table('uzytkownicy')->where('id', '1')->pluck('imie');
$surname = DB::table('uzytkownicy')->where('id', '1')->pluck('nazwisko');
?>

<p><?php
    $name = trim($name, '[]');
    $name = trim($name, '"');
    $surname = trim($surname, '[]');
    $surname = trim($surname, '"');
    echo $name; echo " "; echo $surname ?></p>

