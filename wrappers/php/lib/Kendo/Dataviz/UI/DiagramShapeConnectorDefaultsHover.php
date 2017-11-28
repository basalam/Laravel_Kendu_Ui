<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeConnectorDefaultsHover extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the hover fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHoverFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHover
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the hover stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHoverStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHover
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
