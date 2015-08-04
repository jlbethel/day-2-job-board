<?php
    class JobOpening
    {
        private $title;
        private $description;

        function __construct($title, $description)
        {
            $this->title = $title;
            $this->description = $description;
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

    }

?>
