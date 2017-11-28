<?php

namespace Kendo\UI;

class MultiSelect extends \Kendo\UI\Widget {
    public function name() {
        return 'MultiSelect';
    }

    protected function createElement() {
        return new \Kendo\Html\Element('select');
    }
//>> Properties

    /**
    * Configures the opening and closing animations of the suggestion popup. Setting the animation option to false will disable the opening and closing animations. As a result the suggestion popup will open and close instantly. is not a valid configuration.
    * @param boolean|\Kendo\UI\MultiSelectAnimation|array $value
    * @return \Kendo\UI\MultiSelect
    */
    public function animation($value) {
        return $this->setProperty('animation', $value);
    }

    /**
    * Controls whether to bind the widget to the data source on initialization.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
    * Controls whether to close the widget suggestion list on item selection.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function autoClose($value) {
        return $this->setProperty('autoClose', $value);
    }

    /**
    * If set to true, the widget automatically adjusts the width of the popup element and does not wrap up the item label.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function autoWidth($value) {
        return $this->setProperty('autoWidth', $value);
    }

    /**
    * Unless this options is set to false, a button will appear when hovering the widget. Clicking that button will reset the widget's value and will trigger the change event.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function clearButton($value) {
        return $this->setProperty('clearButton', $value);
    }

    /**
    * Sets the data source of the MultiSelect.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\UI\MultiSelect
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * The field of the data item that provides the text content of the list items. The widget will filter the data source based on this field.
    * @param string $value
    * @return \Kendo\UI\MultiSelect
    */
    public function dataTextField($value) {
        return $this->setProperty('dataTextField', $value);
    }

    /**
    * The field of the data item that provides the value of the widget.
    * @param string $value
    * @return \Kendo\UI\MultiSelect
    */
    public function dataValueField($value) {
        return $this->setProperty('dataValueField', $value);
    }

    /**
    * Specifies the delay in milliseconds after which the MultiSelect will start filtering dataSource.
    * @param float $value
    * @return \Kendo\UI\MultiSelect
    */
    public function delay($value) {
        return $this->setProperty('delay', $value);
    }

    /**
    * If set to false the widget will be disabled and will not allow user input. The widget is enabled by default and allows user input.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function enable($value) {
        return $this->setProperty('enable', $value);
    }

    /**
    * If set to true the widget will not show all items when the text of the search input cleared. By default the widget shows all items when the text of the search input is cleared. Works in conjunction with minLength.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function enforceMinLength($value) {
        return $this->setProperty('enforceMinLength', $value);
    }

    /**
    * The filtering method used to determine the suggestions for the current value. Filtration is turned of by default, and can be performed over string values only (either the widget's data has to be an array of strings, or over the field, configured in the dataTextField option).
The supported filter values are startswith, endswith and contains.
    * @param string $value
    * @return \Kendo\UI\MultiSelect
    */
    public function filter($value) {
        return $this->setProperty('filter', $value);
    }

