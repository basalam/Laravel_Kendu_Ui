<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionDefaultsEndCap.stroke extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connection end cap stroke color.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCap.stroke
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The connection end cap stroke dash type.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCap.stroke
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The connection end cap stroke width.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsEndCap.stroke
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
