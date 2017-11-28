<?php

namespace Kendo\Dataviz\UI;

class RadialGaugeScaleLabelsPadding extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The top padding of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsPadding
    */
    public function top($value) {
        return $this->setProperty('top', $value);
    }

    /**
    * The bottom padding of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsPadding
    */
    public function bottom($value) {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left padding of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsPadding
    */
    public function left($value) {
        return $this->setProperty('left', $value);
    }

    /**
    * The right padding of the labels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\RadialGaugeScaleLabelsPadding
    */
    public function right($value) {
        return $this->setProperty('right', $value);
    }

//<< Properties
}

?>
