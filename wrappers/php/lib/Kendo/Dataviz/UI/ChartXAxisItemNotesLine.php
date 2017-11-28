<?php

namespace Kendo\Dataviz\UI;

class ChartXAxisItemNotesLine extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The dash type of the note line.The following dash types are supported:
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesLine
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The line width of the notes.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesLine
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * The line color of the notes.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesLine
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The length of the connecting lines in pixels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotesLine
    */
    public function length($value) {
        return $this->setProperty('length', $value);
    }

//<< Properties
}

?>
