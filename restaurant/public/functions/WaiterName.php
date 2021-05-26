<?php
$session_id = Session()->get('userID');
$name = DB::table('uzytkownicy')->where('id', $session_id)->pluck('imie');
$surname = DB::table('uzytkownicy')->where('id', $session_id)->pluck('nazwisko');
?>

<p><?php
    $name = trim($name, '[]');
    $name = trim($name, '"');
    $surname = trim($surname, '[]');
    $surname = trim($surname, '"');
    echo $name; echo " "; echo $surname ?></p>

