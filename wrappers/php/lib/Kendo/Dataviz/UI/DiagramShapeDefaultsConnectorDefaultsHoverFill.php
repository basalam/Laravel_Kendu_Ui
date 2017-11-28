<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsConnectorDefaultsHoverFill extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the hover fill color of the shape connectors.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsHoverFill
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * Defines the hover fill opacity of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsHoverFill
    */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

//<< Properties
}

?>
