<?php

namespace Kendo\UI;

class MediaPlayerMessages extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Pause button tooltip message.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMessages
    */
    public function pause($value) {
        return $this->setProperty('pause', $value);
    }

    /**
    * Play button tooltip message.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMessages
    */
    public function play($value) {
        return $this->setProperty('play', $value);
    }

    /**
    * Mute button tooltip message.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMessages
    */
    public function mute($value) {
        return $this->setProperty('mute', $value);
    }

    /**
    * Unmute button tooltip message.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMessages
    */
    public function unmute($value) {
        return $this->setProperty('unmute', $value);
    }

    /**
    * Quality button tooltip message.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMessages
    */
    public function quality($value) {
        return $this->setProperty('quality', $value);
    }

    /**
    * Fullscreen button tooltip message.
    * @param string $value
    * @return \Kendo\UI\MediaPlayerMessages
    */
    public function fullscreen($value) {
        return $this->setProperty('fullscreen', $value);
    }

//<< Properties
}

?>
