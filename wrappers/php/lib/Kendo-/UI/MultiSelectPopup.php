<?php

namespace Kendo\UI;

class MultiSelectPopup extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines a jQuery selector that will be used to find a container element, where the popup will be appended to.
    * @param string $value
    * @return \Kendo\UI\MultiSelectPopup
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
    * @return \Kendo\UI\MultiSelectPopup
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
    * @return \Kendo\UI\MultiSelectPopup
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

//<< Properties
}

?>
