<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionDefaultsSelectionHandles extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the handles fill options.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionDefaultsSelectionHandlesFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsSelectionHandles
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the handles stroke options.
    * @param \Kendo\Dataviz\UI\DiagramConnectionDefaultsSelectionHandlesStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsSelectionHandles
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

    /**
    * The width of the handle elements.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsSelectionHandles
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * The height of the handle elements.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsSelectionHandles
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

//<< Properties
}

?>
