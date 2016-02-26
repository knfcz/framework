<?php
/* Dev mode*/
define('MODE_DEV', TRUE);

/* Database */
define('BDD_HOST', 'localhost');
define('BDD_USER', 'root');
define('BDD_PASS', 'root');
define('BDD_NAME', 'Planet_Catalunya');

/* Info */
define('APP_NAME', "PlanetCatalunya");

/* URI */
define('URL_SERVOR', "http://$_SERVER[HTTP_HOST]");
define('URL_FOLDER', URL_SERVOR.'/PlanetCatalunya');
define('URL_PAGES', URL_FOLDER."/Pages");
define('URL_RESSOURCES', URL_PAGES."/Ressources");
define('URL_INCLUDES', URL_PAGES."/Includes");
define('URL_CLASS', URL_FOLDER."/Class");

define('URI_FOLDER', dirname(dirname(dirname(__FILE__))));
define('URI_CLASS', URI_FOLDER.'/Class');
define('URI_MOD', URI_FOLDER.'/Modules');
define('URI_CONTROL', URI_FOLDER.'/Control');

/* ERROR CODE */

define('ERROR_CODE_NOT_ALLOWED', 0);
define('ERROR_CODE_NOT_ALLOWED_SELLER', 1);
define('ERROR_CODE_DOES_N0T_EXIST_SELLER', 2);
define('ERROR_CODE_MISSING_PARAMETERS', 3);
define('ERROR_CODE_DOCUMENT_MISSING', 4);
define('ERROR_CODE_SUPERADMIN', 5);
define('ERROR_CODE_ERROR_APPENED', 6);

/* SUCCESS CODE */
define('SUCCESS_CODE_DOCUMENT_CREATED', 0);
define('SUCCESS_CODE_DOCUMENT_UPDATED', 1);
define('SUCCESS_CODE_SELLER_CREATED', 2);
define('SUCCESS_CODE_OBSERVER_CREATED', 3);
define('SUCCESS_CODE_UPDATED_INFO', 4);
define ('SUCCESS_CODE_SENDED_MAIL', 5);
define ('SUCCESS_CODE_USER_CREATED', 6);
define ('SUCCESS_CODE_USER_CREATED_WAIT', 7);
?>