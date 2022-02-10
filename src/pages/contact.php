<?php
include_once '../../header_pages.php';
?>

<section id="steps">
<h4>LES 3 ETAPES POUR COMMENCER L AVENTURE ECOCYCLE</h4><br>
        <div>
            <article>
                <img src="../../img/contact_picto.png" alt="contact_picto">
                <p>Nous discutons de vos projets et nous voyons ce qu’il est possible de faire ensemble</p>
                <h6>1</h6>
            </article>
            <article>
                <img src="../../img/contact_picto2.png" alt="contact_picto">
                <p>Nous vous accompagnons dans l’installation et la mise en place du service</p>
                <h6>2</h6>
            </article>
            <article>
                <img src="../../img/contact_picto3.png" alt="contact_picto">
                <p>Il est temps de se lancer dans l’aventure ! Tout est prêt !</p>
                <h6>3</h6>
            </article>
            
        </div>
</section>

<section id="informations">
<h4>Juste quelques petites informations</h4><br>
    <article>
        <form action="/ecocycle39/index.php?e=ecocycle_devis_insert">
            <h6>Ca vous prendra que quelques minutes</h6><br><br>
            <label for="entreprise">Quel est le nom de votre société?</label>
            <input type="text" placeholder="Nous c 'est Ecocycle pour les intimes" name="entreprise">
            <label for="nom_prenom">Un nom et prénom à nous communiquer</label>
            <input type="text" placeholder="Nous sommes Cycle, Eco - Cycle !" name="nomprénom">
            <label for="contact">On reste en contact ?</label>
            <input type="tel" placeholder="Nous, c’est le 0134567898" name="contact">
            <label for="mail">Et par mail ?</label>
            <input type="text" placeholder="Voici le notre : contact@ecocycle.com" name="mail">
            <button>Envoyer</button>
        </form>
    </article>
</section>

<?php
include_once '../../inc.footer_contact.php';
?>
