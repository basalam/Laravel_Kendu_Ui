<?php

namespace Kendo\Dataviz\UI;

class SparklineSeriesItemOverlay extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The gradient name.Available options:glass**(bar and column series)
**roundedBevel(pie series)
sharpBevel**(pie series)
**none
    * @param string $value
    * @return \Kendo\Dataviz\UI\SparklineSeriesItemOverlay
    */
    public function gradient($value) {
        return $this->setProperty('gradient', $value);
    }

//<< Properties
}

?>
