<?php

namespace Kendo\UI;

class SpreadsheetPdf extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The area to export. Possible values:
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function area($value) {
        return $this->setProperty('area', $value);
    }

    /**
    * The author of the PDF document.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function author($value) {
        return $this->setProperty('author', $value);
    }

    /**
    * The creator of the PDF document.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function creator($value) {
        return $this->setProperty('creator', $value);
    }

    /**
    * The date when the PDF document is created. Defaults to new Date().
    * @param date $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function date($value) {
        return $this->setProperty('date', $value);
    }

    /**
    * Specifies the file name of the exported PDF file.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function fileName($value) {
        return $this->setProperty('fileName', $value);
    }

    /**
    * An option indicating whether to fit the spreadsheet content to page width.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function fitWidth($value) {
        return $this->setProperty('fitWidth', $value);
    }

    /**
    * If set to true, the content will be forwarded to proxyURL even if the browser supports saving files locally.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function forceProxy($value) {
        return $this->setProperty('forceProxy', $value);
    }

    /**
    * An option indicating whether to export the cell guidelines.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function guidelines($value) {
        return $this->setProperty('guidelines', $value);
    }

    /**
    * An option indicating whether to center the content horizontally.See also vCenter.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function hCenter($value) {
        return $this->setProperty('hCenter', $value);
    }

    /**
    * Specifies the keywords of the exported PDF file.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function keywords($value) {
        return $this->setProperty('keywords', $value);
    }

    /**
    * Set to true to reverse the paper dimensions if needed such that width is the larger edge.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function landscape($value) {
        return $this->setProperty('landscape', $value);
    }

    /**
    * Specifies the margins of the page (numbers or strings with units). Supported
units are "mm", "cm", "in" and "pt" (default).
    * @param \Kendo\UI\SpreadsheetPdfMargin|array $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
    * Specifies the paper size of the PDF document.
The default "auto" means paper size is determined by content.Supported values:
    * @param string|array $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function paperSize($value) {
        return $this->setProperty('paperSize', $value);
    }

    /**
    * The URL of the server side proxy which will stream the file to the end user.A proxy will be used when the browser isn't capable of saving files locally e.g. Internet Explorer 9 and Safari. PDF export is not supported in Internet Explorer 8 and below.The developer is responsible for implementing the server-side proxy.The proxy will receive a POST request with the following parameters in the request body:The proxy should return the decoded file with the "Content-Disposition" header set to
attachment; filename="<fileName.pdf>".
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function proxyURL($value) {
        return $this->setProperty('proxyURL', $value);
    }

    /**
    * A name or keyword indicating where to display the document returned from the proxy.If you want to display the document in a new window or iframe,
the proxy should set the "Content-Disposition" header to inline; filename="<fileName.pdf>".
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function proxyTarget($value) {
        return $this->setProperty('proxyTarget', $value);
    }

    /**
    * Sets the subject of the PDF file.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function subject($value) {
        return $this->setProperty('subject', $value);
    }

    /**
    * Sets the title of the PDF file.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
    * An option indicating whether to center the content vertically.See also hCenter.
    * @param boolean $value
    * @return \Kendo\UI\SpreadsheetPdf
    */
    public function vCenter($value) {
        return $this->setProperty('vCenter', $value);
    }

//<< Properties
}

?>
