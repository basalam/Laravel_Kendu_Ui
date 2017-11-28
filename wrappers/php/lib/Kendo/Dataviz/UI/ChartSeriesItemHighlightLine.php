<?php

namespace Kendo\Dataviz\UI;

class ChartSeriesItemHighlightLine extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The dash type of the highlight line.The following dash types are supported:
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemHighlightLine
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The line color. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemHighlightLine
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The opacity of the line. By default the border is opaque.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemHighlightLine
    */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
    * The width of the line.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemHighlightLine
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
