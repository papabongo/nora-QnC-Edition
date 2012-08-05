<?

$lang["yes"]="Ja";
$lang["no"]="Nein";

$lang["navi_sendfile"]="Datei versenden";
$lang["navi_pickupfile"]="Datei abholen";
$lang["navi_admin"]="Administration";

$lang["index_file"] ="Datei";
$lang["index_expiry"] ="Wird gelöscht nach ";
$lang["index_recipient"] ="E-mail des Empfängers";
$lang["index_sender"] ="E-mail des Abenders (Sie)";
$lang["index_submit"] ="Datei hochladen";

$lang["index_1day"]= "1 Tag";
$lang["index_2days"]= "2 Tagen";
$lang["index_3days"]= "3 Tagen";
$lang["index_1week"]= "1 Woche";
$lang["index_2weeks"]= "2 Wochen";
$lang["index_1month"]= "1 Monat";

$lang["index_createlink"]="Einen Upload-Link kreieren";

$lang["pickup_submit"]="Datei abholen";
$lang["pickup_antispam"]="Sicherheitscode";
$lang["pickup_code"]="Abholcode (13 Zeichen)";
$lang["pickup_antispamrefresh"]="Sind die Zeichen unleserlich?<br>... Hier klicken für ein neues Bild";
$lang["pickup_antispamexplain"]="Die 4 Zeichen auf dem Bild links eingeben";
$lang["pickup_codeerror"]="Fehler: Code stimmt nicht überein";
$lang["pickup_nofile"]="Schade ... Datei nicht gefunden";


$lang["sendermail"]="Sender";
$lang["filename"]="Dateiname";
$lang["filesize"]="Grösse";

$lang["upload_confirmation"]="Datei erfolgreich hochgeladen";
$lang["upload_mailrecipient1"]="Sie werden dazu eingeladen eine Datei herunterzuladen vom Server ";
$lang["upload_mailrecipient2"]="Um die Datei ";
$lang["upload_mailrecipient3"]="abzuholen, bitte klicken Sie auf den folgenden Link";
$lang["upload_mailrecipient4"]="Sie können aber auch auf den Server";
$lang["upload_mailrecipient5"]="gehen und diesen Abholcode benützen";
$lang["upload_mailrecipient6"]="Die Datei";
$lang["upload_mailrecipient7"]="wird zu folgendem Zeitpunkt vom Server gelöscht: ";
$lang["upload_mailrecipientsubject"]="Einladung zur Abholung von ";
$lang["upload_mailsender1"] = "hat einen Link zur abholung der Datei erhalten";
$lang["upload_mailsender2"]= "Um die Datei";
$lang["upload_mailsender3"]= "jetzt zu löschen, bitte foldenden Link anklicken";
$lang["upload_mailsendersubject"]="Versandbestätigung";
$lang["upload_error1"]="Kann nicht hochladen.";
$lang["upload_error2"]="Falsche Domain";
$lang["upload_error3"]="Daten fehlen";

$lang["checker_error"]="Entweder es fehlen Daten oder eine E-mail-Adresse wird nicht akzeptiert";
$lang["checkertiny_error"]="This email address is not accepted";

$lang["checkaddress_success"]="Es wurde Ihnen eine e-mail zugestellt.<br><br>Bitte überprüfen Sie Ihre Mailbox und folgend Sie den Instruktionen im E-mail";
$lang["checkaddress_title"]="&Uuml;berprüfung E-mail Adresse";
$lang["checkaddress_mail1"]="Um daten auf den Server ";
$lang["checkaddress_mail2"]=" zu laden, bitte folgend Sie diesem Link";
$lang["checkaddress_mail3"]="Dieser Link wird zum folgenden Zeitpunkt ablaufen: ";
$lang["checkaddress_mailsubject"]="Link um Ihre Daten hochzuladen";

