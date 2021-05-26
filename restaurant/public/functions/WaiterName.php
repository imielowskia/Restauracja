<?php $name = DB::table('uzytkownicy')->where('id', '1')->pluck('imie');
$surname = DB::table('uzytkownicy')->where('id', '1')->pluck('nazwisko');
?>

<p><?php echo $name; echo " "; echo $surname ?></p>

