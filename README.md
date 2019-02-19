# Wordpress wp-json REST API patch

patch-wp-json is a Wordpress plugin for patching to get user information by REST API on request http://location/wp-json/wp/v2/users

## Installation

You can download and install it to your Wordpress site as regular plugin installation process or if you don't want to install it as plugin, you can also include "inc/patch-wp-json.php" into function.php of your theme or somewhere else that you have access to edit.


## Usage
If you don't want to install it as a plugin, you can just import it  
 function.php of your theme 
```php
require_once("inc/patch-wp-json.php");
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
