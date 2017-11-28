<?php

namespace Kendo\UI;

class GanttEditable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * If set to true the Gantt will display a confirmation dialog when the user deletes a task or a dependency.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function confirmation($value) {
        return $this->setProperty('confirmation', $value);
    }

    /**
    * If set to false the user won't be able to create tasks.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function create($value) {
        return $this->setProperty('create', $value);
    }

    /**
    * If set to false the user won't be able to create dependencies.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function dependencyCreate($value) {
        return $this->setProperty('dependencyCreate', $value);
    }

    /**
    * If set to false the user won't be able to delete dependencies.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function dependencyDestroy($value) {
        return $this->setProperty('dependencyDestroy', $value);
    }

    /**
    * If set to false the user won't be able to edit the percentComplete of the tasks.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function dragPercentComplete($value) {
        return $this->setProperty('dragPercentComplete', $value);
    }

    /**
    * If set to false the user won't be able to delete tasks.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function destroy($value) {
        return $this->setProperty('destroy', $value);
    }

    /**
    * If set to false the user won't be able to move tasks.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function move($value) {
        return $this->setProperty('move', $value);
    }

    /**
    * If set to false the user won't be able to reorder tasks in the task list.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function reorder($value) {
        return $this->setProperty('reorder', $value);
    }

    /**
    * If set to false the user won't be able to resize tasks.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function resize($value) {
        return $this->setProperty('resize', $value);
    }

    /**
    * Sets the template option of the GanttEditable.
    * The template which renders the editor.The template should contain elements whose name HTML attributes are set as the editable fields. This is how the Gantt will know
which field to update. The other option is to use MVVM bindings in order to bind HTML elements to data item fields.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\GanttEditable
    */
    public function templateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('template', $value);
    }

    /**
    * Sets the template option of the GanttEditable.
    * The template which renders the editor.The template should contain elements whose name HTML attributes are set as the editable fields. This is how the Gantt will know
which field to update. The other option is to use MVVM bindings in order to bind HTML elements to data item fields.
    * @param string $value The template content.
    * @return \Kendo\UI\GanttEditable
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * If set to false the user won't be able to update tasks.
    * @param boolean $value
    * @return \Kendo\UI\GanttEditable
    */
    public function update($value) {
        return $this->setProperty('update', $value);
    }

//<< Properties
}

?>
