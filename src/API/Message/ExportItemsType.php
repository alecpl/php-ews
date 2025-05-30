<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExportItemsType
 *
 *
 * XSD Type: ExportItemsType
 */
class ExportItemsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType[]
     */
    protected $itemIds = null;

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ItemIdType
     * @return ExportItemsType
     */
    public function addItemIds(\garethp\ews\API\Type\ItemIdType $value)
    {
        if ($this->itemIds === null) {
                        $this->itemIds = array();
        }

        if (!is_array($this->itemIds)) {
            $this->itemIds = array($this->itemIds);
        }

        $this->itemIds[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\ItemIdType[]
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * \garethp\ews\API\Type\ItemIdType[]|\garethp\ews\API\Type\ItemIdType
     * @return ExportItemsType
     */
    public function setItemIds(array|\garethp\ews\API\Type\ItemIdType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->itemIds = $value;
        return $this;
    }
}
