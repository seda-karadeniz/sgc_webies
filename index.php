<?php

require_once('config.php');

require_once('models/Model.php');
require_once('models/NavigationLink.php');


require_once('controllers/Home.php');

$page = new Home('webies The best cinema ever');

$page->render();
