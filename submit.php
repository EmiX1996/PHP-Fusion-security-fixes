<?php
require_once __DIR__.'/maincore.php';
if (!iMEMBER) {
    redirect(BASEDIR.'index.php');
}
require_once THEMES.'templates/header.php';
$modules = \PHPFusion\Admins::getInstance()->getSubmitData();

$_GET['stype'] = !empty($_GET['stype']) && isset($modules[$_GET['stype']]) ? $_GET['stype'] : "";

if (!empty($modules) && $_GET['stype']) {
    require_once $modules[$_GET['stype']]['link'];
} else {
    redirect(BASEDIR.'index.php');
}
require_once THEMES.'templates/footer.php';
