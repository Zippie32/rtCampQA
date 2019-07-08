<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Update a Post Status and see media updated with private');
$I->login();
$I->click(['id'=>'whats-new']);
$I->attachFile( 'input[type="file"]', 'blue bonnets.jpg' );
$I->selectOption(['id'=> 'rtSelectPrivacy'], array('id' => '60'));
$I->clickWithLeftButton(['id'=> 'aw-whats-new-submit']);
$I->wait(3);
$I->see("demo posted an update a few seconds ago");
$I->click('Log Out');





