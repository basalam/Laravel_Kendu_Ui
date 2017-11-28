<?php

namespace Kendo\UI;

class SpreadsheetSheetFilter extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Adds SpreadsheetSheetFilterColumn to the SpreadsheetSheetFilter.
    * @param \Kendo\UI\SpreadsheetSheetFilterColumn|array,... $value one or more SpreadsheetSheetFilterColumn to add.
    * @return \Kendo\UI\SpreadsheetSheetFilter
    */
    public function addColumn($value) {
        return $this->add('columns', func_get_args());
    }

    /**
    * The active range for the filter, e.g. "B1:D8".
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheetFilter
    */
    public function ref($value) {
        return $this->setProperty('ref', $value);
    }

//<< Properties
}

?>
