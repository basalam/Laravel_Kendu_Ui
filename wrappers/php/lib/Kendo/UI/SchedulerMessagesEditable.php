<?php

namespace Kendo\UI;

class SchedulerMessagesEditable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The text similar to "Are you sure you want to delete this event?" displayed in scheduler.
    * @param string $value
    * @return \Kendo\UI\SchedulerMessagesEditable
    */
    public function confirmation($value) {
        return $this->setProperty('confirmation', $value);
    }

//<< Properties
}

?>
