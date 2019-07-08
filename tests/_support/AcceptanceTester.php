<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   public function login()
    {
        $I = $this;       
	$I->amOnPage("/activity");
	$I->fillField(['id'=>'bp-login-widget-user-login'],'demo');
	$I->fillField(['id'=>'bp-login-widget-user-pass'],'demo');
	$I->click(['id'=>'bp-login-widget-submit']);
	$I->see("What's new, demo?");
    }

    
}
