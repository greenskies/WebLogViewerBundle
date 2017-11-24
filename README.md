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
