<?php

use Civi\Test;
use Civi\Test\HeadlessInterface;
use Civi\Test\TransactionalInterface;

/**
 * An abstract BaseHeadlessTest class.
 */
abstract class BaseHeadlessTest extends PHPUnit\Framework\TestCase implements HeadlessInterface, TransactionalInterface, Test\HookInterface {

  /**
   * Sets up Headless, use stock schema.
   */
  public function setUpHeadless() {
    return Test::headless()
      ->installMe(__DIR__)
      ->apply();
  }

}
