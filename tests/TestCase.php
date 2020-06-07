<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Undocumented function
     *
     * @param [type] $user
     * @return void
     */
    protected function signIn($user = null)
    {
        $user = $user ?: create('User');

        $this->actingAs($user);

        return $this;
    }
}
