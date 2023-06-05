<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

// if ($age >= 18) {
//   echo 'You are old enough to vote';
// } else {
//   echo 'Sorry you are not old enough';
// }

// $t = date("H");

// echo $t;

// if ($t < 12) {
//   echo 'Good Morning';
// } else if ($t < 17) {
//   echo 'Good Afternoon';
// } else {
//   echo 'Good evening';
// }

$posts = ['First Post'];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No Posts';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $first_post = !empty($posts) ? $posts[0] : 'No Posts';
// echo $first_post;

$fav_color = 'yellow';

switch ($fav_color) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, green or blue';
}
?>