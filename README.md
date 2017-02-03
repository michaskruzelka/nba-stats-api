## [NBA Stats API](http://stats.nba.com/) - PHP Wrapper

In development...

Example

```php
use Michaskruzelka\NBA\Api;

$api = Api::instance();

$resource = $api->franchiseHistory();

$fh = $resource->getFranchiseHistoryByTeamCity('Milwaukee');
```

## License
View the [LICENSE](https://github.com/michaskruzelka/nba-stats-api/blob/master/LICENSE) file
(MIT).
