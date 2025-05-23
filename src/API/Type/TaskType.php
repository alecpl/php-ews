<?php

namespace garethp\ews\API\Type;

/**
 * Class representing TaskType
 *
 *
 * XSD Type: TaskType
 */
class TaskType extends ItemType
{

    /**
     * @var integer
     */
    protected $actualWork = null;

    /**
     * @var \DateTime
     */
    protected $assignedTime = null;

    /**
     * @var string
     */
    protected $billingInformation = null;

    /**
     * @var integer
     */
    protected $changeCount = null;

    /**
     * @var string[]
     */
    protected $companies = null;

    /**
     * @var \DateTime
     */
    protected $completeDate = null;

    /**
     * @var string[]
     */
    protected $contacts = null;

    /**
     * @var string
     */
    protected $delegationState = null;

    /**
     * @var string
     */
    protected $delegator = null;

    /**
     * @var \DateTime
     */
    protected $dueDate = null;

    /**
     * @var integer
     */
    protected $isAssignmentEditable = null;

    /**
     * @var boolean
     */
    protected $isComplete = null;

    /**
     * @var boolean
     */
    protected $isRecurring = null;

    /**
     * @var boolean
     */
    protected $isTeamTask = null;

    /**
     * @var string
     */
    protected $mileage = null;

    /**
     * @var string
     */
    protected $owner = null;

    /**
     * @var float
     */
    protected $percentComplete = null;

    /**
     * @var \garethp\ews\API\Type\TaskRecurrenceType
     */
    protected $recurrence = null;

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    /**
     * @var string
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $statusDescription = null;

    /**
     * @var integer
     */
    protected $totalWork = null;

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getActualWork()
    {
        return $this->actualWork;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return TaskType
     */
    public function setActualWork($value)
    {
        $this->actualWork = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getAssignedTime()
    {
        return $this->assignedTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return TaskType
     */
    public function setAssignedTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->assignedTime = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getBillingInformation()
    {
        return $this->billingInformation;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function setBillingInformation($value)
    {
        $this->billingInformation = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getChangeCount()
    {
        return $this->changeCount;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return TaskType
     */
    public function setChangeCount($value)
    {
        $this->changeCount = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function addCompanies($value)
    {
        if ($this->companies === null) {
                        $this->companies = array();
        }

        if (!is_array($this->companies)) {
            $this->companies = array($this->companies);
        }

        $this->companies[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return TaskType
     */
    public function setCompanies(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->companies = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getCompleteDate()
    {
        return $this->completeDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return TaskType
     */
    public function setCompleteDate(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->completeDate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function addContacts($value)
    {
        if ($this->contacts === null) {
                        $this->contacts = array();
        }

        if (!is_array($this->contacts)) {
            $this->contacts = array($this->contacts);
        }

        $this->contacts[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return TaskType
     */
    public function setContacts(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->contacts = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDelegationState()
    {
        return $this->delegationState;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function setDelegationState($value)
    {
        $this->delegationState = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDelegator()
    {
        return $this->delegator;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function setDelegator($value)
    {
        $this->delegator = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return TaskType
     */
    public function setDueDate(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->dueDate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getIsAssignmentEditable()
    {
        return $this->isAssignmentEditable;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return TaskType
     */
    public function setIsAssignmentEditable($value)
    {
        $this->isAssignmentEditable = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isComplete()
    {
        return ((bool) $this->isComplete);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return TaskType
     */
    public function setIsComplete($value)
    {
        $this->isComplete = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isRecurring()
    {
        return ((bool) $this->isRecurring);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return TaskType
     */
    public function setIsRecurring($value)
    {
        $this->isRecurring = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isTeamTask()
    {
        return ((bool) $this->isTeamTask);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsTeamTask()
    {
        return $this->isTeamTask;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return TaskType
     */
    public function setIsTeamTask($value)
    {
        $this->isTeamTask = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function setMileage($value)
    {
        $this->mileage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function setOwner($value)
    {
        $this->owner = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return float
     */
    public function getPercentComplete()
    {
        return $this->percentComplete;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value float
     * @return TaskType
     */
    public function setPercentComplete($value)
    {
        $this->percentComplete = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return TaskRecurrenceType
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TaskRecurrenceType
     * @return TaskType
     */
    public function setRecurrence(TaskRecurrenceType $value)
    {
        $this->recurrence = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return TaskType
     */
    public function setStartDate(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->startDate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function setStatus($value)
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TaskType
     */
    public function setStatusDescription($value)
    {
        $this->statusDescription = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getTotalWork()
    {
        return $this->totalWork;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return TaskType
     */
    public function setTotalWork($value)
    {
        $this->totalWork = $value;
        return $this;
    }
}
