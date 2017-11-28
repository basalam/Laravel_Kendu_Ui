<?php

namespace Kendo\Dataviz\UI;

class RadialGaugeScaleLabelsMargin extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The top margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsMargin
    */
    public function top($value) {
        return $this->setProperty('top', $value);
    }

    /**
    * The bottom margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsMargin
    */
    public function bottom($value) {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsMargin
    */
    public function left($value) {
        return $this->setProperty('left', $value);
    }

    /**
    * The right margin of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsMargin
    */
    public function right($value) {
        return $this->setProperty('right', $value);
    }

//<< Properties
}

?>
