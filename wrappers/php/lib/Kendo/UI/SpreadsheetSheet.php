<?php

namespace Kendo\UI;

class SpreadsheetSheet extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The active cell in the sheet, e.g. "A1".
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function activeCell($value) {
        return $this->setProperty('activeCell', $value);
    }

    /**
    * The name of the sheet.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * Adds SpreadsheetSheetColumn to the SpreadsheetSheet.
    * @param \Kendo\UI\SpreadsheetSheetColumn|array,... $value one or more SpreadsheetSheetColumn to add.
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function addColumn($value) {
        return $this->add('columns', func_get_args());
    }

    /**
    * Sets the data source of the SpreadsheetSheet.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * Defines the filtering criteria for this sheet, if any.
    * @param \Kendo\UI\SpreadsheetSheetFilter|array $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function filter($value) {
        return $this->setProperty('filter', $value);
    }

    /**
    * The number of frozen columns in this sheet.
    * @param float $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function frozenColumns($value) {
        return $this->setProperty('frozenColumns', $value);
    }

    /**
    * The number of frozen rows in this sheet.
    * @param float $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function frozenRows($value) {
        return $this->setProperty('frozenRows', $value);
    }

    /**
    * An array of merged cell ranges, e.g. "B1:D2".
    * @param array $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function mergedCells($value) {
        return $this->setProperty('mergedCells', $value);
    }

    /**
    * Adds SpreadsheetSheetRow to the SpreadsheetSheet.
    * @param \Kendo\UI\SpreadsheetSheetRow|array,... $value one or more SpreadsheetSheetRow to add.
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function addRow($value) {
        return $this->add('rows', func_get_args());
    }

    /**
    * The selected range in the sheet, e.g. "A1:B10".
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function selection($value) {
        return $this->setProperty('selection', $value);
    }

    /**
    * A boolean value indicating if the sheet grid lines should be displayed.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function showGridLines($value) {
        return $this->setProperty('showGridLines', $value);
    }

    /**
    * Defines the sort criteria for the sheet.
    * @param \Kendo\UI\SpreadsheetSheetSort|array $value
    * @return \Kendo\UI\SpreadsheetSheet
    */
    public function sort($value) {
        return $this->setProperty('sort', $value);
    }

//<< Properties
}

?>
