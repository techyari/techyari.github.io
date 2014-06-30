<?php
/* 
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
#Looks for current google account session
$user = UserService::getCurrentUser();
if($user){
	echo 'Hello '. htmlspecialchars($user->getNickName());
}else{
	header('Location: '. UserService::createLoginURL($_SERVER['REQUEST_URI']));
}
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechYari - HTML5, CSS3, JavaScript Demo & Tutorials</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<header class="navbar">
  	 <div class="container">
  	 	<div class="navbar-header">
      		<a href="../">TechYari</a>
    	</div>
  	 </div>	
  		
  	</header>
  	<div class="content">
	  	<div class="container">
	  	<?php 
			if (array_key_exists('content',$_POST)) {
				echo "You wrote:<pre>\n";
				echo htmlspecialchars($_POST['content']);
				echo "\n</pre>";
			}
		?>
		<form action="/sign" method="post">
			<div><textarea name="content" rows="3" cols="60"></textarea></div>
			<div><input type="submit" value="Sign Guestbook"></div>
		</form>
	  	</div>
  	</div>
  
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
	<footer>
        &copy 2014 Techyari.in | All rights reserved
    </footer>

  </body>
</html>
