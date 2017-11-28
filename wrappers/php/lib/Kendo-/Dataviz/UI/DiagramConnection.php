<?php

namespace Kendo\Dataviz\UI;

class DiagramConnection extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the shapes content settings.
    * @param \Kendo\Dataviz\UI\DiagramConnectionContent|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * Defines the shape editable options.
    * @param boolean|\Kendo\Dataviz\UI\DiagramConnectionEditable|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function editable($value) {
        return $this->setProperty('editable', $value);
    }

    /**
    * The connection end cap configuration or type name.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionEndCap|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function endCap($value) {
        return $this->setProperty('endCap', $value);
    }

    /**
    * Defines the source of the connection.
    * @param string|float|\Kendo\Dataviz\UI\DiagramConnectionFrom|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function from($value) {
        return $this->setProperty('from', $value);
    }

    /**
    * Specifies the name of the source shape connector that should be used by default.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function fromConnector($value) {
        return $this->setProperty('fromConnector', $value);
    }

    /**
    * Defines the hover configuration.
    * @param \Kendo\Dataviz\UI\DiagramConnectionHover|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function hover($value) {
        return $this->setProperty('hover', $value);
    }

    /**
    * Adds DiagramConnectionPoint to the DiagramConnection.
    * @param \Kendo\Dataviz\UI\DiagramConnectionPoint|array,... $value one or more DiagramConnectionPoint to add.
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function addPoint($value) {
        return $this->add('points', func_get_args());
    }

    /**
    * Defines the connection selection configuration.
    * @param \Kendo\Dataviz\UI\DiagramConnectionSelection|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function selection($value) {
        return $this->setProperty('selection', $value);
    }

    /**
    * The connection start cap configuration or type name.
    * @param string|\Kendo\Dataviz\UI\DiagramConnectionStartCap|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function startCap($value) {
        return $this->setProperty('startCap', $value);
    }

    /**
    * Defines the stroke configuration.
    * @param \Kendo\Dataviz\UI\DiagramConnectionStroke|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function stroke($value) {
        return $this->setProperty('stroke', $value);
    }

    /**
    * Defines the connection to.
    * @param string|float|\Kendo\Dataviz\UI\DiagramConnectionTo|array $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function to($value) {
        return $this->setProperty('to', $value);
    }

    /**
    * Specifies the name of the target shape connector that should be used by default.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function toConnector($value) {
        return $this->setProperty('toConnector', $value);
    }

    /**
    * The connection type.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramConnection
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

//<< Properties
}

?>
