[![build status](https://travis-ci.org/greenskies/WebLogViewerBundle.svg?branch=master)](https://travis-ci.org/greenskies/WebLogViewerBundle.svg?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/greenskies/WebLogViewerBundle/badge.svg?branch=master)](https://coveralls.io/github/greenskies/WebLogViewerBundle?branch=master)

# WebLogViewerBundle

## Description
A Symfony bundle to enable viewing your log files via your web front end.

It includes color-coded and collapsable log levels, as well as formatted JSON to SQL.

### Installation

Use composer to download the bundle from packagist

```bash
composer require greenskies/web-log-viewer-bundle
```

### Register the bundle

```php
public function registerBundles()
    {
        $bundles = [
            //... 
            new Greenskies\WebLogViewerBundle\WebLogViewerBundle(),
            //...
        ];
```

### Routing

```yml
# app/config/routing.yml

logs:
    resource: '@WebLogViewerBundle/Controller/'
    type: annotation
```

### Security

Since logs can contain sensitive data it is important that we control access to them.


```yml
security:
    #...
    access_control:
        - { path: ^/logs,           roles: ROLE_ADMIN }
        #...
    #...
```
