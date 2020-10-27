<?php

//removing html/tags from being typed in
function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

//remove html and replace spaces 
function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
} 

//remove html, replace spaces and lowercase entire string
//with upper first letter
function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
} 




// Checks to see if register button was pressed 
if(isset($_POST['registerButton'])){
    $username = sanitizeFormUsername($_POST['usernameReg']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastname = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    

    

}


?>