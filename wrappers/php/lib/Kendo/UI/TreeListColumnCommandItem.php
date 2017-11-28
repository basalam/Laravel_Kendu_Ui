<?php

namespace Kendo\UI;

class TreeListColumnCommandItem extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The CSS class applied to the command button.
    * @param string $value
    * @return \Kendo\UI\TreeListColumnCommandItem
    */
    public function className($value) {
        return $this->setProperty('className', $value);
    }

    /**
    * The CSS class applied to the icon span of the command button.
    * @param string $value
    * @return \Kendo\UI\TreeListColumnCommandItem
    */
    public function imageClass($value) {
        return $this->setProperty('imageClass', $value);
    }

    /**
    * Sets the click option of the TreeListColumnCommandItem.
    * The JavaScript function executed when the user clicks the command button. The function receives a jQuery Event as an argument.The function context (available via the this keyword) will be set to the treelist instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\TreeListColumnCommandItem
    */
    public function click($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('click', $value);
    }

    /**
    * The name of the command. The built-in command names are "edit", "createChild" and "destroy". Check the columns.command section for additional important information. When set to a custom value, the name is rendered as a data-command attribute.
    * @param string $value
    * @return \Kendo\UI\TreeListColumnCommandItem
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * The text displayed by the command button. If not set the name option is used as the button text.
    * @param string $value
    * @return \Kendo\UI\TreeListColumnCommandItem
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

//<< Properties
}

?>
