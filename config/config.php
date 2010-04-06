<?php

// load configurations
include $this->configCache->checkConfig('config/config_handlers.yml');

foreach($this->handlers as $name => $configHandler) {
    
    // only configurations handled by sfDefineEnvironmentConfigHandler will be cached.
    if(
        $configHandler instanceof sfDefineEnvironmentConfigHandler
        &&
        $configHandler->getParameterHolder()->get('cache', true)
        &&
        strpos($name, 'module.yml') === false // Ignores module.yml, because they are cached automatically.
    ) {
        $this->configCache->import($name, false);
    }
}
