<?php
    // Load Config
    require_once 'config/config.php';

    // Load Libraries
    // require_once 'libraries/Core.php';
    // require_once 'libraries/Controller.php';
    // require_once 'libraries/Database.php';

    // Load helpers
    require_once 'helpers/url_helper.php';
    require_once 'helpers/session_helper.php';

    // Autoload Core Libraries
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className .'.php';
    });