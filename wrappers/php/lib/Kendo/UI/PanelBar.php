<?php

namespace Kendo\UI;

class PanelBar extends \Kendo\UI\Widget {
    protected $ignore = array('items');

    protected function name() {
        return 'PanelBar';
    }

    protected function createElement() {
        $element = new \Kendo\Html\Element('ul');
        $items = $this->getProperty('items');

        $hasContentUrls = false;
        $contentUrls = array();

        if ($items) {
            foreach($items as $item) {
                $element->append($item->createElement());

                if ($hasContentUrls == false) {
                    $hasContentUrls = strlen($item->getProperty("contentUrl"));
                }

                $contentUrls[] = $item->getProperty("contentUrl");
            }
        }

        if ($hasContentUrls) {
            $this->setProperty('contentUrls', $contentUrls);
        }

        return $element;
    }

//>> Properties

    /**
    * A collection of visual animations used when PanelBar items are expand or collapsed through
user interactions. Setting this option to false will disable all animations. is not a valid configuration.
    * @param boolean|\Kendo\UI\PanelBarAnimation|array $value
    * @return \Kendo\UI\PanelBar
    */
    public function animation($value) {
        return $this->setProperty('animation', $value);
    }

    /**
    * If set to false the widget will not bind to the data source during initialization. In this case data binding will occur when the change event of the
data source is fired. By default the widget will bind to the data source specified in the configuration.
    * @param boolean $value
    * @return \Kendo\UI\PanelBar
    */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
    * Sets an array with the URLs from which the PanelBar items content to be loaded from. If only specific items should be loaded via Ajax, then you should set the URLs to the corresponding positions in the array and set the other elements to null.
    * @param array $value
    * @return \Kendo\UI\PanelBar
    */
    public function contentUrls($value) {
        return $this->setProperty('contentUrls', $value);
    }

    /**
    * Sets the field of the data item that provides the image URL of the PanelBar nodes.
    * @param string $value
    * @return \Kendo\UI\PanelBar
    */
    public function dataImageUrlField($value) {
        return $this->setProperty('dataImageUrlField', $value);
    }

    /**
    * The data source of the widget which is used render nodes. Can be a JavaScript object which represents a valid data source configuration, a JavaScript array or an existing kendo.data.HierarchicalDataSource instance.If the dataSource option is set to a JavaScript object or array the widget will initialize a new kendo.data.HierarchicalDataSource instance using that value as data source configuration.If the dataSource option is an existing kendo.data.HierarchicalDataSource instance the widget will use that instance and will not initialize a new one.
    * @param |array| $value
    * @return \Kendo\UI\PanelBar
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * Sets the field of the data item that provides the sprite CSS class of the nodes.
If an array, each level uses the field that is at the same index in the array, or the last item in the array.
    * @param string $value
    * @return \Kendo\UI\PanelBar
    */
    public function dataSpriteCssClassField($value) {
        return $this->setProperty('dataSpriteCssClassField', $value);
    }

    /**
    * Sets the field of the data item that provides the text content of the nodes.
If an array, each level uses the field that is at the same index in the array, or the last item in the array.
    * @param string|array $value
    * @return \Kendo\UI\PanelBar
    */
    public function dataTextField($value) {
        return $this->setProperty('dataTextField', $value);
    }

    /**
    * Sets the field of the data item that provides the link URL of the nodes.
    * @param string $value
    * @return \Kendo\UI\PanelBar
    */
    public function dataUrlField($value) {
        return $this->setProperty('dataUrlField', $value);
    }

    /**
    * Specifies how the PanelBar items are displayed when opened and closed. The following values
are available:
    * @param string $value
    * @return \Kendo\UI\PanelBar
    */
    public function expandMode($value) {
        return $this->setProperty('expandMode', $value);
    }

    /**
    * Indicates whether the child DataSources should be fetched lazily when parent groups get expanded.
Setting this to false causes all child DataSources to be loaded at initialization time.
    * @param boolean $value
    * @return \Kendo\UI\PanelBar
    */
    public function loadOnDemand($value) {
        return $this->setProperty('loadOnDemand', $value);
    }

    /**
    * The text messages displayed in the widget. Use it to customize or localize the messages.
    * @param \Kendo\UI\PanelBarMessages|array $value
    * @return \Kendo\UI\PanelBar
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * Sets the template option of the PanelBar.
    * Template for rendering each node.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\PanelBar
    */
    public function templateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('template', $value);
    }

    /**
    * Sets the template option of the PanelBar.
    * Template for rendering each node.
    * @param string $value The template content.
    * @return \Kendo\UI\PanelBar
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * Adds PanelBarItem to the PanelBar.
    * @param \Kendo\UI\PanelBarItem|array,... $value one or more PanelBarItem to add.
    * @return \Kendo\UI\PanelBar
    */
    public function addItem($value) {
        return $this->add('items', func_get_args());
    }

    /**
    * Sets the activate event of the PanelBar.
    * Triggered when an item of a PanelBar is activated.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\PanelBar
    */
    public function activate($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('activate', $value);
    }

    /**
    * Sets the collapse event of the PanelBar.
    * Triggered when an item of a PanelBar is collapsed.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\PanelBar
    */
    public function collapse($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('collapse', $value);
    }

    /**
    * Sets the contentLoad event of the PanelBar.
    * Fires when content is fetched from an AJAX request.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\PanelBar
    */
    public function contentLoad($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('contentLoad', $value);
    }

    /**
    * Sets the dataBound event of the PanelBar.
    * Triggered after the dataSource change event has been processed (adding/removing items);
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\PanelBar
    */
    public function dataBound($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
    * Sets the error event of the PanelBar.
    * Fires when AJAX request results in an error.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\PanelBar
    */
    public function error($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('error', $value);
    }

    /**
    * Sets the expand event of the PanelBar.
    * Triggered when an item of a PanelBar is expanded.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\PanelBar
    */
    public function expand($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('expand', $value);
    }

    /**
    * Sets the select event of the PanelBar.
    * Triggered when an item of a PanelBar is selected.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\PanelBar
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
