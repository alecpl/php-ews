<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MimeContentType
 *
 *
 * XSD Type: MimeContentType
 */
class MimeContentType extends Type
{

    /**
     * @var string
     */
    protected $characterSet = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getCharacterSet()
    {
        return $this->characterSet;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return MimeContentType
     */
    public function setCharacterSet($value)
    {
        $this->characterSet = $value;
        return $this;
    }
}
