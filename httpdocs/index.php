<?php

require('../private/connectvars.php');
include('helloworld.php');

$dbc = mysqli_connect(HOST,USER,PASS,DBNAME ) or die ('Error Connecting.');
echo 'Succes!';