<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ResolveNamesType
 *
 *
 * XSD Type: ResolveNamesType
 */
class ResolveNamesType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $returnFullContactData = null;

    /**
     * @var string
     */
    protected $searchScope = null;

    /**
     * @var string
     */
    protected $contactDataShape = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    /**
     * @var string
     */
    protected $unresolvedEntry = null;

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isReturnFullContactData()
    {
        return ((bool) $this->returnFullContactData);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getReturnFullContactData()
    {
        return $this->returnFullContactData;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ResolveNamesType
     */
    public function setReturnFullContactData($value)
    {
        $this->returnFullContactData = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSearchScope()
    {
        return $this->searchScope;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ResolveNamesType
     */
    public function setSearchScope($value)
    {
        $this->searchScope = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getContactDataShape()
    {
        return $this->contactDataShape;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ResolveNamesType
     */
    public function setContactDataShape($value)
    {
        $this->contactDataShape = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getParentFolderIds()
    {
        return $this->parentFolderIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     * @return ResolveNamesType
     */
    public function setParentFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $value)
    {
        $this->parentFolderIds = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getUnresolvedEntry()
    {
        return $this->unresolvedEntry;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ResolveNamesType
     */
    public function setUnresolvedEntry($value)
    {
        $this->unresolvedEntry = $value;
        return $this;
    }
}
