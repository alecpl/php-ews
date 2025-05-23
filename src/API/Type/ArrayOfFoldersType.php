<?php

namespace garethp\ews\API\Type;

use Countable;
use ArrayAccess;
use IteratorAggregate;
use garethp\ews\API\Type;

/**
 * Class representing ArrayOfFoldersType
 *
 *
 * XSD Type: ArrayOfFoldersType
 */
class ArrayOfFoldersType extends Type implements Countable, ArrayAccess, IteratorAggregate
{

    protected $allFolders = null;

    /**
     * @var \garethp\ews\API\Type\FolderType[]
     */
    protected $folder = null;

    /**
     * @var \garethp\ews\API\Type\CalendarFolderType[]
     */
    protected $calendarFolder = null;

    /**
     * @var \garethp\ews\API\Type\ContactsFolderType[]
     */
    protected $contactsFolder = null;

    /**
     * @var \garethp\ews\API\Type\SearchFolderType[]
     */
    protected $searchFolder = null;

    /**
     * @var \garethp\ews\API\Type\TasksFolderType[]
     */
    protected $tasksFolder = null;

    public function getAllFolders()
    {
        if ($this->allFolders !== null) {
            return $this->allFolders;
        }

        $folders = array();
        if ($this->folder !== null) {
            $folders = array_merge($folders, (is_array($this->folder) ? $this->folder : array($this->folder)));
        }

        if ($this->calendarFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->calendarFolder) ? $this->calendarFolder : array($this->calendarFolder))
            );
        }

        if ($this->contactsFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->contactsFolder) ? $this->contactsFolder : array($this->contactsFolder))
            );
        }

        if ($this->searchFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->searchFolder) ? $this->searchFolder : array($this->searchFolder))
            );
        }

        if ($this->tasksFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->tasksFolder) ? $this->tasksFolder : array($this->tasksFolder))
            );
        }

        $this->allFolders = $folders;
        return $this->allFolders;
    }

    public function count()
    {
        return count($this->getAllFolders());
    }

    public function offsetExists($offset)
    {
        return isset($this->getAllFolders()[$offset]);
    }

    public function offsetGet($offset)
    {
        $this->getAllFolders();
        return isset($this->allFolders[$offset]) ? $this->allFolders[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        $this->getAllFolders();

        if (is_null($offset)) {
            $this->allFolders[] = $value;
        } else {
            $this->allFolders[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        $this->getAllFolders();
        unset($this->allFolders[$offset]);
    }

    public function getIterator()
    {
        $this->getAllFolders();
        return new \ArrayIterator($this->allFolders);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderType
     * @return ArrayOfFoldersType
     */
    public function addFolder(FolderType $value)
    {
        if ($this->folder === null) {
                        $this->folder = array();
        }

        if (!is_array($this->folder)) {
            $this->folder = array($this->folder);
        }

        $this->folder[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderType[]
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderType[]|FolderType
     * @return ArrayOfFoldersType
     */
    public function setFolder(array|FolderType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->folder = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarFolderType
     * @return ArrayOfFoldersType
     */
    public function addCalendarFolder(CalendarFolderType $value)
    {
        if ($this->calendarFolder === null) {
                        $this->calendarFolder = array();
        }

        if (!is_array($this->calendarFolder)) {
            $this->calendarFolder = array($this->calendarFolder);
        }

        $this->calendarFolder[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return CalendarFolderType[]
     */
    public function getCalendarFolder()
    {
        return $this->calendarFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarFolderType[]|CalendarFolderType
     * @return ArrayOfFoldersType
     */
    public function setCalendarFolder(array|CalendarFolderType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->calendarFolder = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactsFolderType
     * @return ArrayOfFoldersType
     */
    public function addContactsFolder(ContactsFolderType $value)
    {
        if ($this->contactsFolder === null) {
                        $this->contactsFolder = array();
        }

        if (!is_array($this->contactsFolder)) {
            $this->contactsFolder = array($this->contactsFolder);
        }

        $this->contactsFolder[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ContactsFolderType[]
     */
    public function getContactsFolder()
    {
        return $this->contactsFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactsFolderType[]|ContactsFolderType
     * @return ArrayOfFoldersType
     */
    public function setContactsFolder(array|ContactsFolderType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->contactsFolder = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SearchFolderType
     * @return ArrayOfFoldersType
     */
    public function addSearchFolder(SearchFolderType $value)
    {
        if ($this->searchFolder === null) {
                        $this->searchFolder = array();
        }

        if (!is_array($this->searchFolder)) {
            $this->searchFolder = array($this->searchFolder);
        }

        $this->searchFolder[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SearchFolderType[]
     */
    public function getSearchFolder()
    {
        return $this->searchFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SearchFolderType[]|SearchFolderType
     * @return ArrayOfFoldersType
     */
    public function setSearchFolder(array|SearchFolderType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->searchFolder = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TasksFolderType
     * @return ArrayOfFoldersType
     */
    public function addTasksFolder(TasksFolderType $value)
    {
        if ($this->tasksFolder === null) {
                        $this->tasksFolder = array();
        }

        if (!is_array($this->tasksFolder)) {
            $this->tasksFolder = array($this->tasksFolder);
        }

        $this->tasksFolder[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return TasksFolderType[]
     */
    public function getTasksFolder()
    {
        return $this->tasksFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TasksFolderType[]|TasksFolderType
     * @return ArrayOfFoldersType
     */
    public function setTasksFolder(array|TasksFolderType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->tasksFolder = $value;
        return $this;
    }
}
