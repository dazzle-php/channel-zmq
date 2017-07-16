# Dazzle Async ZMQ Channel

[![Build Status](https://travis-ci.org/dazzle-php/channel-zmq.svg)](https://travis-ci.org/dazzle-php/channel-zmq)
[![Code Coverage](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/?branch=master)
[![Code Quality](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/dazzle-php/channel-zmq/v/stable)](https://packagist.org/packages/dazzle-php/channel-zmq) 
[![Latest Unstable Version](https://poser.pugx.org/dazzle-php/channel-zmq/v/unstable)](https://packagist.org/packages/dazzle-php/channel-zmq) 
[![License](https://poser.pugx.org/dazzle-php/channel-zmq/license)](https://packagist.org/packages/dazzle-php/channel-zmq/license)

> **Note:** This repository is part of [Dazzle Project](https://github.com/dazzle-php/dazzle) - the next-gen library for PHP. The project's purpose is to provide PHP developers with a set of complete tools to build functional async applications. Please, make sure you read the attached README carefully and it is guaranteed you will be surprised how easy to use and powerful it is. In the meantime, you might want to check out the rest of our async libraries in [Dazzle repository](https://github.com/dazzle-php) for the full extent of Dazzle experience.

<br>
<p align="center">
<img src="https://raw.githubusercontent.com/dazzle-php/dazzle/master/media/dazzle-x125.png" />
</p>

## Description

Dazzle Channel-ZMQ is a component that uses asynchronous ZMQ bindings to implement transport model for Dazzle Channel.

## Feature Highlights

Dazzle Channel-ZMQ features:

* Channel model implementation using ZMQ bindings,
* Heartbeat mechanism,
* Reconnect mechanism,
* Event-based & Promise-based API,
* ...and more.

## Provided Example(s)

### Quickstart

TODO

### Additional

TODO

## Requirements

Dazzle Channel-ZMQ requires:

* PHP-5.6 or PHP-7.0+,
* UNIX or Windows OS.

## Installation

To install this library make sure you have [composer](https://getcomposer.org/) installed, then run following command:

```
$> composer require dazzle-php/channel-zmq
```

## Tests

Tests can be run via:

```
$> vendor/bin/phpunit -d memory_limit=1024M
```

## Versioning

Versioning of Dazzle libraries is being shared between all packages included in [Dazzle Project](https://github.com/dazzle-php/dazzle). That means the releases are being made concurrently for all of them. On one hand this might lead to "empty" releases for some packages at times, but don't worry. In the end it is far much easier for contributors to maintain and -- what's the most important -- much more straight-forward for users to understand the compatibility and inter-operability of the packages.

## Contributing

Thank you for considering contributing to this repository! 

- The contribution guide can be found in the [contribution tips](https://github.com/dazzle-php/channel-zmq/blob/master/CONTRIBUTING.md). 
- Open tickets can be found in [issues section](https://github.com/dazzle-php/channel-zmq/issues). 
- Current contributors are listed in [graphs section](https://github.com/dazzle-php/channel-zmq/graphs/contributors)
- To contact the author(s) see the information attached in [composer.json](https://github.com/dazzle-php/channel-zmq/blob/master/composer.json) file.

## License

Dazzle Framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

<hr>
<p align="center">
<i>"Everything is possible. The impossible just takes longer."</i> ― Dan Brown
</p>

