<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\DocComment\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(input: '@param class-string<T> $className', output: 'T')]
final class DocCommentGenericTypePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '\<(?<match>[\w]+)\>';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::GENERIC;
    }
}
