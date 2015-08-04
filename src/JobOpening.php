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

    }

?>
