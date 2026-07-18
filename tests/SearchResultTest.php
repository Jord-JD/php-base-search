<?php

namespace JordJD\BaseSearch\Tests;

use JordJD\BaseSearch\Interfaces\SearchResultInterface;
use JordJD\BaseSearch\SearchResult;
use PHPUnit\Framework\TestCase;

class SearchResultTest extends TestCase
{
    public function testResultExposesAndSerializesEveryField()
    {
        $result = new SearchResult(
            'Example',
            'An example search result.',
            'https://example.com/result',
            0.75
        );

        $this->assertInstanceOf(SearchResultInterface::class, $result);
        $this->assertSame('Example', $result->getTitle());
        $this->assertSame('An example search result.', $result->getDescription());
        $this->assertSame('https://example.com/result', $result->getUrl());
        $this->assertSame(0.75, $result->getScore());
        $this->assertSame([
            'title' => 'Example',
            'description' => 'An example search result.',
            'url' => 'https://example.com/result',
            'score' => 0.75,
        ], $result->toArray());
        $this->assertSame($result->toArray(), json_decode(json_encode($result), true));
    }
}
