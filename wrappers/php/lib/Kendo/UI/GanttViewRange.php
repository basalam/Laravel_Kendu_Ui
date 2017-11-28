<?php

namespace Kendo\UI;

class GanttViewRange extends \Kendo\SerializableObject {
//>> Properties

    /**
    * If set to some date the timeline of the view will start from this date.Overrides the range.start option of the gantt.
    * @param date $value
    * @return \Kendo\UI\GanttViewRange
    */
    public function start($value) {
        return $this->setProperty('start', $value);
    }

    /**
    * If set to some date the timeline of the view will end to this date.Overrides the range.end option of the gantt.
    * @param date $value
    * @return \Kendo\UI\GanttViewRange
    */
    public function end($value) {
        return $this->setProperty('end', $value);
    }

//<< Properties
}

?>
