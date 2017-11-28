<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionDefaultsEndCap extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connection end cap fill options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCapFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCap
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * The connection end cap stroke options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCapStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCap
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

    /**
    * The connection end cap type.The supported values are:
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCap
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

//<< Properties
}

?>
