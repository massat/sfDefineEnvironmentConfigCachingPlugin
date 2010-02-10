<?php

// load configurations
include $this->configCache->checkConfig('config/config_handlers.yml');

foreach($this->handlers as $name => $configHandler) {
    
    // only configurations handled by sfDefineEnvironmentConfigHandler will be cached.
    if(
        $configHandler instanceof sfDefineEnvironmentConfigHandler
        &&
        $configHandler->getParameterHolder()->get('cache', true)
    ) {
        $this->configCache->import($name, false);
    }
}
