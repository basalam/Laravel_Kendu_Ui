<?php

namespace Kendo\UI;

class DialogAnimation extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The animation that will be used when a Dialog closes.
    * @param \Kendo\UI\DialogAnimationClose|array $value
    * @return \Kendo\UI\DialogAnimation
    */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
    * The animation that will be used when a Dialog opens.
    * @param \Kendo\UI\DialogAnimationOpen|array $value
    * @return \Kendo\UI\DialogAnimation
    */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

//<< Properties
}

?>
