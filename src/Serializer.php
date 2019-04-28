<?php

require_once __DIR__ . '/Formats/FormatInterface.php';
require_once __DIR__ . '/Formats/JsonFormat.php';
require_once __DIR__ . '/Formats/YamlFormat.php';

class Serializer {
    private $formater;
    private $data;

    public function addFormater (FormatInterface $format){
        $this->formater = $format;
        return $this;
    }

    public function addObject ($data){
        $this->data = $data;
        return $this;
    }

    public function convert (){
        return $this->formater->convert($this->data);
    }
}