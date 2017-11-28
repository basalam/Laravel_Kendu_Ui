<?php

namespace Kendo\UI;

class SpreadsheetSheetRowCellBorderLeft extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The left border color of the cell.Many standard CSS formats are supported, but the canonical form is "#ccff00".
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheetRowCellBorderLeft
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The width of the border in pixels.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheetRowCellBorderLeft
    */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

//<< Properties
}

?>
