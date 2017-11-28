<?php

namespace Kendo\UI;

class PopupAnimation extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The animation played when the popup is closed.
    * @param \Kendo\UI\PopupAnimationClose|array $value
    * @return \Kendo\UI\PopupAnimation
    */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
    * The animation played when the calendar popup is opened.
    * @param \Kendo\UI\PopupAnimationOpen|array $value
    * @return \Kendo\UI\PopupAnimation
    */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

//<< Properties
}

?>
