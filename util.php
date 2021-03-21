<?php
/*
 * File: util.php
 * Project: Project 2
 * File Created: Sunday, 21st March 2021 3:50:53 pm
 * Author: Hayden Kowalchuk 
 * -----
 * Copyright (c) 2021 Hayden Kowalchuk, Hayden Kowalchuk
 * License: BSD 3-clause "New" or "Revised" License, http://www.opensource.org/licenses/BSD-3-Clause
 */


/* helper to reduce typing */
function _set($var, $val)
{
  $_SESSION[$var] = $val;
}

function _get($var)
{
  return $_SESSION[$var];
}

/* random string to avoid caching */
function rs($length = 8)
{
  $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
  $rs = substr(str_shuffle($chars), 0, $length);
  return $rs;
}
