<?php

namespace JordJD\BaseSearch\Interfaces;

interface SearcherInterface
{
    /**
     * @return SearchResultInterface[]
     */
    public function search(string $query): array;
}
