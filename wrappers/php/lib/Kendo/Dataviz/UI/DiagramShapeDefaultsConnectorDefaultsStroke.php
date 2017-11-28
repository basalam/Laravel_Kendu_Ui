<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsConnectorDefaultsStroke extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the stroke color.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsStroke
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The stroke dash type.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsStroke
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * Defines the thickness or width of the shape connectors stroke.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsStroke
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
