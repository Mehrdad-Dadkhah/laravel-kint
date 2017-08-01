<?php
require_once dirname(__FILE__) . '/loadEnvironment.php';

// Check composer for extras disabling default helper functions
if (!Kint::composerGetDisableHelperFunctions()) {
    require_once dirname(__FILE__) . '/initHelpers.php';
}
