## What's this
[CIUnit](https://github.com/RodolfoSilva/CIUnit-for-CI3) for CodeIgniter 3.x
[CIUnit](https://github.com/fukata/CIUnit-for-CI2) for CodeIgniter 2.x

## Installation
## Use install.sh
	./tools/install.sh [CI3 Project Path]
## Manual
### Copy CIUnit Files
	cp -R CIUnit-for-CI3/application [CI3 Project Path]/
	cp -R CIUnit-for-CI3/tests [CI3 Project Path]/
### Change Database Config
	vi [CI3 Project Path]/application/config/database.php

	$active_group = 'default';
	+ if (defined('CIUnit_Version')) {
	+     $active_group .= '_test';
	+ }
	$query_builder = TRUE;


## Run Tests
### AllTests
	cd [CI3 Project Path]/tests
	phpunit

### UnitTest
	cd [CI3 Project Path]/tests
	phpunit --no-configuration --bootstrap ../application/third_party/CIUnit/bootstrap_phpunit.php [Directory or PHP file path]

## Eclipse Settings
* [External Tools](http://fukata.org/2011/06/19/codeigniter2-tips-ciunit-for-ci2-on-eclipse/)

CIUnit AllTests

![CIUnit AllTests](http://farm3.static.flickr.com/2589/5847466967_be828bd800.jpg)

CIUnit UnitTest

![CIUnit UnitTest](http://farm4.static.flickr.com/3452/5848025028_d5ce7618cf.jpg)
