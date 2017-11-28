<?php

namespace Kendo\UI;

class ComboBoxVirtual extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies the height of the virtual item. All items in the virtualized list must have the same height.
If the developer does not specify one, the framework will automatically set itemHeight based on the current theme and font size.
    * @param float $value
    * @return \Kendo\UI\ComboBoxVirtual
    */
    public function itemHeight($value) {
        return $this->setProperty('itemHeight', $value);
    }

    /**
    * The changes introduced with the Kendo UI R3 2016 release enable you to determine if the valueMapper must resolve a value to an index or a value to a dataItem. This is configured through the mapValueTo option that accepts two possible values - "index" or "dataItem". By default, the mapValueTo is set to "index", which does not affect the current behavior of the virtualization process.For more information, refer to the article on virtualization.
    * @param string $value
    * @return \Kendo\UI\ComboBoxVirtual
    */
    public function mapValueTo($value) {
        return $this->setProperty('mapValueTo', $value);
    }

    /**
    * Sets the valueMapper option of the ComboBoxVirtual.
    * The widget calls the valueMapper function when the widget receives a value, that is not fetched from the remote server yet.
The widget will pass the selected value(s) in the valueMapper function. In turn, the valueMapper implementation should return the respective data item(s) index/indices.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ComboBoxVirtual
    */
    public function valueMapper($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('valueMapper', $value);
    }

//<< Properties
}

?>
