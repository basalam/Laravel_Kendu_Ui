<?php

namespace Kendo\UI;

class Popup extends \Kendo\UI\Widget {
    public function name() {
        return 'Popup';
    }
//>> Properties

    /**
    * Configures the opening and closing animations of the popup. Setting the animation option to false will disable the opening and closing animations. As a result the popup will open and close instantly.
    * @param \Kendo\UI\PopupAnimation|array $value
    * @return \Kendo\UI\Popup
    */
    public function animation($value) {
        return $this->setProperty('animation', $value);
    }

    /**
    * Specifies the element that will be used as an anchor. The widget will open next to that element.
    * @param string| $value
    * @return \Kendo\UI\Popup
    */
    public function anchor($value) {
        return $this->setProperty('anchor', $value);
    }

    /**
    * Which element the popup will be appended to.
    * @param string| $value
    * @return \Kendo\UI\Popup
    */
    public function appendTo($value) {
        return $this->setProperty('appendTo', $value);
    }

    /**
    * Specifies how to position the popup element based on achor point. The value is
space separated "y" plus "x" position.The available "y" positions are:
- "bottom"
- "center"
- "top"The available "x" positions are:
- "left"
- "center"
- "right"
    * @param string $value
    * @return \Kendo\UI\Popup
    */
    public function origin($value) {
        return $this->setProperty('origin', $value);
    }

    /**
    * Specifies which point of the popup element to attach to the anchor's origin point. The value is
space separated "y" plus "x" position.The available "y" positions are:
- "bottom"
- "center"
- "top"The available "x" positions are:
- "left"
- "center"
- "right"
    * @param string $value
    * @return \Kendo\UI\Popup
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
    * Sets the activate event of the Popup.
    * Fires when the popup is opened
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Popup
    */
    public function activate($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('activate', $value);
    }

    /**
    * Sets the close event of the Popup.
    * Fires when the popup closes
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Popup
    */
    public function close($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
    * Sets the deactivate event of the Popup.
    * Fires when the popup is closed
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Popup
    */
    public function deactivate($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('deactivate', $value);
    }

    /**
    * Sets the open event of the Popup.
    * Fires when the popup opens
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Popup
    */
    public function open($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }


//<< Properties
}

?>
