<?php

class UserController {
     public function actionRegister(){
         $name     = '';
         $email    = '';
         $password = '';

         if(isset($_POST['submit'])){
             $name     = $_POST['name'];
             $email    = $_POST['email'];
             $password = $_POST['password'];
             $result   = false;

             $errors = false;

             if(!User::checkName($name)){
                 $errors[] = ' - Wrong name, perhaps too short, enter name more than 2 symbols.';
             }

             if(!User::checkEmail($email)){
                 $errors[] = ' - Wrong email, perhaps enter correct email.';
             }

             if(!User::checkPassword($password)){
                 $errors[] = ' - Wrong Password perhaps too short, enter password more than 6 symbols.';
             }

             if(User::checkEmailExists($email)){
                 $errors[] = ' - Email is isset';
             }

             if($errors == false){
                 $result = User::register($name, $email, $password);
             }

         }


         require_once(ROOT . '/views/user/register.php');

         return true;
     }
} 