<?php
session_start();
require_once 'config.php';
require_once 'function.php';
$conn = connect();
$existRecord = $_SESSION['existRecord'] ?? false;
$_SESSION['existRecord'] = false;

$styleNone = $existRecord? 'display: block;' : 'display: none;' ;


if (isset($_POST['message']) && $_POST['message'] != '' && isset($_POST['button'])) {

    $sql = "SELECT * FROM records";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            if($row['message'] === $_POST['message']) {
                $existRecord = true;
                break;
            }
        }
    }
 if(!$existRecord) {
     $message = strip_tags(trim($_POST['message']));
     $result = execQuery("INSERT INTO `records`(message) VALUES ('$message')");
 }

    $_SESSION['existRecord'] = $existRecord;

    header("Location:  ./task_10.php", true, 303);
    exit;
}

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
                            <div class="panel-content">
                                <div class="form-group">
                                    <div class="alert alert-danger fade show" style="<?php echo $styleNone ?>" role="alert">
                                        You should check in on some of those fields below.
                                    </div>
                                    <form action="" method="POST">
                                        <label class="form-label" for="simpleinput">Text</label>
                                        <input type="text" name="message" id="simpleinput" class="form-control">
                                        <button   name="button" class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
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
