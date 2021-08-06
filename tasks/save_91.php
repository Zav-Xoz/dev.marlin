<?php
//var_dump($_POST);

$text = $_POST['text'];                                                                    //  получили значение с глобального массива

$pdo= new PDO("mysql:host=localhost;dbname=marlin;", 'root','root');  //Соеденились с базой
$sql = "INSERT INTO `records` (message) VALUES (:textValue)";                              //  написали запрос

$statement = $pdo->prepare($sql);                                                          //ПОДГОТОВКА ЗАПРОСА
$statement->execute(['textValue' => $text]);                                               // выполнели запрос

header("Location: task_91.php");                                                     // перевод назад на станицу формы