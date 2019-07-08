<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Login and see successful login');
$I->amOnPage("/activity");
$I->fillField(['id'=>'bp-login-widget-user-login'],'demo');
$I->fillField(['id'=>'bp-login-widget-user-pass'],'demo');
$I->click(['id'=>'bp-login-widget-submit']);
$I->see("What's new, demo?");
$I->see('Log Out');
$I->click('Log Out');
