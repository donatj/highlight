<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Yaml\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(input: 'runs-on: ${{ matrix.os }}', output: ['{{', '}}'])]
final class YamlDoubleAccoladesValuePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(?<match>(\{\{|\}\}))';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::VALUE;
    }
}
