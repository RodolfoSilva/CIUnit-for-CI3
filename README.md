## What's this
[CIUnit](https://bitbucket.org/rafsoaken/ciunit) for CodeIgniter 2.x

## Installation
	cp -R CIUnit-for-CI2/application [CI2 Project Path]/

## Run Tests
### AllTests
	cd [CI2 Project Path]/application/tests
	phpunit

### UnitTest
	cd [CI2 Project Path]/application/tests
	phpunit --no-configuration --bootstrap ../third_party/CIUnit/bootstrap_phpunit.php [Directory or PHP file path]

## Eclipse Settings
* [External Tools](http://fukata.org/2011/06/19/codeigniter2-tips-ciunit-for-ci2-on-eclipse/)

![CIUnit AllTests](http://farm3.static.flickr.com/2589/5847466967_be828bd800.jpg)

![CIUnit UnitTest](http://farm4.static.flickr.com/3452/5848025028_d5ce7618cf.jpg)
