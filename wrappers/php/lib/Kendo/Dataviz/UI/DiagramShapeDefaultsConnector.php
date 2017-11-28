<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsConnector extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connector name.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * Sets the position option of the DiagramShapeDefaultsConnector.
    * The function that positions the connector. The function is passed a shape and should return a kendo.dataviz.diagram.Point holding the connector position as result.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function position($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('position', $value);
    }

    /**
    * Defines the width of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * Defines the height of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * Defines the hover configuration of the shape connectors.
    * @param \Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorHover|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function hover($value) {
        return $this->setProperty('hover', $value);
    }

    /**
    * Defines the fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeDefaultsConnectorStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
