<?php

use Webmozart\Assert\Assert;

require_once __DIR__ . '/../vendor/autoload.php';

Assert::eq(StringUtils\capitalize('hello'), 'Hello');
Assert::eq(StringUtils\capitalize(''), '');

echo 'Все тесты пройдены!';
