<?php

namespace Kendo\UI;

class SpreadsheetDefaultCellStyle extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The background CSS color of the cell.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
    * The text CSS color of the cell.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The font family for the cell.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function fontFamily($value) {
        return $this->setProperty('fontFamily', $value);
    }

    /**
    * The font size of the cell in pixels.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function fontSize($value) {
        return $this->setProperty('fontSize', $value);
    }

    /**
    * Sets the cell font to italic, if set to true.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function Italic($value) {
        return $this->setProperty('Italic', $value);
    }

    /**
    * Sets the cell font to bold, if set to true.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function bold($value) {
        return $this->setProperty('bold', $value);
    }

    /**
    * Sets the cell font to underline, if set to true.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function underline($value) {
        return $this->setProperty('underline', $value);
    }

    /**
    * Sets the cell wrap, if set to true.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetDefaultCellStyle
    */
    public function wrap($value) {
        return $this->setProperty('wrap', $value);
    }

//<< Properties
}

?>
