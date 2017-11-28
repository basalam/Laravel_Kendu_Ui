<?php

namespace Kendo\UI;

class SpreadsheetSheetFilterColumnCriteriaItem extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The criterion operator type.Supported types vary based on the inferred column data type (inferred):
* Text
    * contains - the text contains the value
    * doesnotcontain - text does not contain the value
    * startswith - text starts with the value
    * endswith - text ends with the value
* Date
    * eq -  date is the same as the value
    * neq - date is not the same as the value
    * lt -  date is before the value
    * gt -  date is after the value
* Number
    * eq - is equal to the value
    * neq - is not equal to the value
    * gte - is greater than or equal to the value
    * gt - is greater than the value
    * lte - is less than or equal to the value
    * lt - is less than the value
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheetFilterColumnCriteriaItem
    */
    public function operator($value) {
        return $this->setProperty('operator', $value);
    }

    /**
    * The value for the criteria operator.
    * @param string $value
    * @return \Kendo\UI\SpreadsheetSheetFilterColumnCriteriaItem
    */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

//<< Properties
}

?>
