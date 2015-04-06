<?php

$post = array(
	'author' => 'Jeffrey',
	'title' => 'my awesome post',
	'body' => 'here is the body',
	'publish-date' => '6-10-2012',
);

// way 1, typical wordpress style.
$email = "<h1>{$post['title']}</h1>";
$email .= "<p>{$post['author']}</p>";
$email .="<div>{$post['body']}</div>";

echo $email;

// way 2

$email2 = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>", $post['title'], $post['author'], $post['body']);

echo $email2;

//way 3 HEREDOCS
$email3 = <<<EOT
<h1>{$post['title']}</h1>
<p>{$post['author']}</p>
<div>{$post['body']}</div><br>
EOT;

echo $email3;

//EXTRACT METHOD: take an associative array, transform the keys into variables and stores the associated value as a value
// we just created 4 variables and assigned values in one line of code
extract($post);

$email4 = <<<EOT
<p>The following info has been extracted using the extract() method:</p>
<h1>$author</h1>
<p>$title</p>
<div>$body</div><br>
EOT;

echo $email4;



