<?php

namespace Kendo\UI;

class GanttRange extends \Kendo\SerializableObject {
//>> Properties

    /**
    * If set to some date the timeline of all views will start from this date.
    * @param date $value
    * @return \Kendo\UI\GanttRange
    */
    public function start($value) {
        return $this->setProperty('start', $value);
    }

    /**
    * If set to some date the timeline of all views will end to this date.
    * @param date $value
    * @return \Kendo\UI\GanttRange
    */
    public function end($value) {
        return $this->setProperty('end', $value);
    }

//<< Properties
}

?>
