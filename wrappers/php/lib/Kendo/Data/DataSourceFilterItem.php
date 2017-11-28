<?php

namespace Kendo\Data;

class DataSourceFilterItem extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The data item field to which the filter operator is applied.
    * @param string $value
    * @return \Kendo\Data\DataSourceFilterItem
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
    * The nested filter expressions. Supports the same options as filter. Filters can be nested indefinitely.
    * @param array $value
    * @return \Kendo\Data\DataSourceFilterItem
    */
    public function filters($value) {
        return $this->setProperty('filters', $value);
    }

    /**
    * The logical operation to use when the filter.filters option is set.The supported values are:
    * @param string $value
    * @return \Kendo\Data\DataSourceFilterItem
    */
    public function logic($value) {
        return $this->setProperty('logic', $value);
    }

    /**
    * The filter operator (comparison).The supported operators are:The last five are supported only for string fields.
    * @param string|\Kendo\JavaScriptFunction $value
    * @return \Kendo\Data\DataSourceFilterItem
    */
    public function operator($value) {
        return $this->setProperty('operator', $value);
    }

    /**
    * The value to which the field is compared. The value has to be of the same type as the field.
    * @param  $value
    * @return \Kendo\Data\DataSourceFilterItem
    */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

//<< Properties
}

?>
