# Dazzle Async ZMQ Channel

[![Build Status](https://travis-ci.org/dazzle-php/channel-zmq.svg)](https://travis-ci.org/dazzle-php/channel-zmq)
[![Code Coverage](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/?branch=master)
[![Code Quality](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dazzle-php/channel-zmq/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/dazzle-php/channel-zmq/v/stable)](https://packagist.org/packages/dazzle-php/channel-zmq) 
[![Latest Unstable Version](https://poser.pugx.org/dazzle-php/channel-zmq/v/unstable)](https://packagist.org/packages/dazzle-php/channel-zmq) 
[![License](https://poser.pugx.org/dazzle-php/channel-zmq/license)](https://packagist.org/packages/dazzle-php/channel-zmq/license)

<br>
<p align="center">
<img src="https://avatars0.githubusercontent.com/u/29509136?v=3&s=150" />
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

## Requirements

* PHP-5.6 or PHP-7.0+,
* UNIX or Windows OS.

## Installation

```
$> composer require dazzle-php/channel-zmq
```

## Tests

```
$> vendor/bin/phpunit -d memory_limit=1024M
```

## Contributing

Thank you for considering contributing to this repository! The contribution guide can be found in the [contribution tips][1].

## License

Dazzle Framework is open-sourced software licensed under the [MIT license][2].

[1]: https://github.com/dazzle-php/channel-zmq/blob/master/CONTRIBUTING.md
[2]: http://opensource.org/licenses/MIT
