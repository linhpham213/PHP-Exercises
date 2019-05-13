<?php
/*
+---+
| 1 | 
+---+
Print the sentence: <strong><em>Welcome to PHP!</strong></em>
*/

$sentence = "<strong><em>Welcome to PHP!</strong></em>";

echo $sentence;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: <strong><em>PHP stands for "Hypertext Preprocessor"!</strong></em>
*/

$sentence2 = '<strong><em>PHP stands for "Hypertext Preprocessor"!</strong></em>';

echo $sentence2;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: <strong><em>PHP stands for "Hypertext Preprocessor"!</strong></em>
*/

$sentence3 = '<strong><em>PHP stands for "Hypertext Preprocessor"!</strong></em>';

echo "<p>" . $sentence3 . "</p>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:
<strong><em>
HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language</em></strong>
*/
   
$html = "<strong><em>HTML - Stands for Hypertext Markup Language</em></strong>";  
$css = "<strong><em>CSS - Stands for Cascading Stylesheet</em></strong>";
$js = "<strong><em>JS - Stands for JavaScript</em></strong>";
$php = "<strong><em>PHP - Stands for Hypertext Preprocessor</em></strong>";
$sql = "<strong><em>SQL - Stands for Structural Query Language</em></strong>";
 
echo $html ."<br>". $css ."<br>". $js ."<br>". $php ."<br>". $sql;
   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - &lt;ul&gt; ... &lt;/ul&gt;:
<strong><em>
HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language</em></strong>
*/

$list = "<ul><strong><em>
    <li>HTML - Stands for Hypertext Markup Language</li>
    <li>CSS - Stands for Cascading Stylesheet</li>
    <li>JS - Stands for JavaScript</li>
    <li>PHP - Stands for Hypertext Preprocessor</li>
    <li>SQL - Stands for Structural Query Language</li>
    </em></strong></ul>";

echo $list;
?>
