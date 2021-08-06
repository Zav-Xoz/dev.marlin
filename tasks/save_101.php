<?php
session_start();
//var_dump($_POST);

$text = $_POST['text'];                                                                    //  получили значение с глобального массива

$pdo= new PDO("mysql:host=localhost;dbname=marlin;", 'root','root');  //Соеденились с базой
//--------------------------------------------------------------------------------------------------------
$sql= "SELECT * FROM `records` WHERE message=:textValue";
$statement = $pdo->prepare($sql);
$statement->execute(['textValue' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);
if(!empty($task)){
    $message ="Данная Запись есть в Базе!";
    $_SESSION['danger'] = $message;
    header("Location: task_101.php");
    exit;
}
//--------------------------------------------------------------------------------------------------------

$sql = "INSERT INTO `records` (message) VALUES (:textValue)";                              //  написали запрос

$statement = $pdo->prepare($sql);                                                          //ПОДГОТОВКА ЗАПРОСА
$statement->execute(['textValue' => $text]);// выполнели запрос

$message ="Записанно В БД!";
$_SESSION['success'] = $message;

header("Location: task_101.php");                                                     // перевод назад на станицу формы