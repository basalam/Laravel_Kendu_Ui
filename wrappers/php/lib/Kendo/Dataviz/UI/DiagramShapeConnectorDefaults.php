<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeConnectorDefaults extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the width of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaults
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * Defines the height of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaults
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * Defines the hover configuration of the shape connectors.
    * @param \Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsHover|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaults
    */
    public function hover($value) {
        return $this->setProperty('hover', $value);
    }

    /**
    * Defines the fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaults
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorDefaultsStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnectorDefaults
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
