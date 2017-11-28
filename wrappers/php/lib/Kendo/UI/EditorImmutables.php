<?php

namespace Kendo\UI;

class EditorImmutables extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Sets the deserialization option of the EditorImmutables.
    * Callback that allows custom deserialization of an immutable element. The callback accepts two arguments. The DOM element representing the immutable element in the html view and the immutable DOM element, which will be restored.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\EditorImmutables
    */
    public function deserialization($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('deserialization', $value);
    }

    /**
    * Kendo template or a callback that allows custom serialization of an immutable element. The callback accepts DOM element as only parameter and is expected to return the HTML source of a DOM element.
    * @param string|\Kendo\JavaScriptFunction $value
    * @return \Kendo\UI\EditorImmutables
    */
    public function serialization($value) {
        return $this->setProperty('serialization', $value);
    }

//<< Properties

    /**
    * Kendo template or a callback that allows custom serialization of an immutable element. The callback accepts DOM element as only parameter and is expected to return the HTML source of a DOM element.
    * @param string|\Kendo\JavaScriptFunction $value
    * @return \Kendo\UI\EditorImmutables
    */
    public function serializationHandler($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('serialization', $value);
    }

}

?>
