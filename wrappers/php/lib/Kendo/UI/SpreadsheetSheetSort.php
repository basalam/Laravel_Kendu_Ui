<?php

namespace Kendo\UI;

class SpreadsheetSheetSort extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Adds SpreadsheetSheetSortColumn to the SpreadsheetSheetSort.
    * @param \Kendo\UI\SpreadsheetSheetSortColumn|array,... $value one or more SpreadsheetSheetSortColumn to add.
    * @return \Kendo\UI\SpreadsheetSheetSort
    */
    public function addColumn($value) {
        return $this->add('columns', func_get_args());
    }

    /**
    * The sorted range, e.g. "A1:D5".
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheetSort
    */
    public function ref($value) {
        return $this->setProperty('ref', $value);
    }

//<< Properties
}

?>
