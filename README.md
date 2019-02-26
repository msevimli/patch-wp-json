# Wordpress wp-json REST API patch
If you have a Wordpress site probably you are under potential hacking risk because of a backdoor by REST API way : <br/>
**wp-json/wp/v2/users**
With this, an attacker can readily access your users data such critical information as  username, author information or user id which are useable on attacking to system.

patch-wp-json is a Wordpress plugin for patching to get user information by REST API on request http://location/wp-json/wp/v2/users

## Installation

You can download and install it to your Wordpress site as regular plugin installation process or if you don't want to install it as plugin, you can also include "inc/patch-wp-json.php" into function.php of your theme or somewhere else that you have access to edit.


## Usage
## Install as a Plugin

```
Download zip file and go to Dashboard > Plugins > Add New and upload zip file 
you have downloaded and activate it.
```

## Custom Installation 
If you don't want to install it as a plugin,  you can just import it  
 function.php of your theme or somewhere else that you have access to edit then add following line :  
```php
require_once("inc/patch-wp-json.php");
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
