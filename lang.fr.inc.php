<?


$lang["yes"]="oui";
$lang["no"]="non";

$lang["navi_sendfile"]="Envoyer un fichier";
$lang["navi_pickupfile"]="Retrait d'un fichier";
$lang["navi_admin"]="Administration";

$lang["index_file"] ="Fichier";
$lang["index_expiry"] ="Supprimé dans ";
$lang["index_recipient"] ="E-mail du destinataire";
$lang["index_sender"] ="E-mail de l'expéditeur (vous)";
$lang["index_submit"] ="Télécharger";

$lang["index_1day"]= "1 jour";
$lang["index_2days"]= "2 jours";
$lang["index_3days"]= "3 jours";
$lang["index_1week"]= "1 semaine";
$lang["index_2weeks"]= "2 semaines";
$lang["index_1month"]= "1 mois";

$lang["index_createlink"]="Créer un lien pour télécharger le fichier";



$lang["pickup_submit"]="Retrait du fichier";
$lang["pickup_antispam"]="Code de sécurité";
$lang["pickup_code"]="Code de retrait (13 caractères)";
$lang["pickup_antispamrefresh"]="Les caractères ne sont pas visible?<br>... Cliquez ici pour une autre image";
$lang["pickup_antispamexplain"]="Saisissez les 4 caractères que vous voyez dans l'image a gauche";
$lang["pickup_codeerror"]="Erreur: Mauvais code";
$lang["pickup_nofile"]="Désolé ... Fichier pas retrouvable";


$lang["sendermail"]="Expéditeur";
$lang["filename"]="Fichier";
$lang["filesize"]="Taille";

$lang["upload_confirmation"]="Téléchargé fichier";
$lang["upload_mailrecipient1"]="Vous êtes invité à télécharger un fichier du serveur ";
$lang["upload_mailrecipient2"]="Pour retirer le fichier";
$lang["upload_mailrecipient3"]="cliquez sur le lien suivant";
$lang["upload_mailrecipient4"]="En alternative, vous pouvez voir sur le serveur";
$lang["upload_mailrecipient5"]="et utiliser le code de retrait";
$lang["upload_mailrecipient6"]="Le fichier";
$lang["upload_mailrecipient7"]="va être effacé du serveur le";
$lang["upload_mailrecipientsubject"]="Invitation à télécharger ";
$lang["upload_mailsender1"] = "à reçu un lien pour télécharger";
$lang["upload_mailsender2"]= "Pour effacer le fichier";
$lang["upload_mailsender3"]= "du serveur maintenant, utilisez le lien suivant s.v.p.";
$lang["upload_mailsendersubject"]="Confirmation de téléchargement";
$lang["upload_error1"]="Téléchargement pas possible.";
$lang["upload_error2"]="Faute de domains";
$lang["upload_error3"]="Manque de données";

$lang["checker_error"]="Ou le fichier manque, ou une adresse e-mail n'est pas acceptée";
$lang["checkertiny_error"]="This email address is not accepted";

$lang["checkaddress_success"]="Un e-mail vous a été envoyé.<br><br>Suivez les instructions de cet e-mail s.v.p.";
$lang["checkaddress_title"]="Vérifier adresse e-mail";
$lang["checkaddress_mail1"]="Pour télécharger un fichier sur le serveur ";
$lang["checkaddress_mail2"]=" suivez ce lien s.v.p.";
$lang["checkaddress_mail3"]="Ce lien va expirer le ";
$lang["checkaddress_mailsubject"]="Lien pour télécharger votre fichier";

$lang["conf_adminpwd"] = "password#Le mot de passe pour accéder la page d'administration (celle-ci)";
$lang["conf_failed_attempts"] = "number#Combien de fois on peux saisir le mot de passe faux avant que la page soit bloquée";
$lang["conf_entropy"] = "Une sequence arbitraire de chiffres et lettres (chiffres [0-9] et lettres [a-Z]) pour rendre les clefs de fichiers plus randomisés. Ne vous en faites pas: Si vous ne le comprenez pas: Saisisez quelques chiffres et lettres et tout est bien.";
$lang["conf_serveraddress"] = "Le nom de domaine complet (FQDN). Si vous n'avez pas de DNS qui tourne ou le nom du serveur ne peux pas être résolu, saisissez l'adresse IP s.v.p.";
$lang["conf_fromname"] = "Nom du serveur, lisible pour des humains. Ce nom constitue le expéditeur des e-mails";
$lang["conf_frommail"] = "L'adresse e-mail de l'expéditeur. Quand le serveur envoi des e-mails: C'est cette adresse e-mail de l'expéditeur. Il est très recommandé d'utiliser une adresse valide de votre organisation";
$lang["conf_smtphost"] = "Nom du serveur complet (FQDN) ou adresse IP du mail serveur";
$lang["conf_smtpport"] = "number#Port snmp du  mail serveur";
$lang["conf_smtpauth"] = "bool#Est-ce que le mail server exige une authentification?";
$lang["conf_smtpuser"] = "Si le mail serveur exige une authentification: Le nom d'utilisateur";
$lang["conf_smtppass"] = "password#Si le mail serveur exige une authentification: Le mot de passe";
$lang["conf_senddomains"] = "Noms de domaines desquels des adresses e-mails sont accepté pour l'envoi de fichiers. Séparés par virgules. Exemple: 'bar.com, hq.net' sont définit comme domaines acceptables. Alors: foo@bar.com peut envoyer des données, foo@car.com n'est pas accepté pour l'envoi de données. Note: Tous les critères défini dans senddomains, recievedomains, xordomains doivent être satisfaits pour que l'utilisateur puisse envoyer des données. Il est FORTEMENT recommandé de au moins définir xordomains.";
$lang["conf_receivedomains"] = "Noms de domaines pour lesquels des adresses e-mails sont accepté pour la réception de fichiers. Séparés par virgules. Exemple: 'bar.com, hq.net' sont définit comme domaines acceptables. Alors: foo@bar.com peut recevoir des données, foo@car.com n'est pas accepté pour la réception de données. Note: Tous les critères défini dans senddomains, recievedomains, xordomains doivent être satisfaits pour que l'utilisateur puisse envoyer des données. Il est FORTEMENT recommandé de au moins definir xordomains.";
$lang["conf_xordomains"] = "Noms de domaines pour lesquels des adresses e-mails sont accepté pour l'envoi ou la réception de fichiers. Séparés par virgules. Example: 'bar.com, hq.net' sont définit comme domaines acceptables. Alors: foo@bar.com peut ou envoyer ou recevoir des données, foo@car.com n'est pas accepté pour ni l'un ni l'autre. Note: Tous les critères défini dans senddomains, recievedomains, xordomains doivent être satisfaits pour que l'utilisateur puisse envoyer des données. Il est FORTEMENT recommandé de au moins définir xordomains.";
$lang["conf_showadminlink"] = "bool#Est-ce que l'utilisateur devrait voir le lien pour la page d'administration (celle-ci) dans la navigation à gauche?";


?>