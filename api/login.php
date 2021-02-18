<!DOCTYPE php>
<html>
<head>
    <title>Sign in | GI Fanbase</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="userauthen">
  <div class="topnav">
    <div class="logo">
      <img src="../img/mainlogo2.png" height="64" alt=''>
    </div>
    <h2>Fanbase by <span style="color: #007BEF;">XLK</span></h2>
  </div>
  <main>
  <div id="content">
	<section class="auth-content">
		<h4>Sign in with a Social Account</h4>
			<a class="button signup-provider-google" href="#"
       data-crumb="SOmrNbjiQVY_bHRzL9tOtNawcwK5y4EObY7BSDKMoa4"
       data-google-uri="/signin?method=google">
				<img src="auth-assets/common/symbols/google-icon.svg" class="google-icon">
				<span>Sign in with Google</span>
			</a>
	</section>
	<section class="auth-content">
		<h4>Sign In with Username</h4>
			<form id="loginForm" action="/signin" method="POST">
			<div class="input-container">
				<input type="text" name="username" id="loginUsername" required="">
        <label class="floating-label" for="loginUsername">Username</label>
			</div>
			<div class="input-container">
				<input class="sign-in-password" type="password" name="password"
        id="loginPassword" autocomplete="off" required="">

        <label class="floating-label" for="loginPassword">Password</label>
				<a class="forgotten-password" href="">Forgot password?</a>
			</div>
			<button class="form-submit" disabled="" id="loginSubmit" type="submit">SIGN IN
			</button>
		</form>
	</section>
  </div>
  </main>

  <div class="footer">
    <p>Footer</p>
  </div>
</body>
</html>
