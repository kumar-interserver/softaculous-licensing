#!/usr/bin/php
<?php

require_once __DIR__.'/../../../../include/functions.inc.php';

$noc = new \Detain\MyAdminSoftaculous\SoftaculousNOC(SOFTACULOUS_USERNAME, SOFTACULOUS_PASSWORD);

print_r($noc->licenselogs($_SERVER['argv'][1]));
print_r($noc->response);

//$GLOBALS['tf']->session->destroy();
