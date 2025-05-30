<?php

namespace garethp\ews\API\Type;

/**
 * Class representing DistinguishedGroupByType
 *
 * Allows consumers to access standard groupings for FindItem queries. This is in
 *  contrast to the arbitrary (custom) groupings available via the t:GroupByType
 * XSD Type: DistinguishedGroupByType
 */
class DistinguishedGroupByType extends BaseGroupByType
{

    /**
     * @var string
     */
    protected $standardGroupBy = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getStandardGroupBy()
    {
        return $this->standardGroupBy;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return DistinguishedGroupByType
     */
    public function setStandardGroupBy($value)
    {
        $this->standardGroupBy = $value;
        return $this;
    }
}
