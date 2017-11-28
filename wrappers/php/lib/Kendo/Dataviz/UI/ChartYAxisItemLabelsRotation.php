<?php

namespace Kendo\Dataviz\UI;

class ChartYAxisItemLabelsRotation extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The alignment of the rotated labels relative to the slot center. The supported values are "end" and "center". By default the closest end of the label will be aligned to the center. If set to "center", the center of the rotated label will be aligned instead.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartYAxisItemLabelsRotation
    */
    public function align($value) {
        return $this->setProperty('align', $value);
    }

    /**
    * The rotation angle of the labels. By default the labels are not rotated.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartYAxisItemLabelsRotation
    */
    public function angle($value) {
        return $this->setProperty('angle', $value);
    }

//<< Properties
}

?>
