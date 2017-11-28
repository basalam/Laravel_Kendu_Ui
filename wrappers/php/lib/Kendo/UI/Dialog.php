<?php

namespace Kendo\UI;

class Dialog extends \Kendo\UI\Widget {
    public function name() {
        return 'Dialog';
    }
//>> Properties

    /**
    * Adds DialogAction to the Dialog.
    * @param \Kendo\UI\DialogAction|array,... $value one or more DialogAction to add.
    * @return \Kendo\UI\Dialog
    */
    public function addAction($value) {
        return $this->add('actions', func_get_args());
    }

    /**
    * A collection of {Animation} objects, used to change default animations. A value of false will disable all animations in the widget. is not a valid configuration.
    * @param boolean|\Kendo\UI\DialogAnimation|array $value
    * @return \Kendo\UI\Dialog
    */
    public function animation($value) {
        return $this->setProperty('animation', $value);
    }

    /**
    * Specifies the possible layout of the action buttons in the Dialog.Possible values are:
    * @param string $value
    * @return \Kendo\UI\Dialog
    */
    public function buttonLayout($value) {
        return $this->setProperty('buttonLayout', $value);
    }

    /**
    * Specifies whether a close button should be rendered at the top corner of the dialog.
    * @param boolean $value
    * @return \Kendo\UI\Dialog
    */
    public function closable($value) {
        return $this->setProperty('closable', $value);
    }

    /**
    * Specifies height of the dialog.
    * @param float|string $value
    * @return \Kendo\UI\Dialog
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * The maximum height (in pixels) that may be achieved by resizing the dialog.
    * @param float $value
    * @return \Kendo\UI\Dialog
    */
    public function maxHeight($value) {
        return $this->setProperty('maxHeight', $value);
    }

    /**
    * The maximum width (in pixels) that may be achieved by resizing the dialog.
    * @param float $value
    * @return \Kendo\UI\Dialog
    */
    public function maxWidth($value) {
        return $this->setProperty('maxWidth', $value);
    }

    /**
    * Defines the text of the labels that are shown within the dialog. Used primarily for localization.
    * @param \Kendo\UI\DialogMessages|array $value
    * @return \Kendo\UI\Dialog
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * The minimum height (in pixels) that may be achieved by resizing the dialog.
    * @param float $value
    * @return \Kendo\UI\Dialog
    */
    public function minHeight($value) {
        return $this->setProperty('minHeight', $value);
    }

    /**
    * The minimum width (in pixels) that may be achieved by resizing the dialog.
    * @param float $value
    * @return \Kendo\UI\Dialog
    */
    public function minWidth($value) {
        return $this->setProperty('minWidth', $value);
    }

    /**
    * Specifies whether the dialog should show a modal overlay over the page.
    * @param boolean $value
    * @return \Kendo\UI\Dialog
    */
    public function modal($value) {
        return $this->setProperty('modal', $value);
    }

    /**
    * The text in the dialog title bar. If false, the dialog will be displayed without a title bar.
    * @param string|boolean $value
    * @return \Kendo\UI\Dialog
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
    * Specifies whether the dialog will be initially visible.
    * @param boolean $value
    * @return \Kendo\UI\Dialog
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
    * Specifies width of the dialog.
    * @param float|string $value
    * @return \Kendo\UI\Dialog
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * Sets the close event of the Dialog.
    * Triggered when a Dialog is closed (by a user or through the close() method).
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Dialog
    */
    public function close($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
    * Sets the hide event of the Dialog.
    * Triggered when a Dialog has finished its closing animation.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Dialog
    */
    public function hide($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('hide', $value);
    }

    /**
    * Sets the initOpen event of the Dialog.
    * Triggered when a Dialog is opened for the first time (i.e. the open() method is called).
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Dialog
    */
    public function initOpen($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('initOpen', $value);
    }

    /**
    * Sets the open event of the Dialog.
    * Triggered when a Dialog is opened (i.e. the open() method is called).
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Dialog
    */
    public function open($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }

    /**
    * Sets the show event of the Dialog.
    * Triggered when a Dialog has finished its opening animation.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Dialog
    */
    public function show($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('show', $value);
    }


    /**
    * Sets the HTML content of the Dialog.
    * @param string $value
    * @return \Kendo\UI\Dialog
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * Starts output bufferring. Any following markup will be set as the content of the Dialog.
    */
    public function startContent() {
        ob_start();
    }

    /**
    * Stops output bufferring and sets the preceding markup as the content of the Dialog.
    */
    public function endContent() {
        $this->content(ob_get_clean());
    }

//<< Properties
}

?>
