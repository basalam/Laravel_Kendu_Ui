<?php

namespace Kendo\Dataviz\UI;

class DiagramEditableDrag extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies the shapes drag snap options.
    * @param boolean|\Kendo\Dataviz\UI\DiagramEditableDragSnap|array $value
    * @return \Kendo\Dataviz\UI\DiagramEditableDrag
    */
    public function snap($value) {
        return $this->setProperty('snap', $value);
    }

//<< Properties
}

?>
