<?php

include_once 'inc.header.php';

//Class
require_once 'src/class/BDD.php';

//Orms
require_once 'src/orms/Newsletter.php';
require_once 'src/orms/Devis.php';

//Models

require_once 'src/models/newsletterManager.php';
require_once 'src/models/devisManager.php';

//Controllers

require_once 'src/controllers/NewsletterController.php';
require_once 'src/controllers/DevisController.php';

if(isset($_GET['e'])){
    switch ($_GET['e']) {
        case 'ecocycle_newsletter_insert':
            $nc = new NewsletterController();
            $nc->save();
            break;
        
        case 'ecocycle_devis_insert':
            $dc = new DevisController();
            $dc->save();
        
        default:
            echo "<p>Erreur 404</p>";
            break;
    }
}else{
    "<p>Erreur 4043</p>";
}



?>

    <section id="homepage"> 
        <article>
            <h2>LA BORNE DE TRI</h2>
            <h3>Au service de l'environnement</h3><br>
            <p>Sensibilisez et engagez vos collaborateurs de manière divertissante</p><br>
            <a href="src/pages/contact.php"><button id="go">Je me lance !</button></a>
        </article>
        <article>
            <img src="img/machine_cote_droit2.png">
        </article>
    </section>

    <section id="missions" >
        <h4>Nos missions</h4>
        <img src="img/trait_missions.png" alt="" id="trait_missions"><br>
            <section id="mission">
                <article data-aos="fade-up">
                    <h5>Sensibiliser</h5><br>
                    <p>La santé de notre planète est l'affaire de tous. Notre 
                        mission est donc de sensibiliser aux Eco-gestes.
                    </p>
                </article>
                <article data-aos="fade-up" data-aos-delay="200">
                    <h5>Mobiliser</h5><br>
                    <p>La santé de notre planète est l'affaire de tous. Notre 
                        mission est donc de sensibiliser aux Eco-gestes.
                    </p>
                </article>
                <article  data-aos="fade-up" data-aos-delay="400">
                    <h5>Moderniser</h5> <br>
                    <p>
                    Nous pouvons agir de manière ludique et fun même quand on parle de tri.
                    </p>
                </article>
            </section>
    </section>

    <section id="fonctionnement">
        <article class="f1">
            <section id="choice_text" >
                <h4>Comment ca marche</h4><br>
                <img src="img/trait_fonctionnement.png" alt="" id="trait_fonctionnement">
                <div>
                    <h1>1</h1>
                    <img src="img/trace_v1.png" alt="">
                    <aside>
                        <p id="text1">Choisissez votre borne !</p><br>
                        <p id="text2">De 60 cm à 2 m de largeur, choisissez la machine qui convient le mieux à votre infrastructure. Sans oublier que vous avez la possibilité de la placer à l’intérieur comme à l’extérieur.</p>
                    </aside>     
                </div>
            </section>
            <section id="choice_picture">
                <img src="img/accueil_picto_borne.png" alt="">
            </section>
        </article>
        <article id="f2">
            <section id="choice_picture" d>
                <img src="img/accueil_picto_app.png" alt="">
            </section>
            <section id="choice_text"  data-aos-delay="200">
                <div>
                    <h1>2</h1>
                    <img src="img/trace_v1.png" alt="">
                    <aside>
                        <p id="text1">Rendez-vous sur l’application</p><br>
                        <p id="text2">Un fois votre machine installé tout ce passe sur notre application.
                                Vos collaborateurs n’ont plus qu’à télécharger l’application EcoCycle, disponible sur IOS et Android afin de s’inscrire et se prendre au jeu. </p>
                    </aside>
                </div>
            </section>
        </article>
        <article class="f3">
            <section id="choice_text" >
                <div>
                    <h1>3</h1>
                    <img src="img/trace_v1.png" alt="">
                    <aside>
                        <p id="text1">Un monde plus Eco pour tous !</p><br>
                        <p id="text2">Prendre soin de son environnement doit être avant tout une mission pour tout le monde. Chez Ecocycle, on tient è récompenser l’effort de chacun. C’est pourquoi vos collaborateurs bénéficieront de nombreux cadeaux et avantages pour leur participation à l’aventure.</p>
                    </aside>
                </div>
            </section>
            <section id="choice_picture"  data-aos-delay="200">
                <img src="img/accueil_world_picto.png" alt="">
            </section>
        </article>
    </section>

    <section id="whyapp">
       <h4><br>Pourquoi une application</h4>
       <img src="img/trait_whyapp.png" alt="" id="traitwhyapp">
       <section id="apps">
            <section id="app">
                <article>
                    <img src="img/accueil_picto_profil.png" alt="">
                    <div>
                        <span>Chacun son compte </span>
                        <p>Chaque collaborateur crée son compte personnel.</p>
                    </div>
                    
                </article>
                <article>
                    <img src="img/accueil_picto_identification.png" alt="">
                    <div>
                        <span>Je m'identifie </span>
                        <p>A l’aide d’un QR CODE, <br>chacun des employés a la possibilité de s’identifier à la borne avant de jeter des déchets.</p>
                    </div>
                </article>
            </section>

            <section id="app2">
                <video controls width="300" autoplay loop controls muted>
                    <source src="video/video_phone.mp4"
                                type="video/mp4">
                    </video>
            </section>

            <section id="app3">
                <article >
                    <img src="img/accueil_gift_picto.png" alt="">
                    <div>
                        <span>Recycler … pour faire quoi ?  </span>
                        <p>Dans le but de toujours sensibiliser, votre collaborateur pourra voir son taux de participation et mieux se rendre compte des bien-faits du tri.</p>
                    </div>
                    
                </article>
                <article >
                    <img src="img/accueil_stat_picto.png" alt="">
                    <div>
                        <span>Chacun son compte </span>
                        <p>A l’aide d’un QR CODE, <br>chacun des employés a la possibilité de s’identifier à la borne avant de jeter des déchets.</p>
                    </div>
                </article>
            </section>
       </section>
       
            
    </section>
    </section>

    <main id="challenge">
        <h4>Vous relevez le challenge?</h4><br>
        <img src="img/trait_challenge.png" alt="" id="trait_challenge"><br>
        <section id="challenge1">
            <article>
                <img src="img/accueil_ecochallengesal.png" alt="eco challenge">
               
            </article>
            <article>
                <p>L’application Ecocycle sera l’élément moteur qui donnera envie 
                à vos salarié de jouer le jeu. Nous mettons la gamification au service 
                de l’environnement afin de sensibiliser tout en divertissant.  
            </article>
        </section>
           
        <section id="challenge2">
            <article>
                <p>Votre structure possède plusieurs services ?
                Pourquoi ne pas les mettre au défis de manière ludique et amusante avec des mini challenges. 
                L’équipe victorieuse pourra gagner des avantages !</p>
            </article>
            <article>
                <img src="img/logo_ecochallenge_equipe.png" alt="">
            </article>
        </section>
    </main>

    <section id="video">
        <h4>On vous explique tout cela</h4><br>
        <img src="img/trait_video.png" alt="" id="trait_video"><br><br>
        <video   width="200" autoplay loop controls muted  >
            <source src="video/video_explication.mp4" type="video/mp4">
            <source src="video/video_explication.ogg" type="video/ogg">
        </video>
    </section>

    <section id="partenaires">
        <h4>Ils font partie de l'aventure</h4><br>
        <img src="img/trait_partenaire.png" alt="" id="trait_partenaire">
        <article>
            <img src="img/logo_edf.png" alt="" class="pic">
            <img src="img/logo_ican.png" alt="" class="pic">
            <img src="img/logo_lvmh.png" alt="" class="pic">
        </article>
    </section>
    

    

    

    


    
<?php

include_once 'inc.footer.php';

?>

    