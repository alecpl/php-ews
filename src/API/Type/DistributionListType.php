<?php

namespace garethp\ews\API\Type;

/**
 * Class representing DistributionListType
 *
 *
 * XSD Type: DistributionListType
 */
class DistributionListType extends ItemType
{

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var string
     */
    protected $fileAs = null;

    /**
     * @var string
     */
    protected $contactSource = null;

    /**
     * @var \garethp\ews\API\Type\MemberType[]
     */
    protected $members = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return DistributionListType
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getFileAs()
    {
        return $this->fileAs;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return DistributionListType
     */
    public function setFileAs($value)
    {
        $this->fileAs = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getContactSource()
    {
        return $this->contactSource;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return DistributionListType
     */
    public function setContactSource($value)
    {
        $this->contactSource = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MemberType
     * @return DistributionListType
     */
    public function addMembers(MemberType $value)
    {
        if ($this->members === null) {
                        $this->members = array();
        }

        if (!is_array($this->members)) {
            $this->members = array($this->members);
        }

        $this->members[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MemberType[]
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MemberType[]|MemberType
     * @return DistributionListType
     */
    public function setMembers(array|MemberType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->members = $value;
        return $this;
    }
}
