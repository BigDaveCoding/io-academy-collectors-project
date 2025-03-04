<?php
declare(strict_types=1);
require_once 'src/services/LoginValidationService.php';
require_once 'src/services/DatabaseConnectionService.php';
require_once 'src/models/UsersModel.php';
use PHPUnit\Framework\TestCase;

class LoginValidationServiceTest extends TestCase
{
    public function test_validateLogin_validates() : void
    {
        $fakeEntity = $this->createMock(UserEntity::class);
        // This makes a mock entity
        $fakeUsersModel = $this->createMock(UsersModel::class);
        // This makes a mock version
        $fakeUsersModel->method('loginValidation')->willReturn($fakeEntity);
        // This gives it a fake loginValidation method that will always return true
        $fakeUsersModel->method('searchByUsername')->willReturn($fakeEntity);
        $true = LoginValidationService::validateLogin($fakeUsersModel,'test', 'test');
        $this->assertTrue($true);
    }
}