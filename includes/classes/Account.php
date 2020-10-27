<?php
    class Account {

        public function __construct() {
        
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstname($fm);
            $this->validateLastName($lastName);
            $this->validateEmails($email, $email2);
            $this->validatePasswords($password, $password2);

        }

           private function validateUsername($un) {

            }
           private function validateFirstname($fn) {
                
            }
            
           private function validateLastName($ln) {
                
            }
           private function validateEmails($em, $em2) {
                
            }
           private function validatePasswords($pw, $pw2) {
                
            }
        }

?>