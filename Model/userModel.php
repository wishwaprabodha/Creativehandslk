<?php

class user{
    
     private $userId;
     private $userName;
     private $userGender;
     private $userAddress;
     private $userEmail;
     private $userContact;
     private $userLogin;
     private $userPassword;
     
     
     function __construct($userId, $userName,$userGender, $userAddress, $userEmail, $userContact, $userLogin, $userPassword) {
         $this->userId = $userId;
         $this->userName = $userName;
         $this->userGender=$userGender;
         $this->userAddress = $userAddress;
         $this->userEmail = $userEmail;
         $this->userContact = $userContact;
         $this->userLogin = $userLogin;
         $this->userPassword = $userPassword;
     }
     
     function getUserId() {
         return $this->userId;
     }

     function getUserName() {
         return $this->userName;
     }
     
      function getUserGender() {
         return $this->userGender;
     }

     function getUserAddress() {
         return $this->userAddress;
     }

     function getUserEmail() {
         return $this->userEmail;
     }

     function getUserContact() {
         return $this->userContact;
     }

     function getUserLogin() {
         return $this->userLogin;
     }

     function getUserPassword() {
         return $this->userPassword;
     }

     function setUserName($userName) {
         $this->userName = $userName;
     }

      function setUserGender($userGender) {
         $this->userGender = $userGender;
     }
     
     function setUserAddress($userAddress) {
         $this->userAddress = $userAddress;
     }

     function setUserEmail($userEmail) {
         $this->userEmail = $userEmail;
     }

     function setUserContact($userContact) {
         $this->userContact = $userContact;
     }

     function setUserLogin($userLogin) {
         $this->userLogin = $userLogin;
     }

     function setUserPassword($userPassword) {
         $this->userPassword = $userPassword;
     }


       
}

?>