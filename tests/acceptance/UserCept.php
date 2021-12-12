<?php 
$I = new AcceptanceTester($scenario);
$I->amOnPage('/');
$I->click('Mulai Test');
$I->seeCurrentUrlEquals('/mulai-test-mbti');