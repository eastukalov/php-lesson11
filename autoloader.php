<?php
    function loadFromClasses($aClassName)
    {
        $aClassFilePath = __DIR__  . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR
            . str_replace( '\\', DIRECTORY_SEPARATOR, $aClassName) . '.class.php';

        if (file_exists($aClassFilePath)) {
            include $aClassFilePath;
        }
    }

    function loadFromInterfaces($aClassName)
    {
        $aClassFilePath = __DIR__  . DIRECTORY_SEPARATOR  . 'interfaces'  . DIRECTORY_SEPARATOR
            . str_replace( '\\', DIRECTORY_SEPARATOR, $aClassName) . '.interface.php';

        if (file_exists($aClassFilePath)) {
            include $aClassFilePath;
        }
    }

    function loadFromSubClasses($aClassName)
    {
        $aClassFilePath = __DIR__  . DIRECTORY_SEPARATOR . 'classes' .  DIRECTORY_SEPARATOR . 'sub_classes' . DIRECTORY_SEPARATOR
            . str_replace( '\\', DIRECTORY_SEPARATOR, $aClassName) . '.class.php';

        if (file_exists($aClassFilePath)) {
            include $aClassFilePath;
        }
    }

    spl_autoload_register('loadFromClasses');
    spl_autoload_register('loadFromSubClasses');
    spl_autoload_register('loadFromInterfaces');
