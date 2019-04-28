<?php

require_once __DIR__ . '/FormatInterface.php';

abstract class AbstractFormat implements FormatInterface
{
    public function prepare_data ($data){
        return [
            'email' => $data->email,
            'name' => $data->name,
        ];
    }

    abstract public function convert($data);
}
