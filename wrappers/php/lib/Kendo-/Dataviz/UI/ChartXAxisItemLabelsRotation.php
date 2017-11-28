<?php

namespace Kendo\Dataviz\UI;

class ChartXAxisItemLabelsRotation extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The alignment of the rotated labels relative to the slot center. The supported values are "end" and "center". By default the closest end of the label will be aligned to the center. If set to "center", the center of the rotated label will be aligned instead.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemLabelsRotation
    */
    public function align($value) {
        return $this->setProperty('align', $value);
    }

    /**
    * The rotation angle of the labels. By default the labels are not rotated. Can be set to "auto" in which case the labels will be rotated only if the slot size is not sufficient for the entire labels.
    * @param float|string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemLabelsRotation
    */
    public function angle($value) {
        return $this->setProperty('angle', $value);
    }

//<< Properties
}

?>
