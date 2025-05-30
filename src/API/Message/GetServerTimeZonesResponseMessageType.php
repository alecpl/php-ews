<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetServerTimeZonesResponseMessageType
 *
 *
 * XSD Type: GetServerTimeZonesResponseMessageType
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\TimeZoneDefinitionType[]
     */
    protected $timeZoneDefinitions = null;

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\TimeZoneDefinitionType
     * @return GetServerTimeZonesResponseMessageType
     */
    public function addTimeZoneDefinitions(\garethp\ews\API\Type\TimeZoneDefinitionType $value)
    {
        if ($this->timeZoneDefinitions === null) {
                        $this->timeZoneDefinitions = array();
        }

        if (!is_array($this->timeZoneDefinitions)) {
            $this->timeZoneDefinitions = array($this->timeZoneDefinitions);
        }

        $this->timeZoneDefinitions[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\TimeZoneDefinitionType[]
     */
    public function getTimeZoneDefinitions()
    {
        return $this->timeZoneDefinitions;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * \garethp\ews\API\Type\TimeZoneDefinitionType[]|\garethp\ews\API\Type\TimeZoneDefinitionType
     * @return GetServerTimeZonesResponseMessageType
     */
    public function setTimeZoneDefinitions(array|\garethp\ews\API\Type\TimeZoneDefinitionType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->timeZoneDefinitions = $value;
        return $this;
    }
}
