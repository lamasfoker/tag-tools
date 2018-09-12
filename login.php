<?php
include('server.php');

if (isset($_SESSION['email'])) {
    header('location: upload.php');
}
?>
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
    <link rel="icon" href="icon/logo-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="icon/logo-152x152.png">
    <!-- CORE CSS-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="css/custom.css" type="text/css" rel="stylesheet">
    <!-- CSS style Horizontal Nav-->
    <link href="css/style-horizontal.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="css/prism.css" type="text/css" rel="stylesheet">
    <link href="css/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <!-- GOOGLE ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- login google -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1056844128019-1ut7v3eude57a6u2barhcu6iuhc5ra88.apps.googleusercontent.com">
  </head>
<body>
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="card-panel col l3 push-l4">
                    <h3>TagTools</h3>
					<div id="login" class="section">
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <script>
              function onSignIn(googleUser) {
                // Useful data for your client-side scripts:
                var profile = googleUser.getBasicProfile();
                document.getElementById('name').value = profile.getName();
                document.getElementById('email').value = profile.getEmail();
                console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                console.log("Name: " + profile.getName());
                console.log("Image URL: " + profile.getImageUrl());
                console.log("Email: " + profile.getEmail());

                // The ID token you need to pass to your backend:
                var id_token = googleUser.getAuthResponse().id_token;
                console.log("ID Token: " + id_token);
                document.getElementById('login-form').submit();
              };
            </script>
            <a href="#" onclick="signOut();">Sign out</a>
            <script>
              function signOut() {
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function () {
                  console.log('User signed out.');
                });
              }
            </script>
            <div id="form-wrapper">
              <form action="/server.php" id="login-form" method="post">
                <input type="hidden" name="name" value="" id="name">
                <input type="hidden" name="email" value="" id="email">
                <input type="submit">
              </form>
            </div>
          </div>
				</div>
			</div>
    </div>
	</div>
	<!-- ================================================
	Scripts
	================================================ -->
	<!-- jQuery Library -->
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<!--materialize js-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<!--prism
	<script type="text/javascript" src="js/prism.js"></script>-->
	<!--scrollbar -->
	<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
	<!--plugins.js - Some Specific JS codes for Plugin Settings-->
	<script type="text/javascript" src="js/plugins.js"></script>
	<!--css-transition.js - Page specific JS
	<script type="text/javascript" src="js/css-transition.js"></script>-->
  <!-- login google -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>
