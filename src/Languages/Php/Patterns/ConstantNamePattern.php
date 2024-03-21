<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(
    input: 'int $pad_type = STR_PAD_RIGHT,',
    output: 'STR_PAD_RIGHT',
)]
#[PatternTest(
    input: 'private const BAR = "bar";',
    output: 'BAR',
)]
#[PatternTest(
    input: 'private const string BAR = ""',
    output: 'BAR',
)]
final class ConstantNamePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '\b(?<match>[A-Z_]+)\b';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::PROPERTY;
    }
}
