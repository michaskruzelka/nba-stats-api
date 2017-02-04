# [NBA Stats API](http://stats.nba.com/) - PHP Wrapper

In development...

## Installation

Not available in Packagist yet. Clone with GIT.

## Requirements

- (>=) PHP 5.6
- [Guzzle 6](http://docs.guzzlephp.org/en/latest/)

## Basic Usage

```php
use Michaskruzelka\NBA\Api;

$api = Api::instance();

// Send a request to stats.nba.com
// See all the methods in our wiki
$resource = $api->draftHistory();

// It is better to filter requests
$resource = $api->draftHistory(null, 2003);

// Get all the necessary information
$miamiDraft = $resource->getDraftHistoryByTeamCity('Miami');
$secondRoundDraft = $resource->getDraftHistoryByRoundNumber(2);
// Entire result set, no filters
$draft = $resource->getDraftHistory();
// Raw data
$raw = $resource->getResultSets();
```

## Complete List of Endpoints

See the [wiki](https://github.com/michaskruzelka/nba-stats-api/wiki).

## Extend functionality
The package is open for extension:

1) Create your own endpoint. It must implement
Michaskruzelka\NBA\Api\Endpoint\Endpoint. You can extend your
class from Michaskruzelka\NBA\Api\Endpoint\EndpointDefault
for the sake of convenience.
```php
use Michaskruzelka\NBA\Api\Client;
$client = new Client();
$resource = $client->send(new [Your_Endpoint]([all the necessary arguments]));
```
$resource is instance of Michaskruzelka\NBA\Api\Resource\ResourceDefault.

2) You can create your own resource. It must implement
Michaskruzelka\NBA\Api\Resource\Resource.
```php
$resource = $client->send(
    new [Your_Endpoint]([all the necessary arguments]),
    new [Your_Resource]()
);
```

## License
View the [LICENSE](https://github.com/michaskruzelka/nba-stats-api/blob/master/LICENSE) file
(MIT).
