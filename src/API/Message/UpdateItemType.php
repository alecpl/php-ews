<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 */
class UpdateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $conflictResolution = null;

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitationsOrCancellations = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \garethp\ews\API\Type\ItemChangeType[]
     */
    protected $itemChanges = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getConflictResolution()
    {
        return $this->conflictResolution;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UpdateItemType
     */
    public function setConflictResolution($value)
    {
        $this->conflictResolution = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMessageDisposition()
    {
        return $this->messageDisposition;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UpdateItemType
     */
    public function setMessageDisposition($value)
    {
        $this->messageDisposition = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSendMeetingInvitationsOrCancellations()
    {
        return $this->sendMeetingInvitationsOrCancellations;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return UpdateItemType
     */
    public function setSendMeetingInvitationsOrCancellations($value)
    {
        $this->sendMeetingInvitationsOrCancellations = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getSavedItemFolderId()
    {
        return $this->savedItemFolderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\TargetFolderIdType
     * @return UpdateItemType
     */
    public function setSavedItemFolderId(\garethp\ews\API\Type\TargetFolderIdType $value)
    {
        $this->savedItemFolderId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ItemChangeType
     * @return UpdateItemType
     */
    public function addItemChanges(\garethp\ews\API\Type\ItemChangeType $value)
    {
        if ($this->itemChanges === null) {
                        $this->itemChanges = array();
        }

        if (!is_array($this->itemChanges)) {
            $this->itemChanges = array($this->itemChanges);
        }

        $this->itemChanges[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\ItemChangeType[]
     */
    public function getItemChanges()
    {
        return $this->itemChanges;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * \garethp\ews\API\Type\ItemChangeType[]|\garethp\ews\API\Type\ItemChangeType
     * @return UpdateItemType
     */
    public function setItemChanges(array|\garethp\ews\API\Type\ItemChangeType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->itemChanges = $value;
        return $this;
    }
}
