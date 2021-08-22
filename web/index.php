<?php
$user     = "user"; 
$password = "teste"; 
$hostname = "mysql";
$port     = 3306; 
$database = "employees";
echo exec('echo $MYSQL_HOST');
$mysqli = new mysqli($hostname, $user, $password, $database, $port);
if ($mysqli->connect_errno) {
  echo nl2br('Conexão falhou:' . PHP_EOL . $mysqli->connect_error);
  exit();
}
$result = $mysqli->query("SHOW DATABASES");
$dbs    = [];
echo nl2br('Databases:' . PHP_EOL);
while($row = $result->fetch_row()) {
  $dbs[] = $row[0];
  echo nl2br($row[0] . PHP_EOL);
}
echo nl2br(PHP_EOL . "Tabelas de " . $database . ":" . PHP_EOL);
if (in_array($database, $dbs)) {
  $result = $mysqli->query('SHOW TABLES FROM ' . $database);
  while($row = $result->fetch_row()) {
    $dbs[] = $row[0];
    echo nl2br($row[0] . PHP_EOL);
  } 
} else {
  echo nl2br("Base não restaurada." . PHP_EOL);
}
$mysqli->close();