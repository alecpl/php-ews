<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ExcludesType
 *
 *
 * XSD Type: ExcludesType
 */
class ExcludesType extends SearchExpressionType
{

    /**
     * @var \garethp\ews\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \garethp\ews\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\ExcludesValueType
     */
    protected $bitmask = null;

    /**
     * @autogenerated This method is safe to replace
     * @param $value FieldURI
     * @return ExcludesType
     */
    public function addFieldURI(FieldURI $value)
    {
        if ($this->fieldURI === null) {
                        $this->fieldURI = array();
        }

        if (!is_array($this->fieldURI)) {
            $this->fieldURI = array($this->fieldURI);
        }

        $this->fieldURI[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FieldURI[]
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FieldURI[]|FieldURI
     * @return ExcludesType
     */
    public function setFieldURI(array|FieldURI $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->fieldURI = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IndexedFieldURI
     * @return ExcludesType
     */
    public function addIndexedFieldURI(IndexedFieldURI $value)
    {
        if ($this->indexedFieldURI === null) {
                        $this->indexedFieldURI = array();
        }

        if (!is_array($this->indexedFieldURI)) {
            $this->indexedFieldURI = array($this->indexedFieldURI);
        }

        $this->indexedFieldURI[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return IndexedFieldURI[]
     */
    public function getIndexedFieldURI()
    {
        return $this->indexedFieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IndexedFieldURI[]|IndexedFieldURI
     * @return ExcludesType
     */
    public function setIndexedFieldURI(array|IndexedFieldURI $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->indexedFieldURI = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedFieldURI
     * @return ExcludesType
     */
    public function addExtendedFieldURI(ExtendedFieldURI $value)
    {
        if ($this->extendedFieldURI === null) {
                        $this->extendedFieldURI = array();
        }

        if (!is_array($this->extendedFieldURI)) {
            $this->extendedFieldURI = array($this->extendedFieldURI);
        }

        $this->extendedFieldURI[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ExtendedFieldURI[]
     */
    public function getExtendedFieldURI()
    {
        return $this->extendedFieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedFieldURI[]|ExtendedFieldURI
     * @return ExcludesType
     */
    public function setExtendedFieldURI(array|ExtendedFieldURI $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->extendedFieldURI = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ExcludesValueType
     */
    public function getBitmask()
    {
        return $this->bitmask;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExcludesValueType
     * @return ExcludesType
     */
    public function setBitmask(ExcludesValueType $value)
    {
        $this->bitmask = $value;
        return $this;
    }
}
