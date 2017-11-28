<?php

namespace Kendo\Dataviz\UI;

class StockChartNavigatorCategoryAxisNotes extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The position of the category axis note.
    * @param string $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotes
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
    * The icon of the notes.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotesIcon|array $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotes
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * The label of the notes.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotesLabel|array $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotes
    */
    public function label($value) {
        return $this->setProperty('label', $value);
    }

    /**
    * The line of the notes.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotesLine|array $value
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotes
    */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
    * Adds StockChartNavigatorCategoryAxisNotesDataItem to the StockChartNavigatorCategoryAxisNotes.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotesDataItem|array,... $value one or more StockChartNavigatorCategoryAxisNotesDataItem to add.
    * @return \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxisNotes
    */
    public function addDataItem($value) {
        return $this->add('data', func_get_args());
    }

//<< Properties
}

?>
