<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsConnectorDefaults extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the width of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaults
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * Defines the height of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaults
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * Defines the hover configuration of the shape connectors.
    * @param \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsHover|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaults
    */
    public function hover($value) {
        return $this->setProperty('hover', $value);
    }

    /**
    * Defines the fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaults
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaultsStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorDefaults
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
