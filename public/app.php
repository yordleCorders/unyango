<?php

$path = __DIR__ . '/app';

$config = new Source\Parser\ConfigParser;

print_r($config->load($path));