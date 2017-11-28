<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionEndCap extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connection end cap fill options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionEndCapFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionEndCap
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * The connection end cap stroke options or color.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionEndCapStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionEndCap
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

    /**
    * The connection end cap type.The supported values are:Note that you can also use the "ArrowStart" for the endCap but its direction will be inversed.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionEndCap
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

//<< Properties
}

?>
