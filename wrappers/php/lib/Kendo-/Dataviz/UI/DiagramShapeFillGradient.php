<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeFillGradient extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The type of the gradient. Supported values are:Note that support for radial gradients in VML (IE8 and below) is limited.
Not all configurations are guaranteed to work.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeFillGradient
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
    * The center of the radial gradient.Coordinates are relative to the shape bounding box.
For example [0, 0] is top left and [1, 1] is bottom right.
    * @param array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeFillGradient
    */
    public function center($value) {
        return $this->setProperty('center', $value);
    }

    /**
    * The radius of the radial gradient relative to the shape bounding box.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeFillGradient
    */
    public function radius($value) {
        return $this->setProperty('radius', $value);
    }

    /**
    * The start point of the linear gradient.Coordinates are relative to the shape bounding box.
For example [0, 0] is top left and [1, 1] is bottom right.
    * @param array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeFillGradient
    */
    public function start($value) {
        return $this->setProperty('start', $value);
    }

    /**
    * The end point of the linear gradient.Coordinates are relative to the shape bounding box.
For example [0, 0] is top left and [1, 1] is bottom right.
    * @param array $value
    * @return \Kendo\Dataviz\UI\DiagramShapeFillGradient
    */
    public function end($value) {
        return $this->setProperty('end', $value);
    }

    /**
    * Adds DiagramShapeFillGradientStop to the DiagramShapeFillGradient.
    * @param \Kendo\Dataviz\UI\DiagramShapeFillGradientStop|array,... $value one or more DiagramShapeFillGradientStop to add.
    * @return \Kendo\Dataviz\UI\DiagramShapeFillGradient
    */
    public function addStop($value) {
        return $this->add('stops', func_get_args());
    }

//<< Properties
}

?>
