<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  <link rel="stylesheet" href="templates/css/login.css">
  <script src="scripts/lib/jquery.js"></script>
  <script src="scripts/index.js"></script>
</head>
<body>
  <div class="wrap">
		<div class="avatar">
      <img src="templates/images/loginimg.png">
		</div>
		<input type="text" placeholder="username" id="user_login" name="user_login" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" id="user_pass" name="user_pass" placeholder="password" required>
		<br>
		<button type="button" id="btnlogin" name="btnlogin">Sign in</button>
	</div>
</body>
</html>