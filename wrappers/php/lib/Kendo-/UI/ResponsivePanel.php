<?php

namespace Kendo\UI;

class ResponsivePanel extends \Kendo\UI\Widget {
    protected $ignore = array('content');

    public function name() {
        return 'ResponsivePanel';
    }

    protected function createElement() {
        $element = new \Kendo\Html\Element('div');

        $content = $this->getProperty('content');

        if (gettype($content) == "string") {
            $element->html($content);
        } else {
            // serialize content by removing it from the ignore list
            $this->ignore = array_diff(array('content'), $this->ignore);
        }

        return $element;
    }

//>> Properties

    /**
    * If set to false the widget will not close when the page content is touched, after it was opened on a mobile device. You will need to call the close method when the panel needs to close.
    * @param boolean $value
    * @return \Kendo\UI\ResponsivePanel
    */
    public function autoClose($value) {
        return $this->setProperty('autoClose', $value);
    }

    /**
    * Specifies the page width at which the widget will be hidden and its toggle button will become visible.
    * @param float $value
    * @return \Kendo\UI\ResponsivePanel
    */
    public function breakpoint($value) {
        return $this->setProperty('breakpoint', $value);
    }

    /**
    * Specifies the direction from which the hidden element will open up, once the toggle button has been activated. Valid values are "left", "right", and "top".
    * @param string $value
    * @return \Kendo\UI\ResponsivePanel
    */
    public function orientation($value) {
        return $this->setProperty('orientation', $value);
    }

    /**
    * Specifies the selector for the toggle button that will show and hide the responsive panel.
    * @param string $value
    * @return \Kendo\UI\ResponsivePanel
    */
    public function toggleButton($value) {
        return $this->setProperty('toggleButton', $value);
    }

    /**
    * Sets the close event of the ResponsivePanel.
    * Triggered before the responsive panel is closed. Cancellable.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ResponsivePanel
    */
    public function close($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
    * Sets the open event of the ResponsivePanel.
    * Triggered before the responsive panel is opened. Cancellable.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ResponsivePanel
    */
    public function open($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }


    /**
    * Sets the HTML content of the ResponsivePanel.
    * @param string $value
    * @return \Kendo\UI\ResponsivePanel
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * Starts output bufferring. Any following markup will be set as the content of the ResponsivePanel.
    */
    public function startContent() {
        ob_start();
    }

    /**
    * Stops output bufferring and sets the preceding markup as the content of the ResponsivePanel.
    */
    public function endContent() {
        $this->content(ob_get_clean());
    }

//<< Properties
}

?>
