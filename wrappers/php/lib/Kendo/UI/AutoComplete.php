<?php

namespace Kendo\UI;

class AutoComplete extends \Kendo\UI\Widget {
    protected function name() {
        return 'AutoComplete';
    }

    protected function createElement() {
        return new \Kendo\Html\Element('input', true);
    }
//>> Properties

    /**
    * Configures the opening and closing animations of the suggestion popup. Setting the animation option to false will disable the opening and closing animations. As a result the suggestion popup will open and close instantly. is not a valid configuration.
    * @param boolean|\Kendo\UI\AutoCompleteAnimation|array $value
    * @return \Kendo\UI\AutoComplete
    */
    public function animation($value) {
        return $this->setProperty('animation', $value);
    }

    /**
    * If set to true, the widget automatically adjusts the width of the popup element and does not wrap up the item label.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function autoWidth($value) {
        return $this->setProperty('autoWidth', $value);
    }

    /**
    * Sets the data source of the AutoComplete.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\UI\AutoComplete
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * Unless this options is set to false, a button will appear when hovering the widget. Clicking that button will reset the widget's value and will trigger the change event.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function clearButton($value) {
        return $this->setProperty('clearButton', $value);
    }

    /**
    * The field of the data item used when searching for suggestions.  This is the text that will be displayed in the list of matched results.
    * @param string $value
    * @return \Kendo\UI\AutoComplete
    */
    public function dataTextField($value) {
        return $this->setProperty('dataTextField', $value);
    }

    /**
    * The delay in milliseconds between a keystroke and when the widget displays the suggestion popup.
    * @param float $value
    * @return \Kendo\UI\AutoComplete
    */
    public function delay($value) {
        return $this->setProperty('delay', $value);
    }

    /**
    * If set to false the widget will be disabled and will not allow user input. The widget is enabled by default and allows user input.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function enable($value) {
        return $this->setProperty('enable', $value);
    }

    /**
    * If set to true the widget will not show all items when the text of the search input cleared. By default the widget shows all items when the text of the search input is cleared. Works in conjunction with minLength.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function enforceMinLength($value) {
        return $this->setProperty('enforceMinLength', $value);
    }

    /**
    * The filtering method used to determine the suggestions for the current value. The default filter is "startswith" -
all data items which begin with the current widget value are displayed in the suggestion popup. The supported filter values are startswith, endswith and contains.
    * @param string $value
    * @return \Kendo\UI\AutoComplete
    */
    public function filter($value) {
        return $this->setProperty('filter', $value);
    }

