<?php

echo "PHP Development Environment\n";
echo "===========================\n\n";

echo "PHP Version : " . PHP_VERSION . "\n";
echo "OS Family   : " . PHP_OS_FAMILY . "\n";
echo "SAPI        : " . PHP_SAPI . "\n";
echo "PHP Binary  : " . PHP_BINARY . "\n";
echo "Config File : " . (php_ini_loaded_file() ?: "No php.ini loaded") . "\n";
