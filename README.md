# PHP Base Search

Shared contracts and a reusable result value object for PHP search packages.

## Installation

```bash
composer require jord-jd/php-base-search
```

## Implementing a searcher

Implement `SearcherInterface` and return an array of `SearchResultInterface`
objects. `SearchResult` is provided for searchers that do not need extra
provider-specific fields.

```php
use JordJD\BaseSearch\Interfaces\SearcherInterface;
use JordJD\BaseSearch\SearchResult;

final class DocumentationSearcher implements SearcherInterface
{
    public function search(string $query): array
    {
        return [
            new SearchResult(
                'Installation',
                'Install the package with Composer.',
                'https://example.com/docs/installation',
                1.0
            ),
        ];
    }
}
```

## Consuming results

Every result exposes `getTitle()`, `getDescription()`, `getUrl()`, and
`getScore()`. The supplied `SearchResult` also supports `toArray()` and native
JSON serialization:

```php
$result = $searcher->search('installation')[0];

echo $result->getTitle();
echo json_encode($result);
```

The package supports PHP 7.1 through current PHP 8.x releases.
