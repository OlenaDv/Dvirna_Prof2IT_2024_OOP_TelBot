<?php

use Loader\Application;
use Loader\ClassLoader;

include_once("ClassLoader.php");

ClassLoader::getInstance();

Application::getInstance()->init();