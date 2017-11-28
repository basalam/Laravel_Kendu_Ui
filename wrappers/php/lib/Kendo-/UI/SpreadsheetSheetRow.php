<?php

namespace Kendo\UI;

class SpreadsheetSheetRow extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Adds SpreadsheetSheetRowCell to the SpreadsheetSheetRow.
    * @param \Kendo\UI\SpreadsheetSheetRowCell|array,... $value one or more SpreadsheetSheetRowCell to add.
    * @return \Kendo\UI\SpreadsheetSheetRow
    */
    public function addCell($value) {
        return $this->add('cells', func_get_args());
    }

    /**
    * The row height in pixels. Defaults to rowHeight.
    * @param float $value
    * @return \Kendo\UI\SpreadsheetSheetRow
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * The absolute row index. Required to ensure correct positioning.
    * @param float $value
    * @return \Kendo\UI\SpreadsheetSheetRow
    */
    public function index($value) {
        return $this->setProperty('index', $value);
    }

//<< Properties
}

?>
