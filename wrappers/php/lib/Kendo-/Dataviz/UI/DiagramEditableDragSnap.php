<?php

namespace Kendo\Dataviz\UI;

class DiagramEditableDragSnap extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies the shapes drag snap size.
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramEditableDragSnap
    */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

//<< Properties
}

?>
