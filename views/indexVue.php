<?php
  include 'template/header.php'; ?>
<!-- 
  =====================================
  =====================================
        Manage my production
  =====================================
  =====================================
 -->








 <h2 id="portfolio">Mes réalisations</h2>
    <div class="container-portfolio">
        <div class="portfolio">
            <?php foreach ($productions as $production){?>
            <div class="cards">
            <img src="../assets/img/<?= $production->getImage();?>" alt="Photo du projet : <?= $production->getImage();?>">
            <h3><?= $production->getTitle() ?></h3>
            <p><?= $production->getBody(); ?></p>
                <?php
                    if ($production->getLink1() != ""){
                        ?>
                        <span><a target="_blank" href="<?= $production->getLink1();?>">GitHub</a></span>
                        <?php
                    }
                    if ($production->getLink2() != ""){
                        ?>
                        <span><a target="_blank" href="<?= $production->getLink2(); ?>">Voir</a></span>
                    <?php
                    }
                ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- 
  =====================================
  =====================================
        Manage About me
  =====================================
  =====================================
 -->




    <div class="bgFooter" id="aboutMe"></div>
    <div class="aboutMe">
        <h2>A propos de moi</h2>
        <p>Antoine 22 ans autodidacte à Lille. Partisan de l'open source & amoureux de Linux. Je mélange Dev et
            Système.
            J'aime
            toucher à tout dans l'informatique. Anciennement Administrateur Système Windows & Linux. Passionné par le
            numérique
            de demain et de nouvelles technologies. Je suis actuellement étudiant à la formation Yes We Web.
            <strong>Et si demain on travaillait ensemble ?</strong>
            Un formulaire de contact en dessous, profites-en.
        </p>
        <div class="textLike">
            <p id="textLike">J'aime Sass</p>
        </div>
    </div>
    <div class="bgAboutMe"></div>







    <!-- 
  =====================================
  =====================================
        Manage contact
  =====================================
  =====================================
 -->
    <h2 id="contact">Contact</h2>
    <div class="contact">
        <form method="post" action="mail.php">
            <div class="contact">
                <label for="name">Nom :</label>
                <input class="input" type="text" name="name" id="name" placeholder="Nom prénom" required>
                <label for="email"> Email :</label>
                <input class="input" type="text" name="email" id="email" placeholder="prenom.nom@mail.com" required>
            </div>
            <div class="contact-bottom">
                <label for="message">Message :</label>
                <textarea name="message" cols="10" rows="3" placeholder="Votre message ..." required id="message"></textarea>
                <input type="submit" value="Envoyer" id="buttonSend" class="sendMessage">
            </div>
        </form>
        <a target="_blank" href="CV-AntoineLEMICHEL.pdf" class="cv">Consulter/Télécharger mon CV
            <i class="fas fa-address-card"></i>
        </a>
    </div>

 <?php
   include 'template/footer.php'; ?>
