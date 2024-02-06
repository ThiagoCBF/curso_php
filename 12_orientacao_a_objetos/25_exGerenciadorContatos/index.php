<?php

    class Contact {
        public $name;
        public $email;
        public $phone;

        function getName() {
            return $this->name = "Thiago";
        }

        function getEmail() {
            if($this->email == null) {
                return "exemplo@aaa.com";
            } else {
                return $this->email;
            }
        }

        function getPhone() {
            if ($this->phone == null){
                return '123456789';
            }else {
                return $this->phone;
            }
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setPhone($phone) {
            $this->email = $phone;
        }
    }

    $pessoa = new Contact;
    $pessoa->name = 'João';
    $pessoa->email =  'joao@example.com';
    $pessoa->phone = '123456789';
    $pessoa->getName();
