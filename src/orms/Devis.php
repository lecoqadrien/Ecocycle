<?php
    class Devis{
        private $id;
        private $entreprise;
        private $nom;
        private $prenom;
        private $telephone;
        private $mail;

        public function setId(int $id){
            $this->id = $id;
            return $this;
        }

        public function getId() : int{
            return $this->id;
        }

        public function setEntreprise(string $entreprise){
            $this->entreprise = $entreprise;
            return $this;
        }

        public function getEntreprise() : string{
            return $this->entreprise;
        }

        public function setNom(string $nom ){
            $this->nom = $nom;
            return $this;
        }

        public function getNom() : string{
            return $this->nom;
        }

        public function setPrenom(string $prenom){
            $this->prenom = $prenom;
            return $this;
        }

        public function getPrenom() : string{
            return $this->prenom;
        }

        public function setTelephone(int $telephone){
            $this->telephone = $telephone;
            return $this;
        }

        public function getTelephone() :int{
            return $this->telephone;
        }

        public function setMail(string $mail) {
            $this->mail = $mail;
            return $this;
        }
    }
?>