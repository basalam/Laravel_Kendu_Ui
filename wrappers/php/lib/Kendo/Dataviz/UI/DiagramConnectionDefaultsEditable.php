<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionDefaultsEditable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies if the connections can be dragged.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditable
    */
    public function drag($value) {
        return $this->setProperty('drag', $value);
    }

    /**
    * Specifies if the connections can be removed.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditable
    */
    public function remove($value) {
        return $this->setProperty('remove', $value);
    }

    /**
    * Adds DiagramConnectionDefaultsEditableTool to the DiagramConnectionDefaultsEditable.
    * @param \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditableTool|array,... $value one or more DiagramConnectionDefaultsEditableTool to add.
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEditable
    */
    public function addTool($value) {
        return $this->add('tools', func_get_args());
    }

//<< Properties
}

?>
