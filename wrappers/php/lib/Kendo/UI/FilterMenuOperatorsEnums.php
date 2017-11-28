<?php

namespace Kendo\UI;

class FilterMenuOperatorsEnums extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The text of the "equal" filter operator.
    * @param string $value
    * @return \Kendo\UI\FilterMenuOperatorsEnums
    */
    public function eq($value) {
        return $this->setProperty('eq', $value);
    }

    /**
    * The text of the "not equal" filter operator.
    * @param string $value
    * @return \Kendo\UI\FilterMenuOperatorsEnums
    */
    public function neq($value) {
        return $this->setProperty('neq', $value);
    }

    /**
    * The text of the "isnull" filter operator.
    * @param string $value
    * @return \Kendo\UI\FilterMenuOperatorsEnums
    */
    public function isnull($value) {
        return $this->setProperty('isnull', $value);
    }

    /**
    * The text of the "isnotnull" filter operator.
    * @param string $value
    * @return \Kendo\UI\FilterMenuOperatorsEnums
    */
    public function isnotnull($value) {
        return $this->setProperty('isnotnull', $value);
    }

//<< Properties
}

?>
