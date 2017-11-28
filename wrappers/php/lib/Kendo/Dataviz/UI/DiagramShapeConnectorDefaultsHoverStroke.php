<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeConnectorDefaultsHoverStroke extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the hover stroke color.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHoverStroke
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The hover stroke dash type.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHoverStroke
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * Defines the thickness or width of the shape connectors stroke on hover.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHoverStroke
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
