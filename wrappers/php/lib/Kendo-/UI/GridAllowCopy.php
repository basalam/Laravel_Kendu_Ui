<?php

namespace Kendo\UI;

class GridAllowCopy extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Changes the delimeter between the items on the same row. Use this option if you want to change the default TSV format to CSV - set the delimeter to comma ','.
    * @param string| $value
    * @return \Kendo\UI\GridAllowCopy
    */
    public function delimeter($value) {
        return $this->setProperty('delimeter', $value);
    }

//<< Properties
}

?>
