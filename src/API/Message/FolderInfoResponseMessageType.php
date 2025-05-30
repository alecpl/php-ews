<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FolderInfoResponseMessageType
 *
 *
 * XSD Type: FolderInfoResponseMessageType
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\ArrayOfFoldersType
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ArrayOfFoldersType
     * @return FolderInfoResponseMessageType
     */
    public function setFolders(\garethp\ews\API\Type\ArrayOfFoldersType $value)
    {
        $this->folders = $value;
        return $this;
    }
}
