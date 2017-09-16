<?php

    function loadFromClassesInterfaces($aClassName)
    {
        $aClassFilePath = __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'package' . DIRECTORY_SEPARATOR
            . str_replace( '\\', DIRECTORY_SEPARATOR, $aClassName) . '.class.php';

        if (file_exists($aClassFilePath)) {
            include $aClassFilePath;
        }
    }
function loadFromClasses($aClassName)
{
    $aClassFilePath = __DIR__ . DIRECTORY_SEPARATOR
        . str_replace( '\\', DIRECTORY_SEPARATOR, $aClassName) . '.class.php';

    if (file_exists($aClassFilePath)) {
        include $aClassFilePath;
    }
}

    spl_autoload_register('loadFromClasses');
    spl_autoload_register('loadFromClassesInterfaces');
