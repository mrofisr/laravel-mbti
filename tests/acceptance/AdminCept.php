<?php 
$I = new AcceptanceTester($scenario);
$I->amOnPage('/admin');
$I->seeCurrentUrlEquals('/admin/login');
$I->fillField('email', 'admin@gmail.com');
$I->fillField('password', 'admin');
$I->click('Log in');
$I->seeCurrentUrlEquals('/admin/dashboard');