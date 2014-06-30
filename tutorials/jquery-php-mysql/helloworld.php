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

<html>
	<body>
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
	</body>
</html>