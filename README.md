# Slim 3 Skeleton

A skeleton for [Slim 3 Framework](http://slimframework.com/).

## Included libraries
* Slim 3.x
 * Flash messages
 * Twig template engine 1.x
 * Custom Error and NotFound handler
 * NoTrailingSlash Middleware

## Directory structure
```
path/to/project
|-- app              <- Application config files
|   |-- slim         <- Slim config files
|   `-- twig         <- Twig templates
|-- bin              <- Own scripts
|-- etc              <- Own config files (like Apache)
|-- lib              <- Vendor files (for composer)
|-- log              <- Log files
|-- pub              <- Webserver document root
|   |-- css
|   |-- img
|   |-- js
|   `-- lib
|-- src              <- Application classes (\App namespace)
|   |-- Controller
|   |-- Handler
|   |-- Middleware
|   |-- Provider
|   `-- Tests
`-- tmp              <- Temporary files
    |-- session
    `-- twig
```

## Requirements

* PHP 7
* [Composer][compoer]

## Usage

### Install / Create project

```shell
$ composer create-project ansas/slim-skeleton path/to/project
```

### Develop / Run PHP build-in server

```shell
$ cd path/to/project
$ composer server
```
Open web browser with address http://any-domain-pointing-to-server:8888

### Test / Check coding style and test code

```shell
$ cd path/to/project
$ composer test
```