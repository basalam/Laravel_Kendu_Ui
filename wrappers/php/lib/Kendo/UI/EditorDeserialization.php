<?php

namespace Kendo\UI;

class EditorDeserialization extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Sets the custom option of the EditorDeserialization.
    * Callback that allows custom deserialization to be plugged in. The method accepts string as the only parameter and is expected to return the modified content as string as well.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\EditorDeserialization
    */
    public function custom($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('custom', $value);
    }

//<< Properties
}

?>
