<?php

namespace Kendo\UI;

class FilterMenuOperators extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The texts of the filter operators displayed for columns bound to string fields.
    * @param \Kendo\UI\FilterMenuOperatorsString|array $value
    * @return \Kendo\UI\FilterMenuOperators
    */
    public function string($value) {
        return $this->setProperty('string', $value);
    }

    /**
    * The texts of the filter operators displayed for columns bound to number fields.
    * @param \Kendo\UI\FilterMenuOperatorsNumber|array $value
    * @return \Kendo\UI\FilterMenuOperators
    */
    public function number($value) {
        return $this->setProperty('number', $value);
    }

    /**
    * The texts of the filter operators displayed for columns bound to date fields.
    * @param \Kendo\UI\FilterMenuOperatorsDate|array $value
    * @return \Kendo\UI\FilterMenuOperators
    */
    public function date($value) {
        return $this->setProperty('date', $value);
    }

    /**
    * The texts of the filter operators displayed for columns which have their values option set.
    * @param \Kendo\UI\FilterMenuOperatorsEnums|array $value
    * @return \Kendo\UI\FilterMenuOperators
    */
    public function enums($value) {
        return $this->setProperty('enums', $value);
    }

//<< Properties
}

?>
