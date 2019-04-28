<?php

require_once __DIR__ . '/AbstractFormat.php';

class YamlFormat extends AbstractFormat
{
    const TYPE = 'yaml';

    public function convert($data)
    {
        return serialize($this->prepare_data($data));
    }
}
