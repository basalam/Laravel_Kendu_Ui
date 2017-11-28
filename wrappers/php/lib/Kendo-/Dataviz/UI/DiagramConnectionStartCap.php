<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionStartCap extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connection start cap fill options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionStartCapFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionStartCap
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * The connection start cap stroke options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionStartCapStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionStartCap
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

    /**
    * The connection start cap type.The supported values are:
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionStartCap
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

//<< Properties
}

?>
