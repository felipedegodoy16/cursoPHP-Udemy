<?php

    class Contact {
        public $name, $email, $phone;

        function __construct($name, $email, $phone) {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }
        
        function getName() {
            return $this->name;
        }
        
        function getEmail() {
            return $this->email;
        }
        
        function getPhone() {
            return $this->phone;
        }
        
        function setEmail($email) {
            $this->email = $email;
        }
        
        function setPhone($phone) {
            $this->phone = $phone;
        }
    }
    
    $pessoa = new Contact("João", "email@gmail.com", 19999999999);
    
    // $pessoa->name = "João";
    // $pessoa->setEmail("email@gmail.com");
    // $pessoa->setPhone(19999999999);
    
    echo $pessoa->getName() . "<br>";
    echo $pessoa->getEmail() . "<br>";
    echo $pessoa->getPhone() . "<br>";