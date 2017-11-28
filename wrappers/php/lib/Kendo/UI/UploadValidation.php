<?php

namespace Kendo\UI;

class UploadValidation extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Lists which file extensions are allowed to be uploaded. Recognizes entries of both .type and type values.
    * @param array $value
    * @return \Kendo\UI\UploadValidation
    */
    public function allowedExtensions($value) {
        return $this->setProperty('allowedExtensions', $value);
    }

    /**
    * Defines the maximum file size that can be uploaded in bytes.
    * @param float $value
    * @return \Kendo\UI\UploadValidation
    */
    public function maxFileSize($value) {
        return $this->setProperty('maxFileSize', $value);
    }

    /**
    * Defines the minimum file size that can be uploaded in bytes.
    * @param float $value
    * @return \Kendo\UI\UploadValidation
    */
    public function minFileSize($value) {
        return $this->setProperty('minFileSize', $value);
    }

//<< Properties
}

?>
