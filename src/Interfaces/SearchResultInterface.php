<?php

namespace JordJD\BaseSearch\Interfaces;

interface SearchResultInterface
{
    public function getTitle(): string;
    public function getDescription(): string;
    public function getUrl(): string;
    public function getScore(): float;
}