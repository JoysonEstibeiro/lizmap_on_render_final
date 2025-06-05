;<?php die(''); ?>
;for security reasons , don't remove or modify the first line

; put here configuration variables that are specific to this installation


; chmod for files created by Lizmap and Jelix
;chmodFile=0664
;chmodDir=0775



[modules]
;; uncomment it if you want to use ldap for authentication
;; see documentation to complete the ldap configuration
;ldapdao.enable=on


jcommunity.installparam[manualconfig]=on
jcommunity.installparam[masteradmin]=off
jcommunity.installparam[eps]="[index,admin]"
[coordplugin_auth]
;; uncomment it if you want to use ldap for authentication
;; see documentation to complete the ldap configuration
;driver=ldapdao


[mailer]
;; to send email via SMTP, uncomment this line, and fill the section smtp:mailer into profiles.ini.php
;mailerType=smtp


[auth_db]
; uncomment to enable authentication with the login or the email
;authenticateWith=login-email

[test_dropin]
true_value=true


[coordplugins]
lizmap=lizmapConfig.ini.php
