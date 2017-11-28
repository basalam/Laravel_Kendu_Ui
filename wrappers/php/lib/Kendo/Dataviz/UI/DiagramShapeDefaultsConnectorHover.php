<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsConnectorHover extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the hover fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorHoverFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorHover
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the hover stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorHoverStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorHover
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
