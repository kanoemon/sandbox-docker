<?php

$db = new PDO('mysql:host=mysql5.7-web-sandbox;dbname=sample01', 'root', 'password');
foreach($db->query('select * from name') as $row) {
    echo $row['name'] . '<br>';
}

echo 'hogehogeaaaaa';
