<?php

namespace Kendo\UI;

class FlatColorPickerMessages extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Allows customization of "Apply" label.
    * @param string $value
    * @return \Kendo\UI\FlatColorPickerMessages
    */
    public function apply($value) {
        return $this->setProperty('apply', $value);
    }

    /**
    * Allows customization of "Cancel" label.
    * @param string $value
    * @return \Kendo\UI\FlatColorPickerMessages
    */
    public function cancel($value) {
        return $this->setProperty('cancel', $value);
    }

//<< Properties
}

?>
