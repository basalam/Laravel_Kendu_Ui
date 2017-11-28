<?php

namespace Kendo\UI;

class GridColumnSortable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Sets the compare option of the GridColumnSortable.
    * A JavaScript function which is used to compare the values. It has the same signature as the compare function accepted by Array.sort.The basic function implementation is as follows (pseudo-code):
```pseudo
    function compare(a, b, descending) {
      if (a is less than b by some ordering criterion) {
        return -1;
      }```One notable exception is that we also supply a third parameter that indicates the sort direction (true for descending).
See How-to: Stable Sort in Chrome for more details on how this can be useful.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\GridColumnSortable
    */
    public function compare($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('compare', $value);
    }

//<< Properties
}

?>
