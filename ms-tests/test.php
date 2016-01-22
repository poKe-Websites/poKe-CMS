<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that the system works');
$I->amOnPage('ms-test/execute.php'); 
$I->see('oK');
?>