    /**
    * Sets the fixedGroupTemplate option of the MultiSelect.
    * The template used to render the fixed header group. By default the widget displays only the value of the current group.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\MultiSelect
    */
    public function fixedGroupTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('fixedGroupTemplate', $value);
    }

    /**
    * Sets the fixedGroupTemplate option of the MultiSelect.
    * The template used to render the fixed header group. By default the widget displays only the value of the current group.
    * @param string $value The template content.
    * @return \Kendo\UI\MultiSelect
    */
    public function fixedGroupTemplate($value) {
        return $this->setProperty('fixedGroupTemplate', $value);
    }

    /**
    * Sets the footerTemplate option of the MultiSelect.
    * The template used to render the footer template. The footer template receives the widget itself as a part of the data argument. Use the widget fields directly in the template.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\MultiSelect
    */
    public function footerTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('footerTemplate', $value);
    }

    /**
    * Sets the footerTemplate option of the MultiSelect.
    * The template used to render the footer template. The footer template receives the widget itself as a part of the data argument. Use the widget fields directly in the template.
    * @param string $value The template content.
    * @return \Kendo\UI\MultiSelect
    */
    public function footerTemplate($value) {
        return $this->setProperty('footerTemplate', $value);
    }

    /**
    * Sets the groupTemplate option of the MultiSelect.
    * The template used to render the groups. By default the widget displays only the value of the group.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\MultiSelect
    */
    public function groupTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('groupTemplate', $value);
    }

    /**
    * Sets the groupTemplate option of the MultiSelect.
    * The template used to render the groups. By default the widget displays only the value of the group.
    * @param string $value The template content.
    * @return \Kendo\UI\MultiSelect
    */
    public function groupTemplate($value) {
        return $this->setProperty('groupTemplate', $value);
    }

    /**
    * The height of the suggestion popup in pixels. The default value is 200 pixels.
    * @param float $value
    * @return \Kendo\UI\MultiSelect
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * If set to true the first suggestion will be automatically highlighted.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function highlightFirst($value) {
        return $this->setProperty('highlightFirst', $value);
    }

    /**
    * If set to false case-sensitive search will be performed to find suggestions. The widget performs case-insensitive searching by default.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function ignoreCase($value) {
        return $this->setProperty('ignoreCase', $value);
    }

    /**
    * The minimum number of characters the user must type before a search is performed. Set to a higher value if the search could match a lot of items.
A zero value means that a request will be made as soon as the user focuses the widget.
    * @param float $value
    * @return \Kendo\UI\MultiSelect
    */
    public function minLength($value) {
        return $this->setProperty('minLength', $value);
    }

    /**
    * Defines the limit of the selected items. If set to null widget will not limit number of the selected items.
    * @param float $value
    * @return \Kendo\UI\MultiSelect
    */
    public function maxSelectedItems($value) {
        return $this->setProperty('maxSelectedItems', $value);
    }

    /**
    * Sets the noDataTemplate option of the MultiSelect.
    * The template used to render the "no data" template, which will be displayed if no results are found or the underlying data source is empty.
The noData template receives the widget itself as a part of the data argument. The template will be evaluated on every widget data bound.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\MultiSelect
    */
    public function noDataTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('noDataTemplate', $value);
    }

    /**
    * Sets the noDataTemplate option of the MultiSelect.
    * The template used to render the "no data" template, which will be displayed if no results are found or the underlying data source is empty.
The noData template receives the widget itself as a part of the data argument. The template will be evaluated on every widget data bound.
    * @param string $value The template content.
    * @return \Kendo\UI\MultiSelect
    */
    public function noDataTemplate($value) {
        return $this->setProperty('noDataTemplate', $value);
    }

    /**
    * The hint displayed by the widget when it is empty. Not set by default.
    * @param string $value
    * @return \Kendo\UI\MultiSelect
    */
    public function placeholder($value) {
        return $this->setProperty('placeholder', $value);
    }

    /**
    * The options that will be used for the popup initialization. For more details about the available options
refer to Popup documentation.
    * @param \Kendo\UI\MultiSelectPopup|array $value
    * @return \Kendo\UI\MultiSelect
    */
    public function popup($value) {
        return $this->setProperty('popup', $value);
    }

    /**
    * Sets the headerTemplate option of the MultiSelect.
    * Specifies a static HTML content, which will be rendered as a header of the popup element.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\MultiSelect
    */
    public function headerTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('headerTemplate', $value);
    }

    /**
    * Sets the headerTemplate option of the MultiSelect.
    * Specifies a static HTML content, which will be rendered as a header of the popup element.
    * @param string $value The template content.
    * @return \Kendo\UI\MultiSelect
    */
    public function headerTemplate($value) {
        return $this->setProperty('headerTemplate', $value);
    }

    /**
    * Sets the itemTemplate option of the MultiSelect.
    * The template used to render the items in the popup list.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\MultiSelect
    */
    public function itemTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('itemTemplate', $value);
    }

    /**
    * Sets the itemTemplate option of the MultiSelect.
    * The template used to render the items in the popup list.
    * @param string $value The template content.
    * @return \Kendo\UI\MultiSelect
    */
    public function itemTemplate($value) {
        return $this->setProperty('itemTemplate', $value);
    }

    /**
    * Sets the tagTemplate option of the MultiSelect.
    * The template used to render the tags.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\MultiSelect
    */
    public function tagTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('tagTemplate', $value);
    }

    /**
    * Sets the tagTemplate option of the MultiSelect.
    * The template used to render the tags.
    * @param string $value The template content.
    * @return \Kendo\UI\MultiSelect
    */
    public function tagTemplate($value) {
        return $this->setProperty('tagTemplate', $value);
    }

    /**
    * The mode used to render the selected tags. The available modes are:
- multiple - renders a tag for every selected value
- single - renders only one tag that shows the number of the selected values
    * @param string $value
    * @return \Kendo\UI\MultiSelect
    */
    public function tagMode($value) {
        return $this->setProperty('tagMode', $value);
    }

    /**
    * Define the value of the widget
    * @param array $value
    * @return \Kendo\UI\MultiSelect
    */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

    /**
    * Specifies the value binding behavior for the widget. If set to true, the View-Model field will be updated with the selected item value field. If set to false, the View-Model field will be updated with the selected item.
    * @param boolean $value
    * @return \Kendo\UI\MultiSelect
    */
    public function valuePrimitive($value) {
        return $this->setProperty('valuePrimitive', $value);
    }

    /**
    * Enables the virtualization feature of the widget. The configuration can be set on an object, which contains two properties - itemHeight and valueMapper.For detailed information, refer to the article on virtualization.
    * @param boolean|\Kendo\UI\MultiSelectVirtual|array $value
    * @return \Kendo\UI\MultiSelect
    */
    public function virtual($value) {
        return $this->setProperty('virtual', $value);
    }

    /**
    * Sets the change event of the MultiSelect.
    * Fired when the value of the widget is changed by the user.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MultiSelect
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
    * Sets the close event of the MultiSelect.
    * Fired when the popup of the widget is closed.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MultiSelect
    */
    public function close($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
    * Sets the dataBound event of the MultiSelect.
    * Fired when the widget is bound to data from its data source.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MultiSelect
    */
    public function dataBound($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
    * Sets the filtering event of the MultiSelect.
    * Fired when the widget is about to filter the data source.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MultiSelect
    */
    public function filtering($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('filtering', $value);
    }

    /**
    * Sets the open event of the MultiSelect.
    * Fired when the popup of the widget is opened by the user.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MultiSelect
    */
    public function open($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }

    /**
    * Sets the select event of the MultiSelect.
    * Fired when an item from the popup is selected by the user.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MultiSelect
    */
    public function select($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
    * Sets the deselect event of the MultiSelect.
    * Fired when an item is deselected or tag is removed.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\MultiSelect
    */
    public function deselect($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('deselect', $value);
    }


//<< Properties
}

?>
