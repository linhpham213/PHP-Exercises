<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$arr = [
    "pho",
    "croissant",
    "asian sesame chicken",
    "kimchi"
];

echo "{$arr[0]}<br>";
echo "{$arr[1]}<br>";
echo "{$arr[2]}<br>";
echo "{$arr[3]}<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>
<li>{$arr[0]}</li>
<li>{$arr[1]}</li>
<li>{$arr[2]}</li>
<li>{$arr[3]}</li>
</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
    "pho" => "main-course",
    "croissant" => "dessert",
    "asian sesame chicken" => "salad",
    "kimchi" => "side-dish"
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/


echo "pho | {$food_assoc["pho"]} <br>";
echo "croissant | {$food_assoc["croissant"]} <br>";
echo "asian sesame chicken | {$food_assoc["asian sesame chicken"]} <br>";
echo "kimchi | {$food_assoc["kimchi"]} <br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$pho = [
    "type" => "main course",
    "origin" => "Vietnam"
];
$croissant = [
    "type" => "dessert",
    "origin" => "France"
];
$asian_sesame_chicken = [
    "type" => "salad",
    "origin" => "Japan"
];
$kimchi = [
    "type" => "side dish",
    "origin" => "Korea"
];
$food_assoc = [
    "pho" => $pho,
    "croissant" => $croissant,
    "asian sesame chicken" => $asian_sesame_chicken,
    "kimchi" => $kimchi
];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "pho | {$pho['type']} | {$pho['origin']} <br>";
echo "croissant | {$croissant['type']} | {$croissant['origin']} <br>";
echo "asian sesame chicken | {$asian_sesame_chicken['type']} | {$asian_sesame_chicken['origin']} <br>";
echo "kimchi | {$kimchi['type']} | {$kimchi['origin']} <br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>  
  <tr>
    <td>pho</td>
    <td>{$pho['type']}</td>
    <td>{$pho['origin']}</td>
  </tr>
  <tr>
    <td>croissant</td>
    <td>{$croissant['type']}</td>
    <td>{$croissant['origin']}</td>
  </tr>
  <tr>
    <td>asian sesame chicken</td>
    <td>{$asian_sesame_chicken['type']}</td>
    <td>{$asian_sesame_chicken['origin']}</td>
  </tr>
  <tr>
    <td>kimchi</td>
    <td>{$kimchi['type']}</td>
    <td>{$kimchi['origin']}</td>
  </tr>
</table>";

?>
