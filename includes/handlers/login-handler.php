<?php

// Checks to see if login button was pressed 
if(isset($_POST['loginButton'])) {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $result = $account->login($username, $password);

    if($result == true) {
        //session variable created in config.php.  creates variable userLoggedIn and it keeps this value arcoss the app
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}
?>