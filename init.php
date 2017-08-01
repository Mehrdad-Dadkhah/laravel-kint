<?php
if(!defined('KINT_DIR')) {
	require_once dirname(__FILE__) . '/defineKintDir.php';
}

// Check composer for extras disabling default helper functions
if (!Kint::composerGetDisableHelperFunctions()) {
    require_once dirname(__FILE__) . '/initHelpers.php';
}
