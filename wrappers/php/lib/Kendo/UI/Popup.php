<?php

namespace Kendo\UI;

class Popup extends \Kendo\UI\Widget {
    public function name() {
        return 'Popup';
    }
//>> Properties

    /**
    * Configures the margins, which will be added to the popup size, if its position should end up being next to the viewport edges. By default, the adjustment amount in both dimensions is zero.The property takes effect only if collision is set to "fit" for the respective dimension (width or height).
    * @param  $value
    * @return \Kendo\UI\Popup
    */
    public function adjustSize($value) {
        return $this->setProperty('adjustSize', $value);
    }

    /**
    * Configures the opening and closing animations of the popup. Setting the animation option to false will disable the opening and closing animations. As a result the popup will open and close instantly. is not a valid configuration.
    * @param boolean|\Kendo\UI\PopupAnimation|array $value
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
    * Which element the popup will be appended to. The element needs to be relatively positioned.
    * @param string| $value
    * @return \Kendo\UI\Popup
    */
    public function appendTo($value) {
        return $this->setProperty('appendTo', $value);
    }

    /**
    * Configures how the popup should behave when it cannot be properly displayed and fully visible, if its origin and position settings are obeyed.Valid values are: "fit", "flip", "flip fit" and "fit flip". "Fit" allows the popup to be shifted (moved) until it is fully visible. "Flip" allows the popup to switch its position, according to its anchor. If two words are used, the first one applies to the horizontal dimension and the second one - to the vertical dimension. If one word is used, the setting is applied to both dimensions.
    * @param string $value
    * @return \Kendo\UI\Popup
    */
    public function collision($value) {
        return $this->setProperty('collision', $value);
    }

    /**
    * Specifies how to position the popup element based on anchor point. The value is
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
