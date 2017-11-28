<?php

namespace Kendo\UI;

class DatePickerMonth extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The template to be used for rendering the cells in "month" view, which are between the min/max range.
    * @param string $value
    * @return \Kendo\UI\DatePickerMonth
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * The template to be used for rendering the cells in "week" column. By default, the widget renders the calculated week of the year. 
 The properties available in the data object are:These properties can be used in the template to make additional calculations.
    * @param string $value
    * @return \Kendo\UI\DatePickerMonth
    */
    public function weekNumber($value) {
        return $this->setProperty('weekNumber', $value);
    }

    /**
    * The template used for rendering cells in the "month" view, which are outside the min/max range.
    * @param string $value
    * @return \Kendo\UI\DatePickerMonth
    */
    public function _empty($value) {
        return $this->setProperty('empty', $value);
    }

//<< Properties
}

?>
