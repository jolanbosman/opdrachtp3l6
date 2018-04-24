<?php

include ('head.php');
include('helloworld.php');

$dbc = mysqli_connect($host,$user,$pass,$db) or die ('Error Connecting.');
echo 'Succes!';

include('footer.php');