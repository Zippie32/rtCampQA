<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo("Login with invalid username/password and see error message");
$I->amOnPage("/activity");
$I->fillField(['id'=>'bp-login-widget-user-login'],'wrong');
$I->fillField(['id'=>'bp-login-widget-user-pass'],'wrong');
$I->click(['id'=>'bp-login-widget-submit']);
$I->see("ERROR: Invalid username. Lost your password?");
$I->see('Username or Email Address');
$I->see('Password');