    /**
    * Sets the fixedGroupTemplate option of the AutoComplete.
    * The template used to render the fixed header group. By default the widget displays only the value of the current group.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\AutoComplete
    */
    public function fixedGroupTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('fixedGroupTemplate', $value);
    }

    /**
    * Sets the fixedGroupTemplate option of the AutoComplete.
    * The template used to render the fixed header group. By default the widget displays only the value of the current group.
    * @param string $value The template content.
    * @return \Kendo\UI\AutoComplete
    */
    public function fixedGroupTemplate($value) {
        return $this->setProperty('fixedGroupTemplate', $value);
    }

    /**
    * Sets the footerTemplate option of the AutoComplete.
    * The template used to render the footer template. The footer template receives the widget itself as a part of the data argument. Use the widget fields directly in the template.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\AutoComplete
    */
    public function footerTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('footerTemplate', $value);
    }

    /**
    * Sets the footerTemplate option of the AutoComplete.
    * The template used to render the footer template. The footer template receives the widget itself as a part of the data argument. Use the widget fields directly in the template.
    * @param string $value The template content.
    * @return \Kendo\UI\AutoComplete
    */
    public function footerTemplate($value) {
        return $this->setProperty('footerTemplate', $value);
    }

    /**
    * Sets the groupTemplate option of the AutoComplete.
    * The template used to render the groups. By default the widget displays only the value of the group.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\AutoComplete
    */
    public function groupTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('groupTemplate', $value);
    }

    /**
    * Sets the groupTemplate option of the AutoComplete.
    * The template used to render the groups. By default the widget displays only the value of the group.
    * @param string $value The template content.
    * @return \Kendo\UI\AutoComplete
    */
    public function groupTemplate($value) {
        return $this->setProperty('groupTemplate', $value);
    }

    /**
    * The height of the suggestion popup in pixels. The default value is 200 pixels.
    * @param float $value
    * @return \Kendo\UI\AutoComplete
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * If set to true the first suggestion will be automatically highlighted.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function highlightFirst($value) {
        return $this->setProperty('highlightFirst', $value);
    }

    /**
    * If set to false case-sensitive search will be performed to find suggestions. The widget performs case-insensitive searching by default.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function ignoreCase($value) {
        return $this->setProperty('ignoreCase', $value);
    }

    /**
    * The minimum number of characters the user must type before a search is performed. Set to higher value than 1 if the search could match a lot of items.
    * @param float $value
    * @return \Kendo\UI\AutoComplete
    */
    public function minLength($value) {
        return $this->setProperty('minLength', $value);
    }

    /**
    * Sets the noDataTemplate option of the AutoComplete.
    * The template used to render the "no data" template, which will be displayed if no results are found or the underlying data source is empty.
The noData template receives the widget itself as a part of the data argument. The template will be evaluated on every widget data bound.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\AutoComplete
    */
    public function noDataTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('noDataTemplate', $value);
    }

    /**
    * Sets the noDataTemplate option of the AutoComplete.
    * The template used to render the "no data" template, which will be displayed if no results are found or the underlying data source is empty.
The noData template receives the widget itself as a part of the data argument. The template will be evaluated on every widget data bound.
    * @param string $value The template content.
    * @return \Kendo\UI\AutoComplete
    */
    public function noDataTemplate($value) {
        return $this->setProperty('noDataTemplate', $value);
    }

    /**
    * The hint displayed by the widget when it is empty. Not set by default.
    * @param string $value
    * @return \Kendo\UI\AutoComplete
    */
    public function placeholder($value) {
        return $this->setProperty('placeholder', $value);
    }

    /**
    * The options that will be used for the popup initialization. For more details about the available options
refer to Popup documentation.
    * @param  $value
    * @return \Kendo\UI\AutoComplete
    */
    public function popup($value) {
        return $this->setProperty('popup', $value);
    }

    /**
    * The character used to separate multiple values. Empty by default.
    * @param string|array $value
    * @return \Kendo\UI\AutoComplete
    */
    public function separator($value) {
        return $this->setProperty('separator', $value);
    }

    /**
    * If set to true the widget will automatically use the first suggestion as its value.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function suggest($value) {
        return $this->setProperty('suggest', $value);
    }

    /**
    * Sets the headerTemplate option of the AutoComplete.
    * Specifies a static HTML content, which will be rendered as a header of the popup element.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\AutoComplete
    */
    public function headerTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('headerTemplate', $value);
    }

    /**
    * Sets the headerTemplate option of the AutoComplete.
    * Specifies a static HTML content, which will be rendered as a header of the popup element.
    * @param string $value The template content.
    * @return \Kendo\UI\AutoComplete
    */
    public function headerTemplate($value) {
        return $this->setProperty('headerTemplate', $value);
    }

    /**
    * Sets the template option of the AutoComplete.
    * The template used to render the suggestions. By default the widget displays only the text of the suggestion (configured via dataTextField).
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\AutoComplete
    */
    public function templateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('template', $value);
    }

    /**
    * Sets the template option of the AutoComplete.
    * The template used to render the suggestions. By default the widget displays only the text of the suggestion (configured via dataTextField).
    * @param string $value The template content.
    * @return \Kendo\UI\AutoComplete
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * The value of the widget.
    * @param string $value
    * @return \Kendo\UI\AutoComplete
    */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

    /**
    * Specifies the value binding behavior for the widget when the initial model value is null. If set to true, the View-Model field will be updated with the selected item text field. If set to false, the View-Model field will be updated with the selected item.
    * @param boolean $value
    * @return \Kendo\UI\AutoComplete
    */
    public function valuePrimitive($value) {
        return $this->setProperty('valuePrimitive', $value);
    }

    /**
    * Enables the virtualization feature of the widget. The configuration can be set on an object, which contains two properties - itemHeight and valueMapper.For detailed information, refer to the article on virtualization.
    * @param boolean|\Kendo\UI\AutoCompleteVirtual|array $value
    * @return \Kendo\UI\AutoComplete
    */
    public function virtual($value) {
        return $this->setProperty('virtual', $value);
    }

    /**
    * Sets the change event of the AutoComplete.
    * Fired when the value of the widget is changed by the user.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\AutoComplete
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
    * Sets the close event of the AutoComplete.
    * Fired when the suggestion popup of the widget is closed by the user.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\AutoComplete
    */
    public function close($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
    * Sets the dataBound event of the AutoComplete.
    * Fired when the widget is bound to data from its data source.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\AutoComplete
    */
    public function dataBound($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
    * Sets the filtering event of the AutoComplete.
    * Fired when the widget is about to filter the data source.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\AutoComplete
    */
    public function filtering($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('filtering', $value);
    }

    /**
    * Sets the open event of the AutoComplete.
    * Fired when the suggestion popup of the widget is opened by the user.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\AutoComplete
    */
    public function open($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }

    /**
    * Sets the select event of the AutoComplete.
    * Fired when an item from the suggestion popup is selected by the user.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\AutoComplete
    */
    public function select($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }


//<< Properties
}

?>
