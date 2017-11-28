<?php

namespace Kendo\UI;

class GridMessagesCommands extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the text of the "Cancel Changes" button located in the toolbar of the widget.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function cancel($value) {
        return $this->setProperty('cancel', $value);
    }

    /**
    * Defines the text of the "Cancel" button that is rendered in inline or popup editing mode.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function canceledit($value) {
        return $this->setProperty('canceledit', $value);
    }

    /**
    * Defines the text of the "Add new record" button located in the toolbar of the widget.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function create($value) {
        return $this->setProperty('create', $value);
    }

    /**
    * Defines the text of the "Delete" button rendered in inline or popup editing mode.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function destroy($value) {
        return $this->setProperty('destroy', $value);
    }

    /**
    * Defines the text of the "Edit" button that is rendered in inline or popup editing mode.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function edit($value) {
        return $this->setProperty('edit', $value);
    }

    /**
    * Defines the text of the "Export to Excel" button of the grid toolbar.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function excel($value) {
        return $this->setProperty('excel', $value);
    }

    /**
    * Defines the text of the "Save Changes" button located in the toolbar of the widget.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function save($value) {
        return $this->setProperty('save', $value);
    }

    /**
    * Defines the text of the "Update" button that is rendered in inline or popup editing mode.
    * @param string $value
    * @return \Kendo\UI\GridMessagesCommands
    */
    public function update($value) {
        return $this->setProperty('update', $value);
    }

//<< Properties
}

?>
