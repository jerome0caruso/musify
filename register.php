<?php
    include("includes/handlers/Account.php");
    $account = new Account();
    $account->register();
    include("includes/handlers/register-handlers.php");
    include("includes/handlers/login-handlers.php");
?>


<html>
<head>
<title>Welcome to Musify</tile>
</head>

<body>
    <div id="input__container">
        <form id="login__form" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">
                <input id="login__username" name="loginUsername" type="text" placeholder="e.g. John Doe" required>
                </label>
            </p>
            <p>
                <label for="loginPassword">
                <input id="login__password" name="loginPassword" type="password"  required>
                </label>
            </p>
            <button type="submit" name="loginButton">LOG IN</button>
        </form>

        <form id="register__form" action="register.php" method="POST">
            <h2>Create your account</h2>
            <p>
                <label for="usernameReg">Username</label>
                <input id="register__username" name="usernameReg" type="text" placeholder="e.g. John Doe" required>
            </p>
            <p>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. John Doe" required>
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. John Doe" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. John Doe" required>
            </p>
            <p>
                <label for="email2">Confirm Email</label>
                <input id="email2" name="email2" type="email" placeholder="e.g. John Doe" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="login__password" name="password" type="password" placeholder="e.g. John@Doe.com" required>
            </p>
            <p>
                <label for="password2">Confirm Password</label>
                <input id="password2" name="password2" type="password" placeholder="e.g. John@Doe.com" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>




</body>
</html>