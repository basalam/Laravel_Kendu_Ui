<?php

namespace Kendo\Dataviz\UI;

class DiagramConnectionDefaultsStartCapStroke extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connection start cap stroke color.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCapStroke
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The connection start cap stroke dash type.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCapStroke
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The connection start cap stroke width.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramConnectionDefaultsStartCapStroke
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
