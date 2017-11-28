<?php

namespace Kendo\UI;

class DateTimePickerMonth extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Template to be used for rendering the cells in the calendar "month" view, which are in range.
    * @param string $value
    * @return \Kendo\UI\DateTimePickerMonth
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * The template to be used for rendering the cells in "week" column. By default, the widget renders the calculated week of the year. 
 The properties available in the data object are:These properties can be used in the template to make additional calculations.
    * @param string $value
    * @return \Kendo\UI\DateTimePickerMonth
    */
    public function weekNumber($value) {
        return $this->setProperty('weekNumber', $value);
    }

    /**
    * The template used for rendering cells in the calendar "month" view, which are outside the min/max range.
    * @param string $value
    * @return \Kendo\UI\DateTimePickerMonth
    */
    public function _empty($value) {
        return $this->setProperty('empty', $value);
    }

//<< Properties
}

?>
