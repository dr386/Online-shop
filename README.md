# Readme User Manual

[![standard-readme compliant](https://img.shields.io/badge/readme%20style-standard-brightgreen.svg?style=flat-square)](https://github.com/RichardLitt/standard-readme)

## Background
This project introduces the design and implementation of the online shopping mall. The site is developed in PHP+MySQL+Apache environment.
A combination of PHP, CSS and JavaScript technologies were used in the design process.
We also use the external API for shopping cart development.

## Install
* From the PHP Official Website : install [PHP 7.4.zip](https://windows.php.net/download/).
* From the command line: 
sec   rsa4096 2019-06-11 [SC] [expires: 2029-06-08]
      5A52880781F755608BF815FC910DEB46F53EA312
uid           [ultimate] Derick Rethans <gpg@derickrethans.nl>
uid           [ultimate] Derick Rethans <derick@derickrethans.nl>
uid           [ultimate] Derick Rethans (GitHub) <github@derickrethans.nl>
uid           [ultimate] Derick Rethans (PHP) <derick@php.net>
ssb   rsa4096 2019-06-11 [E] [expires: 2029-06-08]

pub   rsa4096 2019-05-29 [SC] [expires: 2021-05-28]
      4267 0A7F E4D0 441C 8E46  3234 9E4F DC07 4A4E F02D
uid           [ultimate] Peter Kokot <petk@php.net>
sub   rsa4096 2019-05-29 [E] [expires: 2021-05-28]

On ubuntu by default extensions which are available as a package can be installed. PECL extensions if not available as a package can be installed by specifying pecl in the tools input.
uses: shivammathur/setup-php@v2
with:
  php-version: '7.4'
  tools: pecl
  extensions: swoole
On windows PECL extensions which have the DLL binary can be installed.

On macOS PECL extensions can be installed.

Extensions installed along with PHP if specified are enabled.

Specific versions of PECL extensions can be installed by suffixing the version. This is useful for installing old versions of extensions which support end of life PHP versions.

uses: shivammathur/setup-php@v2
with:
  php-version: '5.4'
  tools: pecl
  extensions: swoole-1.9.3
Pre-release versions of PECL extensions can be setup by suffixing the extension with its state i.e alpha, beta, devel or snapshot.
uses: shivammathur/setup-php@v2
with:
  php-version: '7.4'
  tools: pecl
  extensions: xdebug-beta
Extensions which cannot be setup gracefully leave an error message in the logs, the action is not interrupted.

These extensions have custom support - gearman on ubuntu, blackfire, phalcon3 and phalcon4 on all supported OS.


## User Manual
When user access to the website, you can see an item list. On the right-top side user can access search feature, sign in page, register page and cart. The user can search items using search modal and automatically shows a result in the item list section.

In sign in page, the user can create account with Create Account button, when click the button, page will be move to new account page and register form will be appeared. After Fill up all field of input with the appropriate information, the user can click create account button and the information will be stored database and the user can sign in with the information.
If the user already has an ID, the user can sign in with sign in page, the user can input the id and password, then click Sign In button.

In main page, the user can see the item list. When the mouseover an item, an add to cart button will be appeared, they can put items in the cart with the button. 

In cart page, the user can check the items which they putted in the main page or item page. The user can check the product’s image, name, price, quantities also automatically calculate the sub total price of the items in the cart. The user can change the quantities with the plus, minus symbol button, also total price will be changed automatically.

In checkout page, the user can check the invoice with order summary.

## Contributing
Ran Ding
Minseok Kim
Hoang Name Nguyen