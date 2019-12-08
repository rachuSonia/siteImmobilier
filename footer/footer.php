


        <div id='resauxSociaux'>
            <ul>
                <li><i class="fab fa-facebook-square"></i></li>
                <li><i class="fab fa-twitter-square"></i></li>
                <li><i class="fab fa-linkedin"></i></li>
                <li><i class="fab fa-youtube-square"></i></li>
                <li><i class="fab fa-instagram"></i></li>
            </ul>
        </div>
       <section id='bottomBar'>
           <article class='infosBar'>
               <ul>
                   <h3><i class="fas fa-tv"></i> à propos du site</h3>
                   <li><a href="index.php?id=<?php if(isset($userInfo)) {echo $userInfo['id_user'];}?>">2019 ID.ALLES</a></li>
                   <li><a href="aPropos.php?id=<?php if(isset($userInfo)) {echo $userInfo['id_user'];}?>">à propos </a></li>
                   <li>+33 9 45 60 73 35 où contact@idHalles.fr</li>
                   <li>22 Boulevard Devaus, 78300 POISSY</li>
               </ul>
            </article><!--
                
            --><article class='infosBar'>
               <ul>
                   <h3><i class="fas fa-concierge-bell"></i> Produits et services</h3>
                   <li><a href="index.php?id=<?php if(isset($userInfo)) {echo $userInfo['id_user'];}?>">Acheter / Louer</a></li>
                   <li><a href="index.php?id=<?php if(isset($userInfo)) {echo $userInfo['id_user'];}?>">Estimer mon bien</a></li>
                   <li><a href="connexion.php">Mon compte</a></li>
               </ul>
            </article>
        </section>
 