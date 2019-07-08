<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('like media and see liked media');
$I->login();
$I->amOnPage("/members/demo/media/photo/");
$I->click(['id'=>'rtm_show_upload_ui']);
$I->attachFile( 'input[type="file"]', 'blue bonnets.jpg' );

