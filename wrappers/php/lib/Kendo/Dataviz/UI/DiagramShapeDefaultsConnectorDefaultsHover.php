<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsConnectorDefaultsHover extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the hover fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsHoverFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsHover
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the hover stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsHoverStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsHover
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
