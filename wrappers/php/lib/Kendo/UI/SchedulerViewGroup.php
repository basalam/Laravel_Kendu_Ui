<?php

namespace Kendo\UI;

class SchedulerViewGroup extends \Kendo\SerializableObject {
//>> Properties

    /**
    * If set to true and the group.resources has some resources set the view is grouped by date.Overrides the date option of the scheduler.
    * @param boolean $value
    * @return \Kendo\UI\SchedulerViewGroup
    */
    public function date($value) {
        return $this->setProperty('date', $value);
    }

    /**
    * The orientation of the group headers. Supported values are horizontal or vertical. Note that the agenda view is always in vertical orientation.
    * @param string $value
    * @return \Kendo\UI\SchedulerViewGroup
    */
    public function orientation($value) {
        return $this->setProperty('orientation', $value);
    }

//<< Properties
}

?>
