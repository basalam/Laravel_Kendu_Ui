<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeConnector extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The connector description.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
    */
    public function description($value) {
        return $this->setProperty('description', $value);
    }

    /**
    * The connector name. Predefined names include:
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * Sets the position option of the DiagramShapeConnector.
    * The function that positions the connector. The function is passed a shape and should return a kendo.dataviz.diagram.Point holding the connector position as result.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
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
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * Defines the height of the shape connectors.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * Defines the hover configuration of the shape connectors.
    * @param \Kendo\Dataviz\UI\DiagramShapeConnectorHover|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
    */
    public function hover($value) {
        return $this->setProperty('hover', $value);
    }

    /**
    * Defines the fill options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorFill|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
    */
    public function fill($value) {
        return $this->setProperty('fill', $value);
    }

    /**
    * Defines the stroke options of the shape connectors.
    * @param string|\Kendo\Dataviz\UI\DiagramShapeConnectorStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

//<< Properties
}

?>
