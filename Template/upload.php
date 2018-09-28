<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="TagTools is a web application that manage image and tag, it's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="CloudFind, TagTools, XML">
        <title>TagTools | Sowftware that implement ClounFind</title>
        <!-- Icon-->
        <link rel="icon" href="../media/icon/logo-32x32.png" sizes="32x32">
        <link rel="apple-touch-icon-precomposed" href="../media/icon/logo-152x152.png">
        <!-- CORE CSS-->
        <link href="../vendor/view/css/materialize.css" type="text/css" rel="stylesheet">
        <link href="../vendor/view/css/style.css" type="text/css" rel="stylesheet">
        <!-- Custom CSS-->
        <link href="../View/css/custom.css" type="text/css" rel="stylesheet">
        <!-- CSS style Horizontal Nav-->
        <link href="../vendor/view/css/style-horizontal.css" type="text/css" rel="stylesheet">
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="../vendor/view/css/prism.css" type="text/css" rel="stylesheet">
        <link href="../vendor/view/css/perfect-scrollbar.css" type="text/css" rel="stylesheet">
        <!-- GOOGLE ICON -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="main">
            <div class="container">
                <div class="row">
                    <div class="card-panel col l3 push-l4">
                        <h3>TagTools</h3>
                        <div id="upload" class="section">
                            <form action='../Service/import_csv.php' method='POST' enctype='multipart/form-data'>
                                <!-- logged in user information -->
                                <?php  if (isset($_SESSION['email'])) : ?>
                                    <p>Benvenuto <strong><?= $_SESSION['name']; ?></strong></p>
                                <?php endif ?>
                                <input type='file' name='userFile'><br><br>
                                <button type='submit' name='upload_btn' class="waves-effect waves-light btn">Upload</button>
                            </form>
                            <a href="../upload.php?logout='1'">LOGOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================
        Scripts
        ================================================ -->
        <!-- jQuery Library -->
        <script type="text/javascript" src="../vendor/view/js/jquery-3.3.1.js"></script>
        <!--materialize js-->
        <script type="text/javascript" src="../vendor/view/js/materialize.min.js"></script>
        <!--prism
        <script type="text/javascript" src="js/prism.js"></script>-->
        <!--scrollbar -->
        <script type="text/javascript" src="../vendor/view/js/perfect-scrollbar.min.js"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="../vendor/view/js/plugins.js"></script>
        <!--css-transition.js - Page specific JS
        <script type="text/javascript" src="js/css-transition.js"></script>-->
    </body>
</html>