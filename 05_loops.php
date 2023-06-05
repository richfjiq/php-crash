<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number: $x <br>";
// }

/* ------------ While Loop ------------ */

// $x = 1;

// while ($x <= 15) {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// }

/* ------------ While Loop ------------ */
// $x = 1;

// do {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// } while ($x <= 5);

$posts = ['First Post', 'Second Post', 'Third Post'];

// for ($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

// foreach($posts as $post) {
//   echo $post . '<br>';
// }

// foreach($posts as $index => $post) {
//   echo $index + 1 . ' - ' . $post . '<br>';
// }

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Stark',
  'email' => 'test@gamil.com'
];

foreach($person as $key => $value) {
  echo "$key - $value<br>";
}
?>

