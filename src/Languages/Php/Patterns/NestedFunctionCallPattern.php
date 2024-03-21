<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;

final class NestedFunctionCallPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(\s|\()(?<match>[\w]+)\(';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::PROPERTY;
    }
}
