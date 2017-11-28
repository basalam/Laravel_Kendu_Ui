<?php

namespace Kendo\UI;

class MediaPlayer extends \Kendo\UI\Widget {
    public function name() {
        return 'MediaPlayer';
    }
//>> Properties

    /**
    * If set to true, the widget will start playing the video or videos after initializing.
    * @param boolean $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function autoPlay($value) {
        return $this->setProperty('autoPlay', $value);
    }

    /**
    * If set to true, the widget will start playing the video or videos after initializing.
    * @param boolean $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function autoRepeat($value) {
        return $this->setProperty('autoRepeat', $value);
    }

    /**
    * If set to false, the user will be prevented from seeking the video forward.
    * @param boolean $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function forwardSeek($value) {
        return $this->setProperty('forwardSeek', $value);
    }

    /**
    * If set to true, the widget will enter fullscreen mode.
    * @param boolean $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function fullScreen($value) {
        return $this->setProperty('fullScreen', $value);
    }

    /**
    * The object which holds the information about the media that will be played by the control.
    * @param \Kendo\UI\MediaPlayerMedia|array $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function media($value) {
        return $this->setProperty('media', $value);
    }

    /**
    * The object which holds the localization strings.
    * @param \Kendo\UI\MediaPlayerMessages|array $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * If set to true, the video will be played without sound.
    * @param boolean $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function mute($value) {
        return $this->setProperty('mute', $value);
    }

    /**
    * If set to true, the option enables the keyboard navigation for the widget.
    * @param boolean $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function navigatable($value) {
        return $this->setProperty('navigatable', $value);
    }

    /**
    * A value between 0 and 100 that specifies the volume of the video.
    * @param float $value
    * @return \Kendo\UI\MediaPlayer
    */
    public function volume($value) {
        return $this->setProperty('volume', $value);
    }

    /**
    * Sets the end event of the MediaPlayer.
    * Fires when the media finishes playing.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MediaPlayer
    */
    public function end($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('end', $value);
    }

    /**
    * Sets the pause event of the MediaPlayer.
    * Fires when the media is paused.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MediaPlayer
    */
    public function pause($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('pause', $value);
    }

    /**
    * Sets the play event of the MediaPlayer.
    * Fires when the media begins playing.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MediaPlayer
    */
    public function play($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('play', $value);
    }

    /**
    * Sets the ready event of the MediaPlayer.
    * Fires when loading is over and the widget is ready to start playing the media.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MediaPlayer
    */
    public function ready($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('ready', $value);
    }

    /**
    * Sets the timeChange event of the MediaPlayer.
    * Fires when the user selects a new play time.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MediaPlayer
    */
    public function timeChange($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('timeChange', $value);
    }

    /**
    * Sets the volumeChange event of the MediaPlayer.
    * This event is fired upon changing the volume level.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MediaPlayer
    */
    public function volumeChange($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('volumeChange', $value);
    }


//<< Properties
}

?>
