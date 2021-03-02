# Running tests

## Running tests via Composer script

You can run all the unit tests directly via a Composer script.

```shell
$ composer tests
```

## Running tests via PHPUnit

To run the tests navigate to the package root folder:

```shell
$ cd username/package
```

Run PHP Unit on the tests folder:

```shell
$ vendor/bin/phpunit tests
```

To run a single test class, replace dummy with the test and class name:

```shell
$ vendor/bin/phpunit --filter DummyTest tests/DummyClassTest.php
```