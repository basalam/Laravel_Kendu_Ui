<?php

namespace Kendo\Dataviz\UI;

class ChartZoomableMousewheel extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies an axis that should not be zoomed. The supported values are none, x and y.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartZoomableMousewheel
    */
    public function lock($value) {
        return $this->setProperty('lock', $value);
    }

//<< Properties
}

?>
