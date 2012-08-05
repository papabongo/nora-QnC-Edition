<?

$lang["yes"]="yes";
$lang["no"]="no";

$lang["navi_sendfile"]="Send a File";
$lang["navi_pickupfile"]="Pick Up a File";
$lang["navi_admin"]="Admin";

$lang["index_file"] ="File";
$lang["index_expiry"] ="Expires";
$lang["index_recipient"] ="E-mail of recipient";
$lang["index_sender"] ="E-mail of sender (you)";
$lang["index_submit"] ="Upload";

$lang["index_1day"]= "1 day";
$lang["index_2days"]= "2 days";
$lang["index_3days"]= "3 days";
$lang["index_1week"]= "1 week";
$lang["index_2weeks"]= "2 weeks";
$lang["index_1month"]= "1 month";

$lang["index_createlink"]="Create an upload link";


$lang["pickup_submit"]="Pick up File";
$lang["pickup_antispam"]="Safety Code";
$lang["pickup_code"]="Pick Up Code (13 Characters)";
$lang["pickup_antispamrefresh"]="Can't see the characters?<br>... Click to get another picture";
$lang["pickup_antispamexplain"]="Enter the 4 characters you see in the picture on the left";
$lang["pickup_codeerror"]="Error: Mismatch of Code";
$lang["pickup_nofile"]="Sorry ... File not found";


$lang["sendermail"]="Sender";
$lang["filename"]="Filename";
$lang["filesize"]="Size";

$lang["upload_confirmation"]="Successfully uploaded file";
$lang["upload_mailrecipient1"]="You are invited to download a file from the data share server ";
$lang["upload_mailrecipient2"]="To pick up";
$lang["upload_mailrecipient3"]="please follow this link";
$lang["upload_mailrecipient4"]="Alternatively you can go to";
$lang["upload_mailrecipient5"]="and use this pickup code";
$lang["upload_mailrecipient6"]="The file";
$lang["upload_mailrecipient7"]="will be removed from the server on";
$lang["upload_mailrecipientsubject"]="Invitiation to download ";
$lang["upload_mailsender1"] = "recieved a link to download";
$lang["upload_mailsender2"]= "To remove the file";
$lang["upload_mailsender3"]= "now, please follow this link";
$lang["upload_mailsendersubject"]="Confirmation of Upload";
$lang["upload_error1"]="Unable to upload.";
$lang["upload_error2"]="Wrong domains";
$lang["upload_error3"]="Data missing";

$lang["checker_error"]="Either the datafile is missing or an email address is not accepted";
$lang["checkertiny_error"]="This email address is not accepted";

$lang["checkaddress_success"]="An e-mail was sent to you.<br><br>Please check your mailbox and follow the instructions in the e-mail";
$lang["checkaddress_title"]="Check e-mail address";
$lang["checkaddress_mail1"]="To upload data to ";
$lang["checkaddress_mail2"]=" please follow this link";
$lang["checkaddress_mail3"]="This link will expire on ";
$lang["checkaddress_mailsubject"]="Link to upload your data";


$lang["conf_adminpwd"] = "password#The password to get to the administration page (this here)";
$lang["conf_failed_attempts"] = "number#How many times one can get the password wrong to get to the administration page (here), before being locked out";
$lang["conf_entropy"] = "An arbitrary alphanumeric (numbers [0-9] and charters [a-Z]) sequence to randomize the ids of uploaded files. Don't worry if you dont understand it: just enter a few charcters and numbers";
$lang["conf_serveraddress"] = "The fully qualified domainname. If you don't have a DNS running or resolving this server, then please enter its IP-address";
$lang["conf_fromname"] = "The human readable name of the server. This will appear in the emails as the sender";
$lang["conf_frommail"] = "The email of the sender. When the server sends e-mails: That's the address the address of the sender. It is very strongly recommended that you use a valid e-mail address of your organisation";
$lang["conf_smtphost"] = "Fully qualified domainname or IP address of your mail server";
$lang["conf_smtpport"] = "number#Smtp tcp-port or your mail server";
$lang["conf_smtpauth"] = "bool#Does the mail server require authentication?";
$lang["conf_smtpuser"] = "If the mail server requires authentication: The username for authenticating on the mail server";
$lang["conf_smtppass"] = "password#If the mail server requires authentication: The authentication password";
$lang["conf_senddomains"] = "Domainnames from which e-mails are accepted for uploading data. Comma-delimited. Example: 'bar.com, hq.net' are defined as accepted domains. So: foo@bar.com can upload data, foo@car.com can't upload data. Note: All the criterias defined in senddomains, recievedomains, xordomains have to me met for a successfull upload. It is VERY strongly advised to define at least xordomains.";
$lang["conf_receivedomains"] = "Domainnames from which e-mails are accepted for recieving data. Comma-delimited. Example: 'bar.com, hq.net' are defined as accepted domains. So: foo@bar.com can recieve (pick up) data, foo@car.com can't recieve data. Note: All the criterias defined in senddomains, recievedomains, xordomains have to me met for a successfull upload. It is VERY strongly advised to define at least xordomains.";
$lang["conf_xordomains"] = "Domainnames from which e-mails are accepted either for uploading or recieving data. Comma-delimited. Example: 'bar.com, hq.net' are defined as accepted domains. So: foo@bar.com can either upload or pick up data, foo@car.com can't do anything. Note: All the criterias defined in senddomains, recievedomains, xordomains have to me met for a successfull upload. It is VERY strongly advised to define at least xordomains";
$lang["conf_showadminlink"] = "bool#Should the user see a link to this page in the navigation bar on the left?";
$lang["conf_checksender"] = "bool#Should the sender receive an e-mail (to check the e-mail addresses validity) with a dedicated uploadlink, before being able to upload a file ? ";
$lang["conf_checkrecipient"] = "bool#Should the recipient receive an e-mail (to check the e-mail addresses validity) with a dedicated confirmationlink, before being able to upload a file ";
?>