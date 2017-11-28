<?php

namespace Kendo\Dataviz\UI;

class ChartZoomableSelection extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies a keyboard key that should be pressed to activate the selection. The supported values are:
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartZoomableSelection
    */
    public function key($value) {
        return $this->setProperty('key', $value);
    }

    /**
    * Specifies an axis that should not be zoomed. The supported values are none, x and y.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartZoomableSelection
    */
    public function lock($value) {
        return $this->setProperty('lock', $value);
    }

//<< Properties
}

?>
