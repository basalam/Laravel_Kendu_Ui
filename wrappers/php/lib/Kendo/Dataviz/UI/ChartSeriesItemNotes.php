<?php

namespace Kendo\Dataviz\UI;

class ChartSeriesItemNotes extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The position of the series note.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemNotes
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
    * The icon of the notes.
    * @param \Kendo\Dataviz\UI\ChartSeriesItemNotesIcon|array $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemNotes
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * The label of the notes.
    * @param \Kendo\Dataviz\UI\ChartSeriesItemNotesLabel|array $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemNotes
    */
    public function label($value) {
        return $this->setProperty('label', $value);
    }

    /**
    * The line of the notes.
    * @param \Kendo\Dataviz\UI\ChartSeriesItemNotesLine|array $value
    * @return \Kendo\Dataviz\UI\ChartSeriesItemNotes
    */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
    * Sets the visual option of the ChartSeriesItemNotes.
    * A function that can be used to create a custom visual for the notes. The available argument fields are:
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\ChartSeriesItemNotes
    */
    public function visual($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('visual', $value);
    }

//<< Properties
}

?>
