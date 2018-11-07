<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Traits\CreatesApplication;
use Tests\Traits\TestsHelper;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseTransactions, TestsHelper;
}
