<?php

namespace Kendo\UI;

class TreeListColumnMenu extends \Kendo\SerializableObject {
//>> Properties

    /**
    * If set to true the column menu would allow the user to select (show and hide) treelist columns. By default the column menu allows column selection.
    * @param boolean $value
    * @return \Kendo\UI\TreeListColumnMenu
    */
    public function columns($value) {
        return $this->setProperty('columns', $value);
    }

    /**
    * If set to true the column menu would allow the user to filter the treelist. By default the column menu allows the user to filter if filtering is enabled via the filterable.
    * @param boolean $value
    * @return \Kendo\UI\TreeListColumnMenu
    */
    public function filterable($value) {
        return $this->setProperty('filterable', $value);
    }

    /**
    * If set to true the column menu would allow the user to sort the treelist by the column field. By default the column menu allows the user to sort if sorting is enabled via the sortable option.
    * @param boolean $value
    * @return \Kendo\UI\TreeListColumnMenu
    */
    public function sortable($value) {
        return $this->setProperty('sortable', $value);
    }

    /**
    * The text messages displayed in the column menu. Use it to customize or localize the column menu messages.
    * @param \Kendo\UI\TreeListColumnMenuMessages|array $value
    * @return \Kendo\UI\TreeListColumnMenu
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

//<< Properties
}

?>
