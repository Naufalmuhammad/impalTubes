<?php
class FirstCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('USERNAME');
		$I->see('PASSWORD');
		$I->fillField('username', 'gopal09');
		$I->fillField('password', '12345');
		$I->click('LOGIN');
		$I->see('List Sparepart Motor');
    }
}