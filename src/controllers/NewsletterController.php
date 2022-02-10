<?php

    class NewsletterController{
        public function save(){
            if(isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['email']) && !empty($_POST['email']) ){
                $nc = new NewsletterManager();

                $nc->setPrenom($_POST['prenom']);
                $nc->setEmail($_POST['email']);

                if($nc->save()->rowCount() == 1){
                    echo "<p>Newsletter Sauvegardée</p>";
                    header('Location:/ecocycle39/src/pages/confirmation_newsletter.php');
                    
                }else{
                    echo "<p>Votre newsletter n a pas été sauvegardée</p>";
                }
            }else{
                echo "Vos informations n'ont pas été inscrit";
            }
        }
    }
    