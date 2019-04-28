<?php

namespace Vtvwww;

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