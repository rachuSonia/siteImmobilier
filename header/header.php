<nav>
        <ul>
                
            <?php if(isset($userInfo) && $userInfo['admin']==1) : ?>
            
                <li><a href='index.php?id=<?=intval($userInfo['id_user']); ?>'><img src='image/images.jpg' class='logo'></a></li>
                <li><a href="index.php?id=<?= intval($userInfo['id_user']); ?>">accueil</a></li>
                <li><a href="aPropos.php?id=<?= intval($userInfo['id_user']); ?>">à propos </a></li>
               
                    <li><a href='infoUserAdmin.php?id=<?= intval($userInfo['id_user']); ?>'>Administration</a>
                        <div class='menu'>           
                                    <div class='sousMenu'>
                                        <ul>
                                                
                                                <li><a href="addClassifiedLocation.php?id=<?= intval($userInfo['id_user']); ?>">ajouter une annonce de location</a></li>
                                                <li><a href="addClassifiedBuy.php?id=<?= intval($userInfo['id_user']); ?>">ajouter une annonce de vente</a></li>
                                                <li><a href="adminBlog.php?id=<?= intval($userInfo['id_user']); ?>">blog</a></li>
                                        
                                        </ul> 
                                    </div>   
                        </div>
                    </li>
                         <?php if(isset($userInfo)) : ?>
                         <li>
                            <a href='user.php?id=<?= intval($userInfo['id_user']); ?>'><span>Bonjour <?= htmlspecialchars($userInfo['pseudo']); ?></span>
                                <?php if(!empty($userInfo['avatar'])) :?>
                                <img src="image/utilisateur/<?= $userInfo['avatar'] ;?>" class='pictur'>
                                <?php else : ?> 
                                    <img src="image/utilisateur/default.jpg" whidth="100px">   
                                    <?php endif; ?>
                                    <?php endif; ?>
                            </a>
                                <div class='menu'>
                                    <div class='sousMenu'>
                                        <ul>
                                            
                                                <li><a href="detailsProfilUser.php?id=<?= intval($userInfo['id_user']); ?>">mon profil</a></li>
                                                <li><a href="classified.php?id=<?= intval($userInfo['id_user']);?>">annonce</a></li>
                                                <li><a href="loginOut.php">se déconnecter</a></li>
                                        
                                        </ul>
                                    </div>
                                  </div>
                        </li>

                 <?php elseif(isset($userInfo['id_user']) && $userInfo['admin']==null) : ?>

                        <li><a href='index.php' class='logo'><img src='image/images.jpg'></a></li>
                        <li><a href="index.php?id=<?= intval($userInfo['id_user']); ?>">accueil</a></li>
                        <li><a href="aPropos.php">à propos </a></li>
                             
                      
                                    <?php if(isset($userInfo)) : ?>
                                <li>
                                    <a href='user.php?id=<?= intval($userInfo['id_user']); ?>'><span>Bonjour <?= htmlspecialchars($userInfo['pseudo']); ?></span>
                                        <?php if(!empty($userInfo['avatar'])) :?>
                                        <img src="image/utilisateur/<?= $userInfo['avatar'] ;?>" class='pictur'>
                                        <?php else : ?> 
                                            <img src="image/utilisateur/default.jpg" whidth="100px">   
                                            <?php endif; ?>
                                            <?php endif; ?>
                                    </a>
                                        <div class='menu'>           
                                            <div class='sousMenu'>
                                            <ul>
                                                <li> <a href="detailsProfilUser.php?id=<?= intval($userInfo['id_user']); ?>">mon profil</a></li>
                                                <li><a href="index.php?id=<?= intval($userInfo['id_user']); ?>">annonce</a></li>
                                               
                                                <li><a href="blog.php?id=<?= intval($userInfo['id_user']); ?>">blog</a></li>
                                                <li><a href="loginOut.php">se déconnecter</a></li>
                                            </ul>
                                            </div>
                                        </div>
                                </li>
                        
                        
                 <?php else :?>
                     
                                <li><a href='index.php' class='logo'><img src='image/images.jpg'></a></li>
                                <li><a href="index.php">accueil</a></li>
                                <li><a href="aPropos.php">à propos </a></li>
                                <li><a href="connexion.php">blog </a></li>
                                <li><a href="register.php">crée un compte</a></li>
                                 <li><a href="connexion.php">se connecter</a></li>
                      
                <?php endif; ?>
                   
        </ul>
    </nav>
        
        
        