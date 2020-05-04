<html lang="en">
<title>Welcome to Slotify!</title>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. djaldave" required>
            </p>
            <p>
                <label for="fname">First Name</label>
                <input id="fname" name="fname" type="text" placeholder="e.g. Al Dave" required>
            </p>
            <p>
                <label for="lname">Username</label>
                <input id="lname" name="lname" type="text" placeholder="e.g. Alba" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. djaldave@gmail.com" required>
            </p>
            <p>
                <label for="email1">Confirm Email</label>
                <input id="email1" name="email1" type="email" placeholder="e.g. djaldave@gmail.com" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required placeholder="Your Password">
            </p>
            <p>
                <label for="password1">Confirm Password</label>
                <input id="password1" name="password1" type="password" required placeholder="Your Password">
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>

        </form>
	</div>

</body>
</html>