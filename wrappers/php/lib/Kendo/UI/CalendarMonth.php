<?php

namespace Kendo\UI;

class CalendarMonth extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The template to be used for rendering the cells in "month" view, which are between the min/max range.
 By default, the widget renders the value of the corresponding day.
    * @param string $value
    * @return \Kendo\UI\CalendarMonth
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * The template to be used for rendering the cells in "week" column. By default, the widget renders the calculated week of the year. 
 The properties available in the data object are:These properties can be used in the template to make additional calculations.
    * @param string $value
    * @return \Kendo\UI\CalendarMonth
    */
    public function weekNumber($value) {
        return $this->setProperty('weekNumber', $value);
    }

    /**
    * The template to be used for rendering the cells in the "month" view, which are not in the min/max range.
 By default, the widget renders an empty string.
    * @param string $value
    * @return \Kendo\UI\CalendarMonth
    */
    public function _empty($value) {
        return $this->setProperty('empty', $value);
    }

//<< Properties
}

?>
