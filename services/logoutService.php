<?php
/**
 * Created by PhpStorm.
 * User: imamo
 * Date: 27.8.2017.
 * Time: 16.03
 */
session_start();
session_unset();


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header("Location: /");