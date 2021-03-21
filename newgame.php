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

hangman_start();

header("Location: play.php");
exit();