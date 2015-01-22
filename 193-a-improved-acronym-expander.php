<?php

$acronyms = array(
“lol” => “laugh out loud”,
“dw” => “don’t worry”,
“hf” => “have fun”,
“gg” => “good game”,
“brb” => “be right back”,
“g2g” => “got to go”,
“wtf” => “what the fuck”,
“wp” => “well played”,
“gl” => “good luck”,
“imo” => “in my opinion”,
);

function deacronym($input){
  foreach ($acronyms as $acronym => $replacement){
    $input = preg_replace(“@\\b” . preg_quote($acronym) . “\\b@”, $replacement, $input);
  }
  return $input;
}

?>
