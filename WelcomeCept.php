<?php
	$I = new AcceptanceTester($scenario);
	$I->wantTo('ensure that user login successfull');
	$I->amOnPage('/admin');
	$I->fillField('login_id', 'admin');
	$I->fillField('password', 'admin');
	$I->click('ログイン');
	$I->waitForText('こんにちは');
	$I->see("こんにちは");
 ?>