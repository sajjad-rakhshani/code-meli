# Code Meli

---

validate iranian national code
# Installation

Install using composer:

```
composer require sajjad-rakhshani/code-meli
```

# Example


```php
require __DIR__.'/vendor/autoload.php';

use \SajjadRakhshani\CodeMeli\CodeMeli;

var_dump(CodeMeli::validate(5320345443)); //boolean
```
