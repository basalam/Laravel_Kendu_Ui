<?php

namespace Kendo\UI;

class GridNoRecords extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Sets the template option of the GridNoRecords.
    * The template which is rendered when current view contains no records.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\GridNoRecords
    */
    public function templateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('template', $value);
    }

    /**
    * Sets the template option of the GridNoRecords.
    * The template which is rendered when current view contains no records.
    * @param string $value The template content.
    * @return \Kendo\UI\GridNoRecords
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

//<< Properties
}

?>
