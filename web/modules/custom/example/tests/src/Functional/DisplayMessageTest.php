<?php

namespace Drupal\Tests\example\Functional;

use Drupal\Tests\BrowserTestBase;

class DisplayMessageTest extends BrowserTestBase {

  protected $defaultTheme = 'stable';

  protected static $modules = ['filter', 'node', 'example'];

  /** @test */
  public function a_message_is_displayed_on_nodes(): void {
    $this->drupalCreateContentType(['type' => 'page']);

    $this->drupalCreateNode();

    $this->drupalGet('node/1');

    $this->assertText('This is a node.');
  }

}
