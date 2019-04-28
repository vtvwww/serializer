<?php

namespace Vtvwww;

class YamlFormat extends AbstractFormat
{
    const TYPE = 'yaml';

    public function convert($data)
    {
        return serialize($this->prepare_data($data));
    }
}
