<?php

include $this->configCache->checkConfig('config/config_handlers.yml');

foreach($this->handlers as $name => $configHandler) {
    if(
        $configHandler instanceof sfDefineEnvironmentConfigHandler
        &&
        $configHandler->getParameterHolder()->get('cache', false)
    ) {
        $this->configCache->import($name, false);
    }
}
