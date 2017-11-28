<?php

namespace Kendo\UI;

class SpreadsheetSheetSortColumn extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Indicates if the data in the cell should be sorted ascending (true) or descending or (false).
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetSheetSortColumn
    */
    public function ascending($value) {
        return $this->setProperty('ascending', $value);
    }

    /**
    * The index of the column within the sheet.For example, column C will have index 2.
    * @param float $value
    * @return \Kendo\UI\SpreadsheetSheetSortColumn
    */
    public function index($value) {
        return $this->setProperty('index', $value);
    }

//<< Properties
}

?>
