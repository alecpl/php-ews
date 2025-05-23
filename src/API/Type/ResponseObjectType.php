<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ResponseObjectType
 *
 * Abstract base type for reply objects
 * XSD Type: ResponseObjectType
 */
class ResponseObjectType extends ResponseObjectCoreType
{

    /**
     * The name of this reply object class as an English string. The client
     *  application is required to translate it if it's running in a different locale
     *
     * @var string
     */
    protected $objectName = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getObjectName()
    {
        return $this->objectName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ResponseObjectType
     */
    public function setObjectName($value)
    {
        $this->objectName = $value;
        return $this;
    }
}
