<?php

class ErrorDecorator extends HtmlElementDecorator {

    protected $_error;

    public function setError($message) {
        $this->_error = $message;
    }

    public function __toString() {
        return $this->_element->__toString()
        . "<span style='color:red;'>{$this->_error}</span>\n";
    }

}

?>
