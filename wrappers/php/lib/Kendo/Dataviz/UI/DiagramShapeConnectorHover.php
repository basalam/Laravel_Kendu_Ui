<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeConnectorHover extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the hover fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorHoverFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorHover
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the hover stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorHoverStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorHover
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
