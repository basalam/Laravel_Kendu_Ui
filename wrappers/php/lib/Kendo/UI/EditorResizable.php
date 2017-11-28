<?php

namespace Kendo\UI;

class EditorResizable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * If enabled, the editor renders a resize handle to allow users to resize it.
    * @param boolean $value
    * @return \Kendo\UI\EditorResizable
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * The minimum height that the editor can be resized to.
    * @param float $value
    * @return \Kendo\UI\EditorResizable
    */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
    * The maximum height that the editor can be resized to.
    * @param float $value
    * @return \Kendo\UI\EditorResizable
    */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
    * If resizable is set to true the widget will detect changes in the viewport width and will hide the overflowing controls in the tool overflow popup.
    * @param boolean $value
    * @return \Kendo\UI\EditorResizable
    */
    public function toolbar($value) {
        return $this->setProperty('toolbar', $value);
    }

//<< Properties
}

?>
