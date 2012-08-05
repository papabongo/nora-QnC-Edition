<?


$lang["yes"]="oui";
$lang["no"]="non";

$lang["navi_sendfile"]="Envoyer un fichier";
$lang["navi_pickupfile"]="Retrait d'un fichier";
$lang["navi_admin"]="Administration";

$lang["index_file"] ="Fichier";
$lang["index_expiry"] ="Supprim� dans ";
$lang["index_recipient"] ="E-mail du destinataire";
$lang["index_sender"] ="E-mail de l'exp�diteur (vous)";
$lang["index_submit"] ="T�l�charger";

$lang["index_1day"]= "1 jour";
$lang["index_2days"]= "2 jours";
$lang["index_3days"]= "3 jours";
$lang["index_1week"]= "1 semaine";
$lang["index_2weeks"]= "2 semaines";
$lang["index_1month"]= "1 mois";

$lang["index_createlink"]="Cr�er un lien pour t�l�charger le fichier";



$lang["pickup_submit"]="Retrait du fichier";
$lang["pickup_antispam"]="Code de s�curit�";
$lang["pickup_code"]="Code de retrait (13 caract�res)";
$lang["pickup_antispamrefresh"]="Les caract�res ne sont pas visible?<br>... Cliquez ici pour une autre image";
$lang["pickup_antispamexplain"]="Saisissez les 4 caract�res que vous voyez dans l'image a gauche";
$lang["pickup_codeerror"]="Erreur: Mauvais code";
$lang["pickup_nofile"]="D�sol� ... Fichier pas retrouvable";


$lang["sendermail"]="Exp�diteur";
$lang["filename"]="Fichier";
$lang["filesize"]="Taille";

$lang["upload_confirmation"]="T�l�charg� fichier";
$lang["upload_mailrecipient1"]="Vous �tes invit� � t�l�charger un fichier du serveur ";
$lang["upload_mailrecipient2"]="Pour retirer le fichier";
$lang["upload_mailrecipient3"]="cliquez sur le lien suivant";
$lang["upload_mailrecipient4"]="En alternative, vous pouvez voir sur le serveur";
$lang["upload_mailrecipient5"]="et utiliser le code de retrait";
$lang["upload_mailrecipient6"]="Le fichier";
$lang["upload_mailrecipient7"]="va �tre effac� du serveur le";
$lang["upload_mailrecipientsubject"]="Invitation � t�l�charger ";
$lang["upload_mailsender1"] = "� re�u un lien pour t�l�charger";
$lang["upload_mailsender2"]= "Pour effacer le fichier";
$lang["upload_mailsender3"]= "du serveur maintenant, utilisez le lien suivant s.v.p.";
$lang["upload_mailsendersubject"]="Confirmation de t�l�chargement";
$lang["upload_error1"]="T�l�chargement pas possible.";
$lang["upload_error2"]="Faute de domains";
$lang["upload_error3"]="Manque de donn�es";

$lang["checker_error"]="Ou le fichier manque, ou une adresse e-mail n'est pas accept�e";
$lang["checkertiny_error"]="This email address is not accepted";

$lang["checkaddress_success"]="Un e-mail vous a �t� envoy�.<br><br>Suivez les instructions de cet e-mail s.v.p.";
$lang["checkaddress_title"]="V�rifier adresse e-mail";
$lang["checkaddress_mail1"]="Pour t�l�charger un fichier sur le serveur ";
$lang["checkaddress_mail2"]=" suivez ce lien s.v.p.";
$lang["checkaddress_mail3"]="Ce lien va expirer le ";
$lang["checkaddress_mailsubject"]="Lien pour t�l�charger votre fichier";

$lang["conf_adminpwd"] = "password#Le mot de passe pour acc�der la page d'administration (celle-ci)";
$lang["conf_failed_attempts"] = "number#Combien de fois on peux saisir le mot de passe faux avant que la page soit bloqu�e";
$lang["conf_entropy"] = "Une sequence arbitraire de chiffres et lettres (chiffres [0-9] et lettres [a-Z]) pour rendre les clefs de fichiers plus randomis�s. Ne vous en faites pas: Si vous ne le comprenez pas: Saisisez quelques chiffres et lettres et tout est bien.";
$lang["conf_serveraddress"] = "Le nom de domaine complet (FQDN). Si vous n'avez pas de DNS qui tourne ou le nom du serveur ne peux pas �tre r�solu, saisissez l'adresse IP s.v.p.";
$lang["conf_fromname"] = "Nom du serveur, lisible pour des humains. Ce nom constitue le exp�diteur des e-mails";
$lang["conf_frommail"] = "L'adresse e-mail de l'exp�diteur. Quand le serveur envoi des e-mails: C'est cette adresse e-mail de l'exp�diteur. Il est tr�s recommand� d'utiliser une adresse valide de votre organisation";
$lang["conf_smtphost"] = "Nom du serveur complet (FQDN) ou adresse IP du mail serveur";
$lang["conf_smtpport"] = "number#Port snmp du  mail serveur";
$lang["conf_smtpauth"] = "bool#Est-ce que le mail server exige une authentification?";
$lang["conf_smtpuser"] = "Si le mail serveur exige une authentification: Le nom d'utilisateur";
$lang["conf_smtppass"] = "password#Si le mail serveur exige une authentification: Le mot de passe";
$lang["conf_senddomains"] = "Noms de domaines desquels des adresses e-mails sont accept� pour l'envoi de fichiers. S�par�s par virgules. Exemple: 'bar.com, hq.net' sont d�finit comme domaines acceptables. Alors: foo@bar.com peut envoyer des donn�es, foo@car.com n'est pas accept� pour l'envoi de donn�es. Note: Tous les crit�res d�fini dans senddomains, recievedomains, xordomains doivent �tre satisfaits pour que l'utilisateur puisse envoyer des donn�es. Il est FORTEMENT recommand� de au moins d�finir xordomains.";
$lang["conf_receivedomains"] = "Noms de domaines pour lesquels des adresses e-mails sont accept� pour la r�ception de fichiers. S�par�s par virgules. Exemple: 'bar.com, hq.net' sont d�finit comme domaines acceptables. Alors: foo@bar.com peut recevoir des donn�es, foo@car.com n'est pas accept� pour la r�ception de donn�es. Note: Tous les crit�res d�fini dans senddomains, recievedomains, xordomains doivent �tre satisfaits pour que l'utilisateur puisse envoyer des donn�es. Il est FORTEMENT recommand� de au moins definir xordomains.";
$lang["conf_xordomains"] = "Noms de domaines pour lesquels des adresses e-mails sont accept� pour l'envoi ou la r�ception de fichiers. S�par�s par virgules. Example: 'bar.com, hq.net' sont d�finit comme domaines acceptables. Alors: foo@bar.com peut ou envoyer ou recevoir des donn�es, foo@car.com n'est pas accept� pour ni l'un ni l'autre. Note: Tous les crit�res d�fini dans senddomains, recievedomains, xordomains doivent �tre satisfaits pour que l'utilisateur puisse envoyer des donn�es. Il est FORTEMENT recommand� de au moins d�finir xordomains.";
$lang["conf_showadminlink"] = "bool#Est-ce que l'utilisateur devrait voir le lien pour la page d'administration (celle-ci) dans la navigation � gauche?";


?>