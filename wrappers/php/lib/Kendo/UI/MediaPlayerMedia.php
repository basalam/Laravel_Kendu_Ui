<?php

namespace Kendo\UI;

class MediaPlayerMedia extends \Kendo\SerializableObject {
//>> Properties

    /**
    * String or an array of objects that hold the URL or URLs of the videos.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMedia
    */
    public function source($value) {
        return $this->setProperty('source', $value);
    }

    /**
    * Specifies the title of the media that will be played.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMedia
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

//<< Properties
}

?>
