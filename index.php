<?php

if ( file_exists( 'vendor/autoload.php' ) )
     require_once 'vendor/autoload.php';

$loader = new Requisite\SPLAutoLoader;
$loader->addRule(
     new Requisite\Rule\NamespaceDirectoryMapper(
          __DIR__ . '/src'
    )
);

$man = new Man;