$lang["conf_adminpwd"] = "password#Das Passwort für die Administrationseite (diese hier)";
$lang["conf_failed_attempts"] = "number#Wie oft darf das Passwort für die Administrationsseite (diese hier) falsch eingegeben werden, bevor der Benutzer ausgeschlossen wird";
$lang["conf_entropy"] = "Eine zufällige Sequenz von alphanumerischen Zeichen (Zahlen [0-9] und Buchstaben [a-Z]) um die zufälligkeit der IDs von hochgeladenen Dateien zu sichern. Macht nichts wenn Sie es nicht verstehen: Tippen Sie einfach ein paar Zeichen ein";
$lang["conf_serveraddress"] = "Der Domainname des Servers. Falls kein DNS die Adresse auflöst, dann bitte die entsprechende IP-Adresse eingeben";
$lang["conf_fromname"] = "Der menschenlesbare name des Servers. Dieser Name erscheint unter anderem als Absender in den E-mails";
$lang["conf_frommail"] = "Die E-mail-Adresse des Serves. Bei den E-mails, die der Server verschickt: Das ist die Adresse, die er als Absender verwendet. Es empfiehlt sich sehr eine gültige E-mail-Adresse Ihrer Organisation zu verwenden";
$lang["conf_smtphost"] = "Domainname oder IP-Adresse des Mailservers (SMTP)";
$lang["conf_smtpport"] = "number#SMTP TCP-Port des Mailservers";
$lang["conf_smtpauth"] = "bool#Muss man sich beim Mailserver authentisieren?";
$lang["conf_smtpuser"] = "Falls der Mailserver authentisierung verlangt: Der Benutzername zur authentisierung am Mailserver";
$lang["conf_smtppass"] = "password#Falls der Mailserver authentisierung verlangt: Das entsprechende Passwort";
$lang["conf_senddomains"] = "E-mails werden von den angegeben Domains akzeptiert fürs Versenden (Hochladen) von Daten. Mit Kommas getrennt. Beispiel: 'bar.com, hq.net' sind die akzeptierbaren Domains. D.h.: foo@bar.com kann Daten hochladen, foo@haar.com darf keine Daten hochladen. Nota bene: All the Kriterien, die in senddomains, recievedomains, xordomains definiert werden, müssen erfüllt werden damit der Versand von Daten erlaubt wird. Es wird SEHR stark empfohlen, dass zumindest eine Domain xordomains eingetragen wird.";
$lang["conf_receivedomains"] = "E-mails werden von den angegeben Domains als Emfänger akzeptiert, für den Erhalt (Abholung) von Daten. Mit Kommas getrennt. Beispiel: 'bar.com, hq.net' sind die akzeptierbaren Domains. D.h.: foo@bar.com kann Daten abholen, foo@haar.com ist keine akzeptierte Ziel-E-Email-Adresse. Nota bene:  Nota bene: All the Kriterien, die in senddomains, recievedomains, xordomains definiert werden, müssen erfüllt werden damit der Versand von Daten erlaubt wird. Es wird SEHR stark empfohlen, dass zumindest eine Domain xordomains eingetragen wird.";
$lang["conf_receivedomains"] = "E-mails werden von den angegeben Domains akzeptiert für den Erhalt (Abholung) von Daten. Mit Kommas getrennt. Beispiel: 'bar.com, hq.net' sind die akzeptierbaren Domains. D.h.: foo@bar.com kann Daten abholen, foo@haar.com ist keine akzeptierte Ziel-E-Email-Adresse. Nota bene:  Nota bene: All the Kriterien, die in senddomains, recievedomains, xordomains definiert werden, müssen erfüllt werden damit der Versand von Daten erlaubt wird. Es wird SEHR stark empfohlen, dass zumindest eine Domain xordomains eingetragen wird.";
$lang["conf_xordomains"] = "E-mails von den angegebenen Domains werden entweder als Absender oder Empfänger akzeptiert. Mit Kommas getrennt. Beispiel: 'bar.com, hq.net' sind die akzeptierbaren Domains. D.h.: foo@bar.com kann Daten versenden oder abholen, foo@haar.com ist keine akzeptierte E-Email-Adresse.  Nota bene: All the Kriterien, die in senddomains, recievedomains, xordomains definiert werden, müssen erfüllt werden damit der Versand von Daten erlaubt wird. Es wird SEHR stark empfohlen, dass zumindest eine Domain xordomains eingetragen wird.";
$lang["conf_showadminlink"] = "bool#Soll der Benutzer den Link zur Administrationsseite (diese hier) in der Navigationsleiste links sehen?";

?>