<?php

namespace Kendo\Data;

class DataSourceSortItem extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The sort order (direction).The supported values are:
    * @param string $value
    * @return \Kendo\Data\DataSourceSortItem
    */
    public function dir($value) {
        return $this->setProperty('dir', $value);
    }

    /**
    * The field by which the data items are sorted.
    * @param string $value
    * @return \Kendo\Data\DataSourceSortItem
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
    * Sets the compare option of the DataSourceSortItem.
    * Function which can be used for custom comparing of the DataSource items.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Data\DataSourceSortItem
    */
    public function compare($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('compare', $value);
    }

//<< Properties
}

?>
