<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-11 12:15:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contact ~ APPPATH/classes/Controller/Main.php [ 46 ] in /var/www/html/formbasket.com/application/classes/Controller/Main.php:46
2015-09-11 12:15:25 --- DEBUG: #0 /var/www/html/formbasket.com/application/classes/Controller/Main.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/f...', 46, Array)
#1 /var/www/html/formbasket.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_bootstrap2()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/formbasket.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/formbasket.com/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/formbasket.com/application/classes/Controller/Main.php:46
2015-09-11 12:15:33 --- EMERGENCY: ErrorException [ 2 ]: str_split() expects parameter 2 to be long, string given ~ APPPATH/classes/Controller/Main.php [ 47 ] in file:line
2015-09-11 12:15:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'str_split() exp...', '/var/www/html/f...', 47, Array)
#1 /var/www/html/formbasket.com/application/classes/Controller/Main.php(47): str_split('<form>??    <fi...', '<!--###end-->')
#2 /var/www/html/formbasket.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_bootstrap2()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/formbasket.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/formbasket.com/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-11 12:15:58 --- EMERGENCY: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH/classes/Controller/Main.php [ 47 ] in file:line
2015-09-11 12:15:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', '/var/www/html/f...', 47, Array)
#1 /var/www/html/formbasket.com/application/classes/Controller/Main.php(47): split()
#2 /var/www/html/formbasket.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_bootstrap2()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/formbasket.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/formbasket.com/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-11 14:52:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Main.php [ 55 ] in /var/www/html/formbasket.com/application/classes/Controller/Main.php:55
2015-09-11 14:52:38 --- DEBUG: #0 /var/www/html/formbasket.com/application/classes/Controller/Main.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/f...', 55, Array)
#1 /var/www/html/formbasket.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/formbasket.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/formbasket.com/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/formbasket.com/application/classes/Controller/Main.php:55
2015-09-11 14:54:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Main.php [ 55 ] in /var/www/html/formbasket.com/application/classes/Controller/Main.php:55
2015-09-11 14:54:36 --- DEBUG: #0 /var/www/html/formbasket.com/application/classes/Controller/Main.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/f...', 55, Array)
#1 /var/www/html/formbasket.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/formbasket.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/formbasket.com/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/formbasket.com/application/classes/Controller/Main.php:55
2015-09-11 14:55:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Main.php [ 56 ] in /var/www/html/formbasket.com/application/classes/Controller/Main.php:56
2015-09-11 14:55:19 --- DEBUG: #0 /var/www/html/formbasket.com/application/classes/Controller/Main.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/f...', 56, Array)
#1 /var/www/html/formbasket.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/formbasket.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/formbasket.com/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/formbasket.com/application/classes/Controller/Main.php:56
2015-09-11 14:55:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Main.php [ 56 ] in /var/www/html/formbasket.com/application/classes/Controller/Main.php:56
2015-09-11 14:55:20 --- DEBUG: #0 /var/www/html/formbasket.com/application/classes/Controller/Main.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/f...', 56, Array)
#1 /var/www/html/formbasket.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/html/formbasket.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/formbasket.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/formbasket.com/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/formbasket.com/application/classes/Controller/Main.php:56