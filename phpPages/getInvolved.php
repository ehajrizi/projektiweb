<?php
include '../phpFiles/header.php';
?>


	<div class ="login-body">
		<div class ="getInvolved-main-content">
			<h2 class="getInvolved-h2">Get Involved and Share Your Experiences!</h2>
			<div class="getInvolved-container" id="gIcontainer">
				<div class="form-container sign-up-container">
					<form name="myform" class="gI-form" action="../phpFiles/dataVerify.php" method="post" onsubmit="return validate()">
						<h1 class="getInvolved-h1">Create Account</h1>
						<script src="https://kit.fontawesome.com/a076d05399.js"></script>
						<div class="social-container">
							<a href="https://www.facebook.com/" class="social" class="gI-a" ><i class="fab fa-facebook-f"></i></a>
							<a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social" class="gI-a"><i class="fab fa-google-plus-g"></i></a>
						</div>
						<span class="getInvolved-span">or use your email for registration</span>
						<input type="text" placeholder="Name" id="name" name="reg-name" class="gI-input"/>
						<input type="text" placeholder="Username" id="username" name="reg-username"  class="gI-input"/>
						<input type="email" placeholder="Email" id="email"  name="reg-email" class="gI-input"/>
						<input type="password" placeholder="Password" id="password" name="reg-password"  class="gI-input"/>
						<button id="RegBtn" name="regbtn" class="gI-button">Register</button>
					</form>
				</div>
				<div class="form-container sign-in-container">
					<form name="myform" class="gI-form" action="../phpFiles/dataVerify.php" method="post" onsubmit="return validate()">
						<h1 class="getInvolved-h1">Log in</h1>
						<div class="social-container">
							<a href="https://www.facebook.com/" class="social" class="gI-a"><i class="fab fa-facebook-f"></i></a>
							<a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social" class="gI-a"><i class="fab fa-google-plus-g"></i></a>
						</div>
						<span class="getInvolved-span">or use your account</span>
						<input type="text" name="username" placeholder="Username" id="username1" class="gI-input"/>
						<input type="password" name="password" placeholder="Password" id="password1" class="gI-input"/>
						<a class="gI-a" href="#">Forgot your password?</a>
						<button id="LogInBtn" name="loginbtn" class="gI-button">Log In</button>
					</form>
				</div>
				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-left">
							<h1 class="getInvolved-h1">Already a part of the community?</h1>
							<p class="getInvolved-p">Please log in to see what's new</p>
							<button class="ghost" id="signIn">Log In</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h1 class="getInvolved-h1">Join us!</h1>
							<p class="getInvolved-p">Want to share your experiences and excitement about Kosovo's culture and landscape?</p>
							<button class="ghost" id="signUp">Register</button>
						</div>
					</div>
				</div>
			</div>
		<script src="../jsFiles/main.js"></script>	
	</div>
		
<?php
include '../phpFiles/footer.php';
?>