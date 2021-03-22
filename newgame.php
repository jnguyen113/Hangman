<?php
/*
 * File: newgame.php
 * Project: Project 2
 * File Created: Sunday, 21st March 2021 3:50:23 pm
 * Author: Hayden Kowalchuk 
 * -----
 * Copyright (c) 2021 Hayden Kowalchuk, Hayden Kowalchuk
 * License: BSD 3-clause "New" or "Revised" License, http://www.opensource.org/licenses/BSD-3-Clause
 */

session_start();

require_once('hangman.php');
require_once('util.php');

/* reads categories to then read words */
function read_categories()
{
  $categories = array();
  $fd = fopen("words/categories.txt", "r");

  while (!feof($fd)) {
    $result = trim(fgets($fd));
    array_push($categories, $result);
  }
  fclose($fd);
  return $categories;
}

function read_words($categories)
{
  $words = array();
  foreach ($categories as $category) {
    // Create filename
    $filename = str_replace(" ", "_", strtolower($category)) . ".txt";

    // Read file contents to array
    $temp = array();
    $fd = fopen("words/" . $filename, "r");
    if ($fd)
      while (!feof($fd)) {
        $result = strtoupper(trim(fgets($fd)));
        array_push($temp, $result);
      }
    fclose($fd);

    $words[strtolower($category)] = $temp;
  }
  return $words;
}

/* Determine if we are starting a new game or we have started a new game */
$categories = read_categories();
$words = read_words($categories);

if (isset($_REQUEST['category'])) {
  $cat = strtolower($_REQUEST['category']);
  $rand_key = array_rand($words[$cat], 1);
  $selected_word = $words[$cat][$rand_key];
  hangman_start($selected_word, $cat);
  header("Location: play.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hangman | New Game</title>
  <link href="play.css<?php echo '?' . rs(7); ?>" rel="stylesheet">
</head>

<body>
  <div class="main future">
    <div class="category_header center">
      <h1>Categories</h1>
    </div>
    <form method="post" class="box">
      <?php
      $fd = fopen("words/categories.txt", "r");

      while (!feof($fd)) {
        $result = trim(fgets($fd));
        echo "<button class=\"center future\" type=\"submit\" name=\"category\" value=\"" . $result . "\"><h2>" . $result . "</h2></button>\n";
      }
      fclose($fd);
      echo "</form>";
      ?>
    </div>
  </div>
</body>

</html>