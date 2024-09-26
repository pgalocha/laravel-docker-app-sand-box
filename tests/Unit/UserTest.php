<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_user_is_model(): void
    {
        $user = new User();
        $this->assertInstanceOf(User::class, $user);
    }
}
