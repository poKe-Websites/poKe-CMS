<?php

/*
 * Tecflare Corporation
 * Copyright Tecflare Corporation
 * Provided by the Tecflare Corporation System
 * * Code has been scanned by styleci.io
 */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that the system works');
$I->amOnPage('ms-test/execute.php');
$I->see('oK');
