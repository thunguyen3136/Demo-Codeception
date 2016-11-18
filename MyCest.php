<?php


class MyCest
{
    public function _before(AcceptanceTester $I)
    {
		$I->amOnPage('/admin');
    }

    public function _after(AcceptanceTester $I)
    {
		
    }

    // tests
    public function tryVerifyEmptyUserPass(AcceptanceTester $I)
    {
		$I->fillField('login_id', '');
		$I->fillField('password', '');
		$I->click('ログイン');
		$I->wait(3);
		$I->see('ＩＤまたはパスワードが正しくありません。
			もう一度ご確認のうえ、再度入力してください。');
    }
	
	public function tryVerifyEmptyPass(AcceptanceTester $I)
    {
		$I->fillField('login_id', 'admin');
		$I->fillField('password', '');
		$I->click('ログイン');
		$I->wait(3);
		$I->see('ＩＤまたはパスワードが正しくありません。
			もう一度ご確認のうえ、再度入力してください。');
    }
	
	public function tryVerifyEmptyUser(AcceptanceTester $I)
    {
		$I->fillField('login_id', '');
		$I->fillField('password', 'admin');
		$I->click('ログイン');
		$I->wait(3);
		$I->see('ＩＤまたはパスワードが正しくありません。
			もう一度ご確認のうえ、再度入力してください。');
    }
	
	public function tryToLoginSuccessfully(AcceptanceTester $I)
    {
		$I->fillField('login_id', 'admin');
		$I->fillField('password', 'admin');
		$I->click('ログイン');
		$I->wait(3);
		$I->see('こんにちは');
    }
}
