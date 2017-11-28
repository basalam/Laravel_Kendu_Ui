<?php

namespace Kendo\UI;

class EditorSerialization extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Indicates whether the characters outside the ASCII range will be encoded as HTML entities. By default, they are encoded.
    * @param boolean $value
    * @return \Kendo\UI\EditorSerialization
    */
    public function entities($value) {
        return $this->setProperty('entities', $value);
    }

    /**
    * Indicates whether inline scripts will be serialized and posted to the server.
    * @param boolean $value
    * @return \Kendo\UI\EditorSerialization
    */
    public function scripts($value) {
        return $this->setProperty('scripts', $value);
    }

    /**
    * Indicates whether the font styles will be saved as semantic (strong / em / span) tags,
or as presentational (b / i / u / font) tags. Used for outputting content for legacy systems.
    * @param boolean $value
    * @return \Kendo\UI\EditorSerialization
    */
    public function semantic($value) {
        return $this->setProperty('semantic', $value);
    }

//<< Properties
}

?>
