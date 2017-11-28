<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionDefaultsStartCap extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connection start cap fill options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCapFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCap
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * The connection start cap stroke options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCapStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCap
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

    /**
    * The connection start cap type.The supported values are:
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCap
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

//<< Properties
}

?>
