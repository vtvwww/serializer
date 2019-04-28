#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Vtvwww\Serializer;
use Vtvwww\JsonFormat;
use Vtvwww\YamlFormat;
use Vtvwww\XmlFormat;

class Test {
    public $email;
    public $name;

    public function __construct($email, $name)
    {
        $this->email = $email;
        $this->name = $name;
    }
}

$serializer = new Serializer();
$serializer->addObject (new Test('test@email.com', 'test'));

echo 'JsonFormat  ---------------------------------- ' . PHP_EOL;
echo $serializer
    ->addFormater(new JsonFormat())
    ->convert();

echo str_repeat(PHP_EOL, 3);

echo 'YamlFormat  ---------------------------------- ' . PHP_EOL;
echo $serializer
    ->addFormater(new YamlFormat())
    ->convert();

echo str_repeat(PHP_EOL, 3);

echo 'XmlFormat  ---------------------------------- ' . PHP_EOL;
echo $serializer
    ->addFormater(new XmlFormat())
    ->convert();

echo PHP_EOL;