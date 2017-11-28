<?php

namespace Kendo\Dataviz\UI;

class DiagramShapeDefaultsFillGradientStop extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The stop offset from the start of the element.
Ranges from 0 (start of gradient) to 1 (end of gradient).
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradientStop
    */
    public function offset($value) {
        return $this->setProperty('offset', $value);
    }

    /**
    * The color in any of the following formats.| Format         | Description
| ---            | --- | ---
| red            | Basic or Extended CSS Color name
| #ff0000        | Hex RGB value
| rgb(255, 0, 0) | RGB valueSpecifying 'none', 'transparent' or '' (empty string) will clear the fill.
    * @param string $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradientStop
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The fill opacity.
Ranges from 0 (completely transparent) to 1 (completely opaque).
    * @param float $value
    * @return \Kendo\Dataviz\UI\DiagramShapeDefaultsFillGradientStop
    */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

//<< Properties
}

?>
