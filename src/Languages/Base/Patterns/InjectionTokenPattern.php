<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Base\Patterns;

use Tempest\Highlight\Escape;
use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;

final class InjectionTokenPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return Escape::INJECTION_TOKEN . '(?<match>(.|\n)*?)' . Escape::INJECTION_TOKEN;
    }

    public function getTokenType(): TokenType
    {
        return TokenType::INJECTION;
    }
}
