<?php

spl_autoload_register(function ($class) {
    $prefix = "Source\\";
    $baseDir = __DIR__ . "/";
    $len = strlen($prefix);

    vardump($len);

    // so faz se a classe estiver dentro da pasta source
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";

    if (file_exists($file)) {
        require $file;
    }
});