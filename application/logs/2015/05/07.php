<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-07 10:37:02 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Cookie.php:67
2015-05-07 10:37:02 --- DEBUG: #0 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('vc', NULL)
#1 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('vc')
#2 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Cookie.php:67
2015-05-07 20:45:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\welcome.php [ 2 ] in file:line
2015-05-07 20:45:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 21:13:24 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php:11
2015-05-07 21:13:24 --- DEBUG: #0 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\WebServers\h...', 11, Array)
#1 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\index.php(118): Kohana_Request->execute()
#7 {main} in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php:11
2015-05-07 21:14:00 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php:11
2015-05-07 21:14:00 --- DEBUG: #0 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\WebServers\h...', 11, Array)
#1 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\index.php(118): Kohana_Request->execute()
#7 {main} in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php:11
2015-05-07 21:14:02 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php:11
2015-05-07 21:14:02 --- DEBUG: #0 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\WebServers\h...', 11, Array)
#1 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\index.php(118): Kohana_Request->execute()
#7 {main} in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\application\classes\Controller\Welcome.php:11
2015-05-07 21:18:03 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\View.php:145
2015-05-07 21:18:03 --- DEBUG: #0 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\View.php(145): Kohana_View->set_filename('main')
#1 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\index.php(118): Kohana_Request->execute()
#9 {main} in C:\WebServers\home\humanity.noise_project\www\humanity.noise_project\system\classes\Kohana\View.php:145
2015-05-07 23:44:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Templates' not found ~ APPPATH\classes\Controller\common.php [ 3 ] in file:line
2015-05-07 23:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 23:50:03 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\humanity.noise_project\www\system\classes\Kohana\View.php:145
2015-05-07 23:50:03 --- DEBUG: #0 Z:\home\humanity.noise_project\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/pages/show')
#1 Z:\home\humanity.noise_project\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 Z:\home\humanity.noise_project\www\application\classes\Controller\page.php(10): Kohana_View::factory('/pages/show')
#3 Z:\home\humanity.noise_project\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\humanity.noise_project\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\humanity.noise_project\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\humanity.noise_project\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\humanity.noise_project\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\humanity.noise_project\www\system\classes\Kohana\View.php:145