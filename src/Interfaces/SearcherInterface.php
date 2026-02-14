<?php

namespace JordJD\BaseSearch\Interfaces;

interface SearcherInterface
{
    public function search(string $query): array;
}