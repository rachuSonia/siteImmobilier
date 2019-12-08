<?php
require('application/database.php');



if(!empty($_POST) && isset($_POST)){


    $lastName=htmlspecialchars($_POST['lastName']);
    $firstName=htmlspecialchars($_POST['firstName']);
    $birth_date=htmlspecialchars($_POST['birth_date']);
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $password1=htmlspecialchars($_POST['mdp1']);
    $password2=htmlspecialchars($_POST['mdp2']);
    $email1=htmlspecialchars($_POST['email1']);
    $email2=htmlspecialchars($_POST['email2']);
    $adress=htmlspecialchars($_POST['adress']);
    $phoneMobil=htmlspecialchars($_POST['phoneMobile']);

    $errors=array();
        if(!empty($lastName)){
            if(!empty($firstName)){
                if(!empty($birth_date)){
                    if(!empty($pseudo)){
                        if(strlen($pseudo)<=8){
                            $pdo=createconnection();
                            $req=$pdo->prepare('SELECT `pseudo` FROM `users` WHERE `pseudo`=?');
                            $req->execute(array($pseudo));
                            $pseudoExist=$req->rowCount();
                                if($pseudoExist==0){    
                                    if(!empty($password1)){
                                        if(strlen($password1)<=16){
                                            if(!empty($password2)){
                                                if($password1==$password2){
                                                    if(!empty($email1)){
                                                        if(filter_var($email1,FILTER_VALIDATE_EMAIL) && !preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9].[a-z]{2,4}$#", $email1)){
                                                            $pdo=createconnection();
                                                            $req=$pdo->prepare('SELECT `e_mail` FROM `users` WHERE `e_mail`=?');
                                                            $req->execute(array($email1));
                                                            $emailExite=$req->rowCount();
                                                            if($emailExite==0){
                                                                if(!empty($email2)){
                                                                    if($email1==$email2){
                                                                        if(!empty($adress)){
                                                                            if(!empty($phoneMobil)){
                                                                                if(preg_match("#^\d{6,10}$#",$phoneMobil)){
                                                                                        $succes='Votre compte à bien été créer !!';
                                                                                        registerUser($lastName,$firstName,$birth_date,$pseudo,$password1,$email1,$adress,$phoneMobil);                                         
                                                                                        unset($lastName);
                                                                                        unset($firstName);
                                                                                        unset($birth_date);
                                                                                        unset($pseudo);
                                                                                        unset($password);
                                                                                        unset($email1);
                                                                                        unset($adress);
                                                                                        unset($phoneMobil);
                                                                                }
                                                                                else{$errors['phoneMobile']="Votre numéro de téléphone mobile n'ets pas valide !!";}
                                                                            }
                                                                            else{$errors['phoneMobile']='Entrez votre téléphone mobile !!';}
                                                                        }
                                                                        else{$errors['adress']='Entrez votre adresse !!';}
                                                                    }
                                                                    else{$errors['email2']='Vos mails ne correspendent pas !!';}
                                                                }
                                                                else{$errors['email2']='Entrez votre mail une deuxiéme fois !!';}
                                                            }
                                                            else{$errors['email1']="Votre mail exite déjà !!";}
                                                        }
                                                        else{$errors['email1']="Votre mail n'est pas valide !!";}
                                                    }
                                                    else{$errors['email1']='Entrez votre mail !!';}
                                                }
                                                else{$errors['mdp2']='Vos mots de passes ne correspendent pas !!';}
                                            }
                                            else{$errors['mdp2']='Entrez votre mot de passe une deuxiéme fois !!';}
                                        }
                                        else{$errors['mdp1']='votre mot de passe doit contenir 16 caractéres maximum!!';}
                                    }
                                    else{$errors['mdp1']='Entrez votre mot de passe !!';}
                                }
                                else{$errors['pseudo']='Votre pseudo existe déja!!';}
                        }
                        else{$errors['pseudo']='Votre pseudo doit contenir 8 caractéres maximum !!';}
                    }
                    else{$errors['pseudo']='Entrez votre pseudo !!';}
                }
                else{ $errors['birth_date']='Entrez votre date de naissance !!';}
            }
            else{$errors['firstName']='Entrez votre prénom !!';}
        }
        else{$errors['lastName']='Entrez votre nom !!';}

}


// Sélection et affichage du template PHTML.
$template = 'register';
include 'layout.phtml';