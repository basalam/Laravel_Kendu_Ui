<?php

namespace Kendo\UI;

class UploadFile extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The extension of the initial file.
    * @param string $value
    * @return \Kendo\UI\UploadFile
    */
    public function extension($value) {
        return $this->setProperty('extension', $value);
    }

    /**
    * The name of the initial file.
    * @param string $value
    * @return \Kendo\UI\UploadFile
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * The size of the initial file.
    * @param float $value
    * @return \Kendo\UI\UploadFile
    */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

//<< Properties
}

?>
