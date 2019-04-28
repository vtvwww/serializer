<?php

namespace Vtvwww;

use \Symfony\Component\Yaml\Yaml;

class YamlFormat extends AbstractFormat
{
    const TYPE = 'yaml';

    public function convert($data)
    {
        return Yaml::dump($this->prepare_data($data));
    }
}
