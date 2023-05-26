# php-auth0

**php-auth0** is a basic tool for integrating Auth0 into PHP projects. It allows you to easily incorporate Auth0 authentication into your PHP applications, including WordPress themes.

This repository is available at [https://github.com/kmusiclife/php-auth0](https://github.com/kmusiclife/php-auth0).

## Installation

To get started with php-auth0, follow these steps:

1. Clone the repository or download the source code from [https://github.com/kmusiclife/php-auth0](https://github.com/kmusiclife/php-auth0).

```bash
git clone https://github.com/kmusiclife/php-auth0
```

2. Run composer install in the root directory of your project to download and install the required packages.

```bash
cd php-auth0
```

```bash
composer update
composer install
```

3. Create a new `.env` file in the root directory of your project. This file will store your Auth0 credentials and configuration. Make sure to include the following variables:

```bash
touch .env
```

```dotenv
AUTH0_CLIENT_ID=xxxxxxxxxxxxxxxxxx
AUTH0_DOMAIN=xxxxxxxxxxxxxxxxxxxxx
AUTH0_CLIENT_SECRET=xxxxxxxxxxxxxx
AUTH0_COOKIE_SECRET=xxxxxxxxxxxxxx
AUTH0_BASE_URL=xxxxxxxxxxxxxxxxxxx
```

4. Include the `php-auth0.php` file in your PHP project:

```php
include('php-auth0/php-auth0.php');
```

## Usage

Once you have included the `php-auth0.php` file, you can start using the php-auth0 library in your PHP code. It provides functions and methods for handling user authentication and authorization using Auth0.

Here's a simple example of authenticating a user with Auth0:

```php
<?php
include('php-auth0/php-auth0.php');

$session->user; // user information

?>
```

For more advanced usage and configuration options, please refer to the documentation.

## License

php-auth0 is released under the [MIT License](https://opensource.org/licenses/MIT). Feel free to use, modify, and distribute it as per the terms of the license.

## Acknowledgements

php-auth0 is built on top of the Auth0 PHP SDK, which provides the underlying functionality for authentication and authorization. Special thanks to the Auth0 team for their excellent work.