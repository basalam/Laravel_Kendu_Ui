<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionDefaultsEditableTool extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The name of the tool. The built-in tools are "edit" and "delete".
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * Specifies the HTML attributes of a button.
    * @param  $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function attributes($value) {
        return $this->setProperty('attributes', $value);
    }

    /**
    * Adds DiagramConnectionDefaultsEditableToolButton to the DiagramConnectionDefaultsEditableTool.
    * @param \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableToolButton|array,... $value one or more DiagramConnectionDefaultsEditableToolButton to add.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function addButton($value) {
        return $this->add('buttons', func_get_args());
    }

    /**
    * Sets the click option of the DiagramConnectionDefaultsEditableTool.
    * Specifies the click event handler of the button. Applicable only for commands of type `button` and `splitButton`.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function click($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('click', $value);
    }

    /**
    * Specifies whether the control is initially enabled or disabled. Default value is "true".
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function enable($value) {
        return $this->setProperty('enable', $value);
    }

    /**
    * Assigns the button to a group. Applicable only for buttons with togglable set to true.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function group($value) {
        return $this->setProperty('group', $value);
    }

    /**
    * Sets icon for the item. The icon should be one of the existing in the Kendo UI theme sprite.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * Specifies the ID of the button.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function id($value) {
        return $this->setProperty('id', $value);
    }

    /**
    * If set, the ToolBar will render an image with the specified URL in the button.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function imageUrl($value) {
        return $this->setProperty('imageUrl', $value);
    }

    /**
    * Adds DiagramConnectionDefaultsEditableToolMenuButton to the DiagramConnectionDefaultsEditableTool.
    * @param \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableToolMenuButton|array,... $value one or more DiagramConnectionDefaultsEditableToolMenuButton to add.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function addMenuButton($value) {
        return $this->add('menuButtons', func_get_args());
    }

    /**
    * Specifies how the button behaves when the ToolBar is resized. Possible values are "always", "never" or "auto" (default).
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function overflow($value) {
        return $this->setProperty('overflow', $value);
    }

    /**
    * Sets the overflowTemplate option of the DiagramConnectionDefaultsEditableTool.
    * Specifies what element will be added in the command overflow popup. Applicable only for items that have a template.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function overflowTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('overflowTemplate', $value);
    }

    /**
    * Sets the overflowTemplate option of the DiagramConnectionDefaultsEditableTool.
    * Specifies what element will be added in the command overflow popup. Applicable only for items that have a template.
    * @param string $value The template content.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function overflowTemplate($value) {
        return $this->setProperty('overflowTemplate', $value);
    }

    /**
    * Specifies whether the button is primary. Primary buttons receive different styling.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function primary($value) {
        return $this->setProperty('primary', $value);
    }

    /**
    * Specifies if the toggle button is initially selected. Applicable only for buttons with togglable set to true.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function selected($value) {
        return $this->setProperty('selected', $value);
    }

    /**
    * Specifies where the button icon will be displayed. Possible values are "toolbar", "overflow" or "both" (default).
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function showIcon($value) {
        return $this->setProperty('showIcon', $value);
    }

    /**
    * Specifies where the text will be displayed. Possible values are "toolbar", "overflow" or "both" (default).
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function showText($value) {
        return $this->setProperty('showText', $value);
    }

    /**
    * Defines a CSS class (or multiple classes separated by spaces) which will be used for button icon.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function spriteCssClass($value) {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
    * Sets the template option of the DiagramConnectionDefaultsEditableTool.
    * Specifies what element will be added in the ToolBar wrapper. Items with template does not have a type.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function templateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('template', $value);
    }

    /**
    * Sets the template option of the DiagramConnectionDefaultsEditableTool.
    * Specifies what element will be added in the ToolBar wrapper. Items with template does not have a type.
    * @param string $value The template content.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * Sets the text of the button.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * Specifies if the button is togglable, e.g. has a selected and unselected state.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function togglable($value) {
        return $this->setProperty('togglable', $value);
    }

    /**
    * Sets the toggle option of the DiagramConnectionDefaultsEditableTool.
    * Specifies the toggle event handler of the button. Applicable only for commands of type `button` and togglable set to true.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function toggle($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('toggle', $value);
    }

    /**
    * Specifies the command type. Supported types are "button", "splitButton", "buttonGroup", "separator".
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
    * Specifies the url to navigate to.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool
    */
    public function url($value) {
        return $this->setProperty('url', $value);
    }

//<< Properties
}

?>
