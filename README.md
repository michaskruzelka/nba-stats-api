## [NBA Stats API](http://stats.nba.com/) - PHP Wrapper

In development...

Example

```php
require_once 'vendor/autoload.php';

use Michaskruzelka\NBA\Api;

$api = Api::instance();

$resource = $api->franchiseHistory();

$fh = $res->getFranchiseHistoryByTeamCity('Milwaukee');
```

## License
View the [LICENSE](https://github.com/michaskruzelka/nba-stats-api/blob/master/LICENSE) file
(MIT).
