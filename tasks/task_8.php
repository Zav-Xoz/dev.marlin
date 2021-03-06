<?php
require_once 'config.php';

$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM client";
$result = mysqli_query($conn, $sql);

$client = [];

if (mysqli_num_rows($result) > 0) {  //ВЫВОД ЗАПРОСА если строк больше 0
    while ($row = mysqli_fetch_assoc($result)) {
        $client[] = $row;
    }
}
//---------------------------------------------------------                  //     PDO      code from  Рахим
//$pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "root");     //     Подключение к Базе
//$sql = ("SELECT * FROM client");                                              //     Запрос формируем
//$statement =$pdo->prepare($sql);                                           //     Выполнение Запроса
//$statement->execute();                                                     //     Запуск
//$client = $statement->fetchAll(PDO::FETCH_ASSOC);                           //     Возврат массив, содержащий все строки результирующего набора
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  foreach($client as $key => $value ):?>
                                        <tr>
                                            <th scope="row"><?php echo $value['id'] ?></th>
                                            <td><?php echo $value['first_name'] ?></td>
                                            <td><?php echo $value['last_name'] ?></td>
                                            <td><?php echo $value['username'] ?></td>
                                            <td>
                                                <a href="show.php?id=<?php echo $value['id'] ?>" class="btn btn-info">Просмотреть</a>
                                                <a href="edit.php?id=<?php echo $value['id'] ?>" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <?php   endforeach ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
