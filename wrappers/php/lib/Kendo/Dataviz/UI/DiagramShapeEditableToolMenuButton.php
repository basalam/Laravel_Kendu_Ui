<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeEditableToolMenuButton extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies the HTML attributes of a menu button.
    * @param  $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function attributes($value) {
        return $this->setProperty('attributes', $value);
    }

    /**
    * Specifies whether the menu button is initially enabled or disabled.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function enable($value) {
        return $this->setProperty('enable', $value);
    }

    /**
    * Sets icon for the menu buttons. The icon should be one of the existing in the Kendo UI theme sprite.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * Specifies the ID of the menu buttons.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function id($value) {
        return $this->setProperty('id', $value);
    }

    /**
    * If set, the ToolBar will render an image with the specified URL in the menu button.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function imageUrl($value) {
        return $this->setProperty('imageUrl', $value);
    }

    /**
    * Defines a CSS class (or multiple classes separated by spaces) which will be used for menu button icon.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function spriteCssClass($value) {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
    * Specifies the text of the menu buttons.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * Specifies the url of the menu button to navigate to.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeEditableToolMenuButton
    */
    public function url($value) {
        return $this->setProperty('url', $value);
    }

//<< Properties
}

?>
