<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PushSubscriptionRequestType
 *
 *
 * XSD Type: PushSubscriptionRequestType
 */
class PushSubscriptionRequestType extends BaseSubscriptionRequestType
{

    /**
     * @var integer
     */
    protected $statusFrequency = null;

    /**
     * @var string
     */
    protected $uRL = null;

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getStatusFrequency()
    {
        return $this->statusFrequency;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return PushSubscriptionRequestType
     */
    public function setStatusFrequency($value)
    {
        $this->statusFrequency = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PushSubscriptionRequestType
     */
    public function setURL($value)
    {
        $this->uRL = $value;
        return $this;
    }
}
