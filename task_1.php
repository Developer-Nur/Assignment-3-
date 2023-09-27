<?php
function modifyText($text) {
  $modifiedText = strtolower($text);
  $modifiedText = str_replace("brown", "red", $modifiedText);
  echo $modifiedText;
}

$text = "The quick brown fox jumps over the lazy dog.";
modifyText($text);