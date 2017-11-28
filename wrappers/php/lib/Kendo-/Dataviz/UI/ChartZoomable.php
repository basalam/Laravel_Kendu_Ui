<?php

namespace Kendo\Dataviz\UI;

class ChartZoomable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies if the chart can be zoomed using the mouse wheel.
    * @param boolean|\Kendo\Dataviz\UI\ChartZoomableMousewheel|array $value
    * @return \Kendo\Dataviz\UI\ChartZoomable
    */
    public function mousewheel($value) {
        return $this->setProperty('mousewheel', $value);
    }

    /**
    * Specifies if the chart can be zoomed using selection.
    * @param boolean|\Kendo\Dataviz\UI\ChartZoomableSelection|array $value
    * @return \Kendo\Dataviz\UI\ChartZoomable
    */
    public function selection($value) {
        return $this->setProperty('selection', $value);
    }

//<< Properties
}

?>
