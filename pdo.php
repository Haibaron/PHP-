<?php
conn = new PDO("mysql:host=localhost;dbname=zshop","root","",array(PDO::ATTR_PERSISTENT => true));
$sql = 'select * from zh_users';
$res = $conn->query($sql);

while ($p = $res -> fetch()) {
    var_dump($p);
}
