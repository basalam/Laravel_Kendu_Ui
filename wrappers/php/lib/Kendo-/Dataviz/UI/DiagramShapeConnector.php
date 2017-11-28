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
    * The function that positions the connector.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\DiagramShapeConnector
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
