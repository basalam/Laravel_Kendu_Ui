<?php

namespace Kendo\UI;

class Spreadsheet extends \Kendo\UI\Widget {
    public function name() {
        return 'Spreadsheet';
    }
//>> Properties

    /**
    * The name of the currently active sheet.Must match one of the (sheet names)[#configuration-sheets.name] exactly.
    * @param string $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function activeSheet($value) {
        return $this->setProperty('activeSheet', $value);
    }

    /**
    * The default column width in pixels.
    * @param float $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function columnWidth($value) {
        return $this->setProperty('columnWidth', $value);
    }

    /**
    * The number of columns in the document.
    * @param float $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function columns($value) {
        return $this->setProperty('columns', $value);
    }

    /**
    * The default cell styles to be applyied to sheet cells.
    * @param \Kendo\UI\SpreadsheetDefaultCellStyle|array $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function defaultCellStyle($value) {
        return $this->setProperty('defaultCellStyle', $value);
    }

    /**
    * The height of the header row in pixels.
    * @param float $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function headerHeight($value) {
        return $this->setProperty('headerHeight', $value);
    }

    /**
    * The width of the header column in pixels.
    * @param float $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function headerWidth($value) {
        return $this->setProperty('headerWidth', $value);
    }

    /**
    * Configures the Kendo UI Spreadsheet Excel export settings.
    * @param \Kendo\UI\SpreadsheetExcel|array $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function excel($value) {
        return $this->setProperty('excel', $value);
    }

    /**
    * Configures the Kendo UI Spreadsheet PDF export settings.
    * @param \Kendo\UI\SpreadsheetPdf|array $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function pdf($value) {
        return $this->setProperty('pdf', $value);
    }

    /**
    * The default row height in pixels.
    * @param float $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function rowHeight($value) {
        return $this->setProperty('rowHeight', $value);
    }

    /**
    * The number of rows in the document.
    * @param float $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function rows($value) {
        return $this->setProperty('rows', $value);
    }

    /**
    * Adds SpreadsheetSheet to the Spreadsheet.
    * @param \Kendo\UI\SpreadsheetSheet|array,... $value one or more SpreadsheetSheet to add.
    * @return \Kendo\UI\Spreadsheet
    */
    public function addSheet($value) {
        return $this->add('sheets', func_get_args());
    }

    /**
    * A boolean value indicating if the sheetsbar should be displayed.
    * @param boolean $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function sheetsbar($value) {
        return $this->setProperty('sheetsbar', $value);
    }

    /**
    * A boolean value indicating if the toolbar should be displayed.
    * @param boolean|\Kendo\UI\SpreadsheetToolbar|array $value
    * @return \Kendo\UI\Spreadsheet
    */
    public function toolbar($value) {
        return $this->setProperty('toolbar', $value);
    }

    /**
    * Sets the insertSheet event of the Spreadsheet.
    * Triggered when sheet is inserted. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function insertSheet($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('insertSheet', $value);
    }

    /**
    * Sets the removeSheet event of the Spreadsheet.
    * Triggered when sheet will be removed. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function removeSheet($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('removeSheet', $value);
    }

    /**
    * Sets the renameSheet event of the Spreadsheet.
    * Triggered when sheet will be renamed. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function renameSheet($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('renameSheet', $value);
    }

    /**
    * Sets the selectSheet event of the Spreadsheet.
    * Triggered when sheet will be activated. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function selectSheet($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('selectSheet', $value);
    }

    /**
    * Sets the unhideColumn event of the Spreadsheet.
    * Triggered when column will be shown. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function unhideColumn($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('unhideColumn', $value);
    }

    /**
    * Sets the unhideRow event of the Spreadsheet.
    * Triggered when row will be shown. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function unhideRow($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('unhideRow', $value);
    }

    /**
    * Sets the hideColumn event of the Spreadsheet.
    * Triggered when column will be hidden. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function hideColumn($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('hideColumn', $value);
    }

    /**
    * Sets the hideRow event of the Spreadsheet.
    * Triggered when row will be hidden. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function hideRow($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('hideRow', $value);
    }

    /**
    * Sets the deleteColumn event of the Spreadsheet.
    * Triggered when column will be deleted. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function deleteColumn($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('deleteColumn', $value);
    }

    /**
    * Sets the deleteRow event of the Spreadsheet.
    * Triggered when row will be deleted. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function deleteRow($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('deleteRow', $value);
    }

    /**
    * Sets the insertColumn event of the Spreadsheet.
    * Triggered when column will be inserted. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function insertColumn($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('insertColumn', $value);
    }

    /**
    * Sets the insertRow event of the Spreadsheet.
    * Triggered when row will be inserted. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function insertRow($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('insertRow', $value);
    }

    /**
    * Sets the select event of the Spreadsheet.
    * Triggered when spreadsheet selection is changed. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function select($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
    * Sets the changeFormat event of the Spreadsheet.
    * Triggered when range format is changed from the UI. Introduced in 2017 Q1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function changeFormat($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('changeFormat', $value);
    }

    /**
    * Sets the change event of the Spreadsheet.
    * Triggered when a value in the spreadsheet has been changed. Introduced in 2016.Q1.SP1.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
    * Sets the render event of the Spreadsheet.
    * Triggered after the widget has completed rendering.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function renderEvent($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('render', $value);
    }

    /**
    * Sets the excelExport event of the Spreadsheet.
    * Fired when the user clicks the "Export to Excel" toolbar button.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function excelExport($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('excelExport', $value);
    }

    /**
    * Sets the excelImport event of the Spreadsheet.
    * Fired when the user clicks the "Open" toolbar button.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function excelImport($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('excelImport', $value);
    }

    /**
    * Sets the pdfExport event of the Spreadsheet.
    * Fired when the user initiates PDF export.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Spreadsheet
    */
    public function pdfExport($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('pdfExport', $value);
    }


//<< Properties
}

?>
