<?php

namespace Kendo\UI;

class DialogAction extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The text to be shown in the action's button.
    * @param string $value
    * @return \Kendo\UI\DialogAction
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * Sets the action option of the DialogAction.
    * The callback function to be called after pressing the action button.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\DialogAction
    */
    public function action($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('action', $value);
    }

    /**
    * A boolean property indicating whether the action button will be decorated as primary button or not.
    * @param boolean $value
    * @return \Kendo\UI\DialogAction
    */
    public function primary($value) {
        return $this->setProperty('primary', $value);
    }

//<< Properties
}

?>
