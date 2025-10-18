<?php

//1. Saber si se esta trabajando de forma local o remota
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

//2. Definir el uso horario del sistema (timezone)
date_default_timezone_set('America/Mexico_City');

//3. Lenguaje
define('LANG',' es');

//4. Ruta base de nuestro proyecto
define('BASEPATH',IS_LOCAL ? '/beeFramework/' : '___EL BASEPATH EN PRODUCCION___');

//5. Sal de Sistema
define('AUTH_SAL','BeeFramework<3');

//6. Puerto y la URL del sitio
define('PORT','8848');
define('URL',IS_LOCAL ? 'http://127.0.0.1:'.PORT.'/beeFramework/': '___URL EN PRODUCCION___');

//7. Las rutas de directorios y archivos
define('DS',DIRECTORY_SEPARATOR); //'/'
define('ROOT',getcwd().DS); //

define('APP',ROOT.DS.'app'.DS);
define('CLASSES',APP.'classes'.DS);
define('CONFIG',APP.'config'.DS);
define('CONTROLLERS',APP.'controllers'.DS);
define('FUNCTIONS',APP.'functions'.DS);
define('MODELS',APP.'models'.DS);

define('TEMPLATES',ROOT.'templates'.DS);
define('INCLUDES',TEMPLATES.'includes'.DS);
define('MODULES',TEMPLATES.'modules'.DS);
define('VIEW',TEMPLATES.'view'.DS);

//8. Rutas de archivos o assets con base URL
define('ASSETS',URL.'assets/');
define('CSS',ASSETS.'css/');
define('FAVICON',ASSETS.'favicon/');
define('FONTS',ASSETS.'fonts/');
define('IMAGES',ASSETS.'images/');
define('JS',ASSETS.'js/');
define('PLUGINS',ASSETS.'plugins/');
define('UPLOADS',ASSETS.'uploads/');
