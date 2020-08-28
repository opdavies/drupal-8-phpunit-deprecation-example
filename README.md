# Drupal 8 PHPUnit Deprecation Example

An example Drupal 8 project that uses PHPUnit to highlight deprecations within custom module code.

This project contains an `example` module that uses a deprecated function - `drupal_set_message()`.

When the PHPUnit tests are run, the deprecation notice is displayed in the test output:

> Remaining deprecation notices (1)
>
> 1x: drupal_set_message() is deprecated in Drupal 8.5.0 and will be removed before Drupal 9.0.0. Use \Drupal\Core\Messenger\MessengerInterface::addMessage() instead. See https://www.drupal.org/node/2774931
> 1x in DisplayMessageTest::a_message_is_displayed_on_nodes from Drupal\Tests\example\Functional

Also, a non-zero exit code is returned.

## Running the tests

The project uses [DDEV](https://www.ddev.com) and contains a custom command for running PHPUnit (see [this blog post](https://www.oliverdavies.uk/ddev-phpunit-command) that describes how to add it).

To use the command and run the tests:

```
ddev phpunit web/modules/custom
```
