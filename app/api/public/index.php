<?php

require_once('../init/autoload.php');
require_once('../config/config.php');

App::run(Config::get('start_url'));