<?php
$arrOut = array(
    array('first class' => "mt-2", 'title' => "My Tasks", 'second class' => "mb-3", 'count' => "130 / 500", 'class' => "bg-fusion-400", 'width' => 65, 'min' => 0, 'max' => 100),
    array('first class' => "", 'title' => "Transfered", 'second class' => "mb-3", 'count' => "440 TB", 'class' => "bg-success-500", 'width' => 34, 'min' => 0, 'max' => 100),
    array('first class' => "", 'title' => "Bugs Squashed", 'second class' => "mb-3", 'count' => "77%", 'class' => "bg-info-400", 'width' => 77, 'min' => 0, 'max' => 100),
    array('first class' => "", 'title' => "User Testing", 'second class' => "mb-g", 'count' => "7 days", 'class' => "bg-primary-300", 'width' => 84, 'min' => 0, 'max' => 100),
);
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
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">

                <div class="panel-content">
                    <?php foreach ($arrOut as $key => $value): ?>
                        <div class="d-flex <?php echo $value['first class'] ?>">
                            <?php echo $value['title'] ?>
                            <span class="d-inline-block ml-auto"><?php echo $value['count'] ?></span>
                        </div>
                        <div class="progress progress-sm <?php echo $value['second class'] ?>">
                            <div class="progress-bar <?php echo $value['class'] ?>" role="progressbar"
                                 style="width: <?php echo $value['width'] ?>%;"
                                 aria-valuenow="<?php echo $value['width'] ?>"
                                 aria-valuemin="<?php echo $value['min'] ?>"
                                 aria-valuemax="<?php echo $value['max'] ?>"></div>
                        </div>
                    <?php endforeach ?>
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
