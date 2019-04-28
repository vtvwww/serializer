<?php

require_once __DIR__ . '/AbstractFormat.php';

class JsonFormat extends AbstractFormat
{
    const TYPE = 'json';

    public function convert($data)
    {
        return json_encode($this->prepare_data($data), JSON_PRETTY_PRINT);
    }
}
