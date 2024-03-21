<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;

final class GenericPattern implements Pattern
{
    use IsPattern;

    public function __construct(
        private string $pattern,
        private TokenType $tokenType,
    ) {
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }

    public function getTokenType(): TokenType
    {
        return $this->tokenType;
    }
}
