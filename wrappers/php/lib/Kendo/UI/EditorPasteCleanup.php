<?php

namespace Kendo\UI;

class EditorPasteCleanup extends \Kendo\SerializableObject {
//>> Properties

    /**
    * All HTML tags are stripped leaving only the text in the content.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function all($value) {
        return $this->setProperty('all', $value);
    }

    /**
    * Remove style and class attributes from the pasting content.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function css($value) {
        return $this->setProperty('css', $value);
    }

    /**
    * Sets the custom option of the EditorPasteCleanup.
    * Use a callback function to integrate a custom implementation for cleaning up the paste content. Make sure the callback function always returns the result.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function custom($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('custom', $value);
    }

    /**
    * Strip all HTML tags but keep new lines in the pasted content.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function keepNewLines($value) {
        return $this->setProperty('keepNewLines', $value);
    }

    /**
    * Remove all special formatting from MS Word content like font-name, font-size and MS Word specific tags.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function msAllFormatting($value) {
        return $this->setProperty('msAllFormatting', $value);
    }

    /**
    * Converts MS Word pasted content into HTML lists.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function msConvertLists($value) {
        return $this->setProperty('msConvertLists', $value);
    }

    /**
    * Removes all MS Word specific tags and cleans up the extra metadata.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function msTags($value) {
        return $this->setProperty('msTags', $value);
    }

    /**
    * Prevent any cleaning up of the content.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function none($value) {
        return $this->setProperty('none', $value);
    }

    /**
    * Remove all span elements from the content, ensuring much of the inline formatting is removed.
    * @param boolean $value
    * @return \Kendo\UI\EditorPasteCleanup
    */
    public function span($value) {
        return $this->setProperty('span', $value);
    }

//<< Properties
}

?>
