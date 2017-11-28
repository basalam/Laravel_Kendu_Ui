<?php

namespace Kendo\UI;

class FilterMenu extends \Kendo\UI\Widget {
    public function name() {
        return 'FilterMenu';
    }
//>> Properties

    /**
    * Sets the data source of the FilterMenu.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\UI\FilterMenu
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * If set to true the filter menu allows the user to input a second criterion.
    * @param boolean $value
    * @return \Kendo\UI\FilterMenu
    */
    public function extra($value) {
        return $this->setProperty('extra', $value);
    }

    /**
    * Specifies the field to filter on
    * @param string $value
    * @return \Kendo\UI\FilterMenu
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
    * The text messages displayed in the filter menu. Use it to customize or localize the filter menu messages.
    * @param \Kendo\UI\FilterMenuMessages|array $value
    * @return \Kendo\UI\FilterMenu
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * The text of the filter operators displayed in the filter menu.
    * @param \Kendo\UI\FilterMenuOperators|array $value
    * @return \Kendo\UI\FilterMenu
    */
    public function operators($value) {
        return $this->setProperty('operators', $value);
    }


//<< Properties
}

?>
