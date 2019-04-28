<?php

namespace Vtvwww;

use Spatie\ArrayToXml\ArrayToXml;

class XmlFormat extends AbstractFormat
{
    const TYPE = 'xml';

    public function convert($data)
    {
        return ArrayToXml::convert($this->prepare_data($data));
    }
}
