<?php

/* 
Plugin Name: database
Plugin URL:
Description: hola
Version: 0.0.0.1
Requires at least:5.6.1
Requires PHP:7.4.14
Author: Benjamin Maldonado
Authot URL:
Licence:
Licence URL:
*/

if(!defined('ABSPATH')) die;

define("DATABASE_DIR",__FILE__);
define("DATABASE_PLUGIN_DIR",plugin_dir_path(DATABASE_DIR));
// define("DATABASE_PLUGIN_URL",plugin_dir_url(TEST_DIR));
// define("DATABASE_PLUGIN_NAME","DATABASE");
// define("DATABASE_CANTIDAD_ELEMENTOS",12);

require_once DATABASE_PLUGIN_DIR ."/clases/principal.php";

register_activation_hook(DATABASE_DIR,array("principal","activar"));
register_deactivation_hook(DATABASE_DIR,array("principal","desactivar"));


?>