<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(input: 'Bar $bar, Baz $baz', output: ['Bar', 'Baz'])]
#[PatternTest(input: 'Foo|Bar $bar, Baz $baz', output: ['Foo|Bar', 'Baz'])]
#[PatternTest(input: '?Bar $bar, Baz $baz', output: ['?Bar', 'Baz'])]
#[PatternTest(input: 'Foo|Bar|null $bar', output: 'Foo|Bar|null')]
#[PatternTest(input: '|null $bar', output: '|null')]
final class ParameterTypePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(?<match>(\([\?\w\&\|]+\)|[\?\w\|\&]+))\s\\$';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::TYPE;
    }
}
