<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Blade\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(
    input: '@if()
        @endif()',
    output: ['@if', '@endif'],
)]
final class BladeKeywordPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(?<match>\@[\w]+)\b';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::KEYWORD;
    }
}
