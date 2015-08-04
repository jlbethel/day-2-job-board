<?php
    class JobOpening
    {
        private $title;
        private $description;
        private $contact;

        function __construct($title, $description, $contact)
        {
            $this->title = $title;
            $this->description = $description;
            $this->contact = $contact;
        }

        function getTitle()
        {
            return $this->title;
        }
        function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        function getDescription()
        {
            return $this->description;
        }
        function setDescription($description)
        {
            $this->description = $description;
        }

        function getContact()
        {
            return $this->contact;
        }
        function setContact($contact)
        {
            $this->contact = $contact;
        }


        class Contact
        {
            private $name;
            private $phone_number;
            private $email;
        }

        function __construct($name, $phone_number, $email)
        {
          $this->name = $name;
          $this->phone_number = $phone_number;
          $this->email = $email;
        }

        function getName()
        {
          return $this->name;
        }

        function setName($name)
        {
          $this->name = $name;
        }

        function getPhoneNumber()
        {
          return $this->phone_number;
        }

        function setPhoneNumber($phone_number)
        {
          $this->phone_number = $phone_number;
        }

        function getEmail()
        {
          return $this->email;
        }

        function setEmail($email)
        {
          $this->email = $email;
        }
    }

?>
