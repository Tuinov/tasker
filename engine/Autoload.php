<?php

namespace app\engine;

class Autoload
{
    public function loadClass($className) {
        $fileName = str_replace(['app\\', '\\'],[DIR_ROOT.DS. '..' .DS, DS],$className) . '.php';

        if (file_exists($fileName)) {
            require $fileName;
        }


    }
}
