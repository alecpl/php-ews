<?php

namespace garethp\ews\API\Type;

/**
 * Class representing IntervalRecurrencePatternBaseType
 *
 *
 * XSD Type: IntervalRecurrencePatternBaseType
 */
class IntervalRecurrencePatternBaseType extends RecurrencePatternBaseType
{

    /**
     * @var integer
     */
    protected $interval = null;

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return IntervalRecurrencePatternBaseType
     */
    public function setInterval($value)
    {
        $this->interval = $value;
        return $this;
    }
}
