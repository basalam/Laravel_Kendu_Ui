<?php

namespace Kendo\UI;

class TreeListFilterable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * If set to true the filter menu allows the user to input a second criteria.
    * @param boolean $value
    * @return \Kendo\UI\TreeListFilterable
    */
    public function extra($value) {
        return $this->setProperty('extra', $value);
    }

    /**
    * The text messages displayed in the filter menu. Use it to customize or localize the filter menu messages.
    * @param \Kendo\UI\TreeListFilterableMessages|array $value
    * @return \Kendo\UI\TreeListFilterable
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

//<< Properties
}

?>
