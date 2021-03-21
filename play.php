<?php
/*
 * File: play.php
 * Project: Project 2
 * File Created: Sunday, 21st March 2021 12:54:21 pm
 * Author: Hayden Kowalchuk 
 * -----
 * Copyright (c) 2021 Hayden Kowalchuk, Hayden Kowalchuk
 * License: BSD 3-clause "New" or "Revised" License, http://www.opensource.org/licenses/BSD-3-Clause
 */

session_start();

require_once('hangman.php');
require_once('util.php');

/* helper for debugging */
if (isset($_REQUEST['destroy'])) {
  session_destroy();
}

function hangman_dump()
{
  echo "<pre>";
  print_r($_REQUEST);
  print_r($_SESSION);
  echo "</pre>";
}

/* Get our game state */
hangman_acquire();
hangman_parse_input();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hangman | Play</title>
  <link href="play.css<?php echo '?' . rs(7); ?>" rel="stylesheet">
</head>

<body>
  <?php
  if (hangman_won()) {
    hangman_output_overlay("<span class=\"grn\">Well done!</span>");
  } else if (hangman_loss()) {
    hangman_output_overlay("<span class=\"red\">You Lost!</span>");
  }
  ?>
  <div class="main">
    <div class="col_hangman">
      <div class="progress_container">
        <img src="images/noose.png" alt="noose" id="noose">
        <?php
        //hangman_dump();
        hangman_output_image();
        /*
        Unused HTML
        <br>
        <h1>Guesses left:</h1>
        <button class="letter"><?php echo hangman_guesses_left(); ?></button>
        */
        ?>
      </div>
    </div>
    <div class="col_game">
      <div class="row_half" id="top">
        <h2 class="future center">(Category)</h2>
        <div class="word center">
          <?php
          hangman_output_word();
          ?>
        </div>
      </div>
      <div class="row_half" id="bottom">
        <?php
        hangman_output_letters();
        ?>
      </div>
    </div>
  </div>
</body>

</html>