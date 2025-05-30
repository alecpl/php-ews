<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfAlternateIdsType
 *
 * A non-empty array of alternate Ids.
 * XSD Type: NonEmptyArrayOfAlternateIdsType
 */
class NonEmptyArrayOfAlternateIdsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\AlternateIdType[]
     */
    protected $alternateId = null;

    /**
     * @var \garethp\ews\API\Type\AlternatePublicFolderIdType[]
     */
    protected $alternatePublicFolderId = null;

    /**
     * @var \garethp\ews\API\Type\AlternatePublicFolderItemIdType[]
     */
    protected $alternatePublicFolderItemId = null;

    /**
     * @autogenerated This method is safe to replace
     * @param $value AlternateIdType
     * @return NonEmptyArrayOfAlternateIdsType
     */
    public function addAlternateId(AlternateIdType $value)
    {
        if ($this->alternateId === null) {
                        $this->alternateId = array();
        }

        if (!is_array($this->alternateId)) {
            $this->alternateId = array($this->alternateId);
        }

        $this->alternateId[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AlternateIdType[]
     */
    public function getAlternateId()
    {
        return $this->alternateId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AlternateIdType[]|AlternateIdType
     * @return NonEmptyArrayOfAlternateIdsType
     */
    public function setAlternateId(array|AlternateIdType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->alternateId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AlternatePublicFolderIdType
     * @return NonEmptyArrayOfAlternateIdsType
     */
    public function addAlternatePublicFolderId(AlternatePublicFolderIdType $value)
    {
        if ($this->alternatePublicFolderId === null) {
                        $this->alternatePublicFolderId = array();
        }

        if (!is_array($this->alternatePublicFolderId)) {
            $this->alternatePublicFolderId = array($this->alternatePublicFolderId);
        }

        $this->alternatePublicFolderId[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AlternatePublicFolderIdType[]
     */
    public function getAlternatePublicFolderId()
    {
        return $this->alternatePublicFolderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AlternatePublicFolderIdType[]|AlternatePublicFolderIdType
     * @return NonEmptyArrayOfAlternateIdsType
     */
    public function setAlternatePublicFolderId(array|AlternatePublicFolderIdType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->alternatePublicFolderId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AlternatePublicFolderItemIdType
     * @return NonEmptyArrayOfAlternateIdsType
     */
    public function addAlternatePublicFolderItemId(AlternatePublicFolderItemIdType $value)
    {
        if ($this->alternatePublicFolderItemId === null) {
                        $this->alternatePublicFolderItemId = array();
        }

        if (!is_array($this->alternatePublicFolderItemId)) {
            $this->alternatePublicFolderItemId = array($this->alternatePublicFolderItemId);
        }

        $this->alternatePublicFolderItemId[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AlternatePublicFolderItemIdType[]
     */
    public function getAlternatePublicFolderItemId()
    {
        return $this->alternatePublicFolderItemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AlternatePublicFolderItemIdType[]|AlternatePublicFolderItemIdType
     * @return NonEmptyArrayOfAlternateIdsType
     */
    public function setAlternatePublicFolderItemId(array|AlternatePublicFolderItemIdType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->alternatePublicFolderItemId = $value;
        return $this;
    }
}
