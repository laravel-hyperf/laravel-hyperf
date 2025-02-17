<?php

declare(strict_types=1);

namespace Tests;

use LaravelHyperf\Foundation\Testing\Concerns\RunTestsInCoroutine;
use LaravelHyperf\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RunTestsInCoroutine;
}
