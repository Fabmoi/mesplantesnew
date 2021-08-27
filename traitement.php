<h1>Récapitulatif des données du formulaire:</h1>
<?php                                                                                       // AFFICHE LES DONNÉES POUR L'UTILISATEUR
    echo 'pseudo : '.$_POST["pseudo"].'<br>';
    echo 'email : ' .$_POST["email"].'<br>';
    
    if(!empty($_POST['age']))
    {
        echo "Tranche d'âge : " . $_POST['age']. '<br>';
    }
    if(!empty($_POST['continent']))
    {
        echo "Vous avez choisi " .$_POST['continent']. '<br>';
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
	$case_1 = $_POST["suggest"] ?? null;
	$case_2 = $_POST["error"] ?? null;
	$case_3 = $_POST["bug"] ?? null;
	$case_4 = $_POST["other"] ?? null; 
    
	if(isset($case_1))
	{ 
		echo "<hr> La case <strong>suggestion</strong> est cochée" ."<br>";
	}
    if(!isset($case_1))
	{ 
		echo "<hr> La case <strong>suggestion</strong> n'est pas cochée" ."<br>";
	}
	if(isset($case_2))
	{ 
		echo "La case <strong>erreur</strong> est cochée" ."<br>"; 
	}
    if(!isset($case_2))
	{ 
		echo "La case <strong>erreur</strong> n'est pas cochée" ."<br>"; 
	}
    if(isset($case_3))
    {
        echo "La case <strong>bug</strong> est cochée" ."<br>";
    }
    if(!isset($case_3))
    {
        echo "La case <strong>bug</strong> n'est pas cochée" ."<br>";
    }
    if(isset($case_4))
    {
        echo "La case <strong>autre</strong> est cochée" ."<br><hr>";
    }
    if(!isset($case_4))
    {
        echo "La case <strong>autre</strong> n'est pas cochée" ."<br><hr>";
    }
}
echo '<strong>message</strong> : '.$_POST["message"].'<br>';                                // AFFICHE LE MESSAGE POSTÉ PAR L'UTILISATEUR 
?>
<hr>
<?php                                                                                       // Variables concernant l'email
    $subject = 'Mail PHP';
    $message = 'Message envoyé depuis le formulaire de contact de lesplantesdefab.be
    Pseudo : '. $_POST['pseudo'] . '
    Email : ' . $_POST['email'] . '
    Âge : ' . $_POST['age'] . '
    Continent : ' . $_POST['continent'] . '
    Case suggest : ' . $_POST['suggest'] . '
    Case error : ' . $_POST['error'] . '
    Case bug : ' . $_POST['bug'] . '
    Case other : ' . $_POST['other'] . '
    Message : ' . $_POST['message'] ;

                                                                                            // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $entete = 'MIME-Version: 1.0'."\r\n";                                          
    $entete = 'Content-type: text/html; charset=utf-8'."\r\n";
    $entete = 'From: ' . $_POST['email']."\r\n";
                                                                                            // Fonction principale qui envoi l'email
    if (mail($subject, $message, $entete)) 
    {
        echo "<strong>Statut</strong>: 
        Votre message a bien été envoyé ! <br> 
        Merci d'avoir prit le temps de répondre aux questionnaires. <br> 
        Je vous réponds dés que possible.";
    }
    else 
    {
        echo "<strong>Statut</strong>:
        Votre message n'a pas pu être envoyé !";
    }  
?>
<hr>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir sur la page précédente.</a>       <!-- PERMET DE REVENIR SUR LA PAGE PRÉCÉDENTE -->