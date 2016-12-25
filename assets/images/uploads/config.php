<?php
/* Redefine your with own defaults here.
 * This are just examples, no one is required. */

// Set the time the cache is cleaned (Since the image generation) to one month (2592000/60/60/24=30)
define ('FILE_CACHE_MAX_FILE_AGE', 2592000);
// Use the default system cache dir so your project's folder stays clean.
define ('FILE_CACHE_DIRECTORY', './image-cache'/*sys_get_temp_dir()*/);
// Quality set to 100%
define ('DEFAULT_Q', 100);

// Start timthumb.
timthumb::start();
?>