<?php

namespace Kendo\UI;

class SpreadsheetToolbar extends \Kendo\SerializableObject {
//>> Properties

    /**
    * A boolean value indicating if the "home" tab should be displayed or a collection of tools that will be shown in the "home" tab.The available tools are:Those tools which are part of a tool group are defined as array. For example ["bold", "italic", "underline"]
    * @param boolean|array $value
    * @return \Kendo\UI\SpreadsheetToolbar
    */
    public function home($value) {
        return $this->setProperty('home', $value);
    }

    /**
    * A boolean value indicating if the "insert" tab should be displayed or a collection of tools that will be shown in the "insert" tab.The available tools are:Those tools which are part of a tool group are defined as array. For example ["deleteColumn", "deleteRow"]
    * @param boolean|array $value
    * @return \Kendo\UI\SpreadsheetToolbar
    */
    public function insert($value) {
        return $this->setProperty('insert', $value);
    }

    /**
    * A boolean value indicating if the "insert" tab should be displayed or a collection of tools that will be shown in the "insert" tab.The available tools are:
    * @param boolean|array $value
    * @return \Kendo\UI\SpreadsheetToolbar
    */
    public function data($value) {
        return $this->setProperty('data', $value);
    }

//<< Properties
}

?>
