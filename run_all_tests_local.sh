#!/bin/bash -e
bin/behat -c behat_local_firefox.yml
phpunit tests/phpunit/TestSuites
