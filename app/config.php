<?php

//-------------------------------------------------------
// Redefinir as constantes deste bloco!
//-------------------------------------------------------

define("WEBROOT", 'http://pap.loc/tarefas' . DIRECTORY_SEPARATOR);

// tag Title
define('PRJ_TITLE', 'Gest. Tarefas');

// consts para acesso a BD usadas em BDService
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // 'root' on ubuntu // 'root' on XAMPP // MAC: gestpt_user
define('DB_PASS', 'root'); // 'root' on ubuntu // ''     on XAMPP //      gestpt_pass
define('DB_NAME', 'smm_tarefas');

define('USER_CLASS', 'Utilizador');
define('USER_TABLE', 'utilizador');

//-------------------------------------------------------
//-------------------------------------------------------


/**
 * Outras constantes já definidas:
 * - BASE_PATH
 * - APP         :: pasta /app
 * - PUBLIC_PATH :: pasta /public
 *
 * - APP_TPLS        :: app/templates
 * - APP_CONTROLLERS :: app/Controllers
 * - APP_MODELS      :: app/Models
 * - APP_ASSETS      :: /assets
 * - APP_FOTOS       :: /assets/imgs/fotos
 */

define("PUBLIC_URL", WEBROOT . 'public' . DIRECTORY_SEPARATOR);
define("ASSETS_URL", WEBROOT . 'public/assets' . DIRECTORY_SEPARATOR);

define('APP_TPLS', realpath(APP . "templates") . DIRECTORY_SEPARATOR);
define('APP_CONTROLLERS', realpath(APP . "Controllers") . DIRECTORY_SEPARATOR);
define('APP_MODELS', realpath(APP . "Models") . DIRECTORY_SEPARATOR);
define('APP_ASSETS', realpath(PUBLIC_PATH . "assets") . DIRECTORY_SEPARATOR);
define('APP_FOTOS', realpath(PUBLIC_PATH . "assets/imgs/fotos") . DIRECTORY_SEPARATOR);
