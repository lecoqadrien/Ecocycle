<?php

    class Newsletter{
        private $id;
        private $prenom;
        private $email;

        public function setId(int $id) : self{
            $this->id = $id;
            return $this;
        }

        public function getId() : int{
            return $this->id;
        }

        public function setPrenom(string $prenom) : self{
            $this->prenom = $prenom;
            return $this;
        }

        public function getPrenom() : string{
            return $this->prenom;
        }

        public function setEmail(string $email) : self{
            $this->email = $email;
            return $this;
        }

        public function getEmail() : string {
            return $this->email;
        }
    }
?>