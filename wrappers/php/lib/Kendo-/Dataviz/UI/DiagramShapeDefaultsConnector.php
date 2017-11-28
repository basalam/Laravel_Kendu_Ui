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
    * The function that positions the connector.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsConnector
    */
    public function position($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('position', $value);
    }

//<< Properties
}

?>
