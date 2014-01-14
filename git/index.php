<html>
<head>
	<title>VoteWeb - 投票網</title>
	<script src="./your_secret.js"></script>
    <script src="../your_secret.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<link href="first.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<center><h1><a class="a">歡迎來到「VoteWeb - 投票網」，請記得用Facebook帳號登入唷！</a></h1><br>
	<img src="voteweb.jpg"><br>
	<div id="fb-root"></div>
    <br>
    <div id="my-html-playground" class="container">
        <div id="my-login-control" class="well">
            <center><a href="main.php"><button id="my-login-button" class="btn btn-primary"><img src="./active_404.png"></button></a><p id="my-login-message"></p>
        </div>
    </div>
	<!--登入API-->
   <script>
   window.fbAsyncInit = function() {
       // init the FB JS SDK
       FB.init({
       appId      : FacebookAppId,                        // App ID from the app dashboard
       cookie     : true,                                 // Allowed server-side to fetch fb auth cookie
       status     : true,                                 // Check Facebook Login status
       xfbml      : true                                  // Look for social plugins on the page
       });

       // Additional initialization code such as adding Event Listeners goes here
       window.fbLoaded();
   };

   // Load the SDK asynchronously
   (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       //js.src = "//connect.facebook.net/en_US/all.js";
       // Debug version of Facebook JS SDK
       js.src = "//connect.facebook.net/en_US/all/debug.js";
       fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   </script>
   <script id="my-script-playground">
       window.fbLoaded = function(){
           FB.Event.subscribe('auth.login', function(response) {
               var msg = "You're logged in.";
               $("#my-login-message").html(msg);
               console.log("Your login response:");
               console.log(response);
           });

           $("#my-login-button").click(function(){
               FB.login();
           });
       };
   </script>
</body>
</html>