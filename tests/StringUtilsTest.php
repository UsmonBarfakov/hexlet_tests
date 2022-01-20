<?php
use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

require_once __DIR__ . "/../vendor/autoload.php";

Assert::eq(capitalize('hello'),'Hello');
Assert::eq(capitalize(''), '');

echo 'Все тесты пройдены!';