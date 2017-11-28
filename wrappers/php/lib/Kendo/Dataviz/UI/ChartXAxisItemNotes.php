<?php

namespace Kendo\Dataviz\UI;

class ChartXAxisItemNotes extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The position of the x axis note.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotes
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
    * The icon of the notes.
    * @param \Kendo\Dataviz\UI\ChartXAxisItemNotesIcon|array $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotes
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * The label of the notes.
    * @param \Kendo\Dataviz\UI\ChartXAxisItemNotesLabel|array $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotes
    */
    public function label($value) {
        return $this->setProperty('label', $value);
    }

    /**
    * The line of the notes.
    * @param \Kendo\Dataviz\UI\ChartXAxisItemNotesLine|array $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotes
    */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
    * Adds ChartXAxisItemNotesDataItem to the ChartXAxisItemNotes.
    * @param \Kendo\Dataviz\UI\ChartXAxisItemNotesDataItem|array,... $value one or more ChartXAxisItemNotesDataItem to add.
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotes
    */
    public function addDataItem($value) {
        return $this->add('data', func_get_args());
    }

    /**
    * Sets the visual option of the ChartXAxisItemNotes.
    * A function that can be used to create a custom visual for the notes. The available argument fields are:
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\ChartXAxisItemNotes
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
