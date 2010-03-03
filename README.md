# sfDefineEnvironmentConfigCachingPlugin

This plugin provides a convinience of handling original yamls for defining environmental configurations.
It caches configurations handled by sfDefineEnvironmentConfigHandler by according to the parameter "cache" in config/config_handlers.yml.

## Installation

  * Install the Plugin

        $ symfony plugin:install sfDefineEnvironmentConfigCachingPlugin

  * Create your original yml.

    ex. config/foobar.yml

        [yml]
        all:
          .settings:
            value: foo
        
        prod:
          .settings:
            value: bar

  * Create config_handlers.yml and set cache enabled.

    ex. config/config_handlers.yml

        [yml]
        config/foobar.yml:
          class: sfDefineEnvironmentConfigHandler
          param:
            # cache:  off   # disable cache (default true)
            prefix: fb_
        
  * Use configuration in your applications.

        [php]
        $value = sfConfig::get('fb_value');

