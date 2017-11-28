<?php

namespace Kendo\UI;

class NumericTextBox extends \Kendo\UI\Widget {
    protected function name() {
        return 'NumericTextBox';
    }

    protected function createElement() {
        return new \Kendo\Html\Element('input', true);
    }
//>> Properties

    /**
    * Specifies the culture info used by the widget.
    * @param string $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function culture($value) {
        return $this->setProperty('culture', $value);
    }

    /**
    * Specifies the number precision applied to the widget value and when the NumericTextBox is focused. If not set, the precision defined by the current culture is used. If the user enters a number with a greater precision than is currently configured, the widget value will be rounded. For example, if decimals is 2 and the user inputs 12.346, the value will become 12.35. If the user inputs 12.99, the value will become 13.00.Compare with the format property.
    * @param float $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function decimals($value) {
        return $this->setProperty('decimals', $value);
    }

    /**
    * Specifies the text of the tooltip on the down arrow.
    * @param string $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function downArrowText($value) {
        return $this->setProperty('downArrowText', $value);
    }

    /**
    * Specifies the number format used when the widget is not focused. Any valid number format is allowed.Compare with the decimals property.
    * @param string $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
    * Specifies the largest value the user can enter.
    * @param float $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
    * Specifies the smallest value the user can enter.
    * @param float $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
    * The hint displayed by the widget when it is empty. Not set by default.
    * @param string $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function placeholder($value) {
        return $this->setProperty('placeholder', $value);
    }

    /**
    * Specifies whether the decimals length should be restricted during typing. The length of the fraction is defined by the decimals value.
    * @param boolean $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function restrictDecimals($value) {
        return $this->setProperty('restrictDecimals', $value);
    }

    /**
    * Specifies whether the value should be rounded or truncated. The length of the fraction is defined by the decimals value.
    * @param boolean $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function round($value) {
        return $this->setProperty('round', $value);
    }

    /**
    * Specifies whether the up and down spin buttons should be rendered
    * @param boolean $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function spinners($value) {
        return $this->setProperty('spinners', $value);
    }

    /**
    * Specifies the value used to increment or decrement widget value.
    * @param float $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function step($value) {
        return $this->setProperty('step', $value);
    }

    /**
    * Specifies the text of the tooltip on the up arrow.
    * @param string $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function upArrowText($value) {
        return $this->setProperty('upArrowText', $value);
    }

    /**
    * Specifies the value of the NumericTextBox widget.
    * @param float $value
    * @return \Kendo\UI\NumericTextBox
    */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

    /**
    * Sets the change event of the NumericTextBox.
    * Fires when the value is changed
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\NumericTextBox
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
    * Sets the spin event of the NumericTextBox.
    * Fires when the value is changed from the spin buttons
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\NumericTextBox
    */
    public function spin($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('spin', $value);
    }


//<< Properties
}

?>
