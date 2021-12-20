<?php

class moExcel {
  public $content;

  function __construct($content) {
    $this->content = $content;
  }

  function write() {
    $this->content = $content;
  }

  function output() {
    return $this->content;
  }
}
