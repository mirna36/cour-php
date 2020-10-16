<?php
session_start();
if(isset($_SESSION['user_Ok'])){
    if($_SESSION['user_Ok']['type_utilisateur  '] !="ADM"){

    Header("Location: views/utilisateur/frmLogin.php");
}else{
    Header("Location: views/utilisateur/frmLogin.php");

}
}
echo $_SESSION['message_erreur'];
?>