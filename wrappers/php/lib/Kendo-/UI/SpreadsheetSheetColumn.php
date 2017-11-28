<?php

namespace Kendo\UI;

class SpreadsheetSheetColumn extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The zero-based index of the column. Required to ensure correct positioning.
    * @param float $value
    * @return \Kendo\UI\SpreadsheetSheetColumn
    */
    public function index($value) {
        return $this->setProperty('index', $value);
    }

    /**
    * The width of the column in pixels. Defaults to columnWidth.
    * @param float $value
    * @return \Kendo\UI\SpreadsheetSheetColumn
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
