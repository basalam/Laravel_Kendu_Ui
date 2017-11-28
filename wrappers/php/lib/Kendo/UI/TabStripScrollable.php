<?php

namespace Kendo\UI;

class TabStripScrollable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Sets the scroll amount (in pixels) applied when the user clicks on a scroll button.
    * @param float $value
    * @return \Kendo\UI\TabStripScrollable
    */
    public function distance($value) {
        return $this->setProperty('distance', $value);
    }

//<< Properties
}

?>
