<?php

namespace JordJD\BaseSearch;

use JordJD\BaseSearch\Interfaces\SearchResultInterface;

class SearchResult implements SearchResultInterface, \JsonSerializable
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var string */
    private $url;

    /** @var float */
    private $score;

    public function __construct(string $title, string $description, string $url, float $score)
    {
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
        $this->score = $score;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getScore(): float
    {
        return $this->score;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'score' => $this->score,
        ];
    }

    /**
     * @return array<string, float|string>
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
