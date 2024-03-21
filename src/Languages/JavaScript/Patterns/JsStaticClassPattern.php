<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\JavaScript\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(input: 'Math.round', output: 'Math')]
#[PatternTest(input: 'customHeaders.get', output: null)]
final class JsStaticClassPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '\b(?<match>[A-Z][\w]+)\.';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::TYPE;
    }
}
