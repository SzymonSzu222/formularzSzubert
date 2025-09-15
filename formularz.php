
<?php
    $name=$_GET['imie'];
    $lastname=$_GET['nazwisko'];
    $where=$_GET['skad'];
    $front=$_GET['przod'];
    $notfront=$_GET['tyl'];
    $ultras=$_GET['kibic'];
    echo ($name ."<br>". $lastname ."<br>". $where ."<br>". $front ."<br>". $notfront ."<br>". $ultras );
?>

