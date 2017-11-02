<?php

spl_autoload_register(
    function ($className) {
        $classPath = explode('\\', $className);
        if ($classPath[0] !== 'Davaxi' || $className[1] !== 'ServerSentEvents') {
            return;
        }
        // Drop 'Davaxi', and maximum file path depth in this project is 1
        $classPath = array_slice($classPath, 2, 1);
        $filePath = __DIR__ . '/' . implode('/', $classPath) . '.php';
        if (file_exists($filePath)) {
            require_once($filePath);
        }
    }
);
