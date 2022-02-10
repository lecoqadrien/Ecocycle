<?php
    class NewsletterManager extends Newsletter{
        public function save(){
            //Connexion a la bdd
            $bdd = new BDD();
            $connexion = $bdd->getCo();
            $sql = "INSERT INTO newsletter(prenom,email) VALUES (:p,:e);";
            $req = $connexion->prepare($sql);
            $req->execute([
                'p' => $this->getPrenom(),
                'e' => $this->getEmail()
            ]);
            return $req;
        }
    }