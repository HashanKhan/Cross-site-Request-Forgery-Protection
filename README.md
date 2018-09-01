# Cross-site-Request-Forgery-Protection
Actually there are 2 main types to prevent from cross-site request forgery (csrf) attacks. There are Synchronizer Token Pattern and Double submit Cookies pattern. In Synchronizer token pattern csrf token will be stored in server side memory. But in Double submit Cookies pattern the csrf token will be stored in the browser as a cookie.

How to build and deploy:

Both of the above applications should be deployed in the WampServer in order to run perfectly.Please follow these steps,

1).Copy both files (Synchronizer Token Pattern & Double Submit Cookies Pattern) to the wampserver localhost folder (C:\wamp\www) where you have installed it.

2).Inside both of the above copied files there's a php file called 'init.php'.In that file there's a method call "spl_autoload_register". In the method body after the "require_once" you have to give your valid path to the classes folder which in the wampserver folder.

3).Below that fuction there's another "require_once" next to that you have to set your valid path for the 'sanitize.php' file in the wampserver folder.

4).After that you have to replace your own 'init.php' file path in all the following files,
    login.php
    logout.php
    welcome.php
    
5).Finally you can got to your browser and type the url as 'localhost/<file name(Synchronizer Token Pattern/Double Submit Cookies Pattern)>/login.php'.

6).The valid hardcoded user credentials are,
    UN: admin
    PW: admin

Please follow these simple 6 steps for the both of the applications in order to deploy it and run it perfectly.
