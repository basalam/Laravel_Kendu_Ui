<?php

namespace Kendo\UI;

class GridColumnFilterable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies options for the filter header cell when filter mode is set to 'row'.Can be set to a JavaScript object which represents the filter cell configuration.
    * @param \Kendo\UI\GridColumnFilterableCell|array $value
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function cell($value) {
        return $this->setProperty('cell', $value);
    }

    /**
    * Use this options to enable the MultiCheck filtering support for that column.
    * @param boolean $value
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function multi($value) {
        return $this->setProperty('multi', $value);
    }

    /**
    * Sets the data source of the GridColumnFilterable.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * Controls whether to show or not the checkAll checkbox before the other checkboxes when using checkbox filtering.
    * @param boolean $value
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function checkAll($value) {
        return $this->setProperty('checkAll', $value);
    }

    /**
    * Sets the itemTemplate option of the GridColumnFilterable.
    * Allows customization on the logic that renderes the checkboxes when using checkbox filtering.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function itemTemplate($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('itemTemplate', $value);
    }

    /**
    * Controls whether to show a search box when checkbox filtering is enabled.
    * @param boolean $value
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function search($value) {
        return $this->setProperty('search', $value);
    }

    /**
    * Toggles between case-insensitive (default) and case-sensitive searching.
    * @param boolean $value
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function ignoreCase($value) {
        return $this->setProperty('ignoreCase', $value);
    }

    /**
    * The role data attribute of the widget used in the filter menu or a JavaScript function which initializes that widget.
    * @param string|\Kendo\JavaScriptFunction $value
    * @return \Kendo\UI\GridColumnFilterable
    */
    public function ui($value) {
        return $this->setProperty('ui', $value);
    }

//<< Properties
}

?>
