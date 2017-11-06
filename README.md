# eidsonator/WebLogViewerBundle



```php
public function registerBundles()
    {
        $bundles = [
            //... 
            new Eidsonator\WebLogViewerBundle\WebLogViewerBundle(),
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
