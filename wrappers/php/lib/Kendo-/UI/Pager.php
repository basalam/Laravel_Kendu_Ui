<?php

namespace Kendo\UI;

class Pager extends \Kendo\UI\Widget {
    protected function name() {
        return 'Pager';
    }
//>> Properties

    /**
    * Indicates whether the pager refresh method will be called within its initialization.
    * @param boolean $value
    * @return \Kendo\UI\Pager
    */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
    * Defines the number of buttons displayed in the numeric pager.
    * @param float $value
    * @return \Kendo\UI\Pager
    */
    public function buttonCount($value) {
        return $this->setProperty('buttonCount', $value);
    }

    /**
    * Sets the data source of the Pager.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\UI\Pager
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * Sets the selectTemplate option of the Pager.
    * The template for selected page number link.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\Pager
    */
    public function selectTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('selectTemplate', $value);
    }

    /**
    * Sets the selectTemplate option of the Pager.
    * The template for selected page number link.
    * @param string $value The template content.
    * @return \Kendo\UI\Pager
    */
    public function selectTemplate($value) {
        return $this->setProperty('selectTemplate', $value);
    }

    /**
    * Sets the linkTemplate option of the Pager.
    * The template for page number links.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\Pager
    */
    public function linkTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('linkTemplate', $value);
    }

    /**
    * Sets the linkTemplate option of the Pager.
    * The template for page number links.
    * @param string $value The template content.
    * @return \Kendo\UI\Pager
    */
    public function linkTemplate($value) {
        return $this->setProperty('linkTemplate', $value);
    }

    /**
    * Defines if a label showing current paging information will be displayed.
    * @param boolean $value
    * @return \Kendo\UI\Pager
    */
    public function info($value) {
        return $this->setProperty('info', $value);
    }

    /**
    * Defines if an input element which allows the user to navigate to given page will be displayed.
    * @param boolean $value
    * @return \Kendo\UI\Pager
    */
    public function input($value) {
        return $this->setProperty('input', $value);
    }

    /**
    * Defines if numeric portion of the pager will be shown.
    * @param boolean $value
    * @return \Kendo\UI\Pager
    */
    public function numeric($value) {
        return $this->setProperty('numeric', $value);
    }

    /**
    * If set to true the pager will display a drop-down which allows the user to pick a page size.
By default the page size drop-down is not displayed.Can be set to an array of predefined page sizes to override the default list.
A special all value is supported. It sets the page size to the total number of records.If a pageSize setting is provided for the data source then this value will be selected initially.
    * @param boolean|array $value
    * @return \Kendo\UI\Pager
    */
    public function pageSizes($value) {
        return $this->setProperty('pageSizes', $value);
    }

    /**
    * Defines if buttons for navigating to the first, last, previous and next pages will be shown.
    * @param boolean $value
    * @return \Kendo\UI\Pager
    */
    public function previousNext($value) {
        return $this->setProperty('previousNext', $value);
    }

    /**
    * Defines if a refresh button will be displayed. Click on that button will call DataSource read() method to get actual data.
    * @param boolean $value
    * @return \Kendo\UI\Pager
    */
    public function refresh($value) {
        return $this->setProperty('refresh', $value);
    }

    /**
    * Defines texts shown within the pager. Use this option to customize or localize the pager messages.
    * @param \Kendo\UI\PagerMessages|array $value
    * @return \Kendo\UI\Pager
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * Sets the change event of the Pager.
    * Fires when the current page has changed.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Pager
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }


//<< Properties
}

?>
