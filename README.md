# Agile Engineering PHP Vagrant Box
A simple box to run PHP code and tests for the 2016 Agile Engineering training

## Install

* Clone this repo
* Run `vagrant up` before the session (it downloads a box, so you'll want to do it on fast internet with time to spare)

## Running PHP

You can run PHP code either from the browser or from the command line. There's a sample file `index.php` to try it with.

### Command Line

From the `/vagrant` directory, run:
`php index.php`

### Browser

In your browser, go to: [http://192.168.33.22](http://192.168.33.22)

## Running Tests

PHPUnit is installed for you. It expects files in the `/vagrant` directory.
You can find the documentation for the version installed (3.7) [here](https://phpunit.de/manual/3.7/en/writing-tests-for-phpunit.html)

From the `/vagrant` directory, run:
`phpunit`

To run the sample test, from the `/vagrant` directory run:
`phpunit SampleTest`
