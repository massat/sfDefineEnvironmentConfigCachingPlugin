<?php

$this->configCache->import('config/config_handlers.yml', false);
foreach($this->handlers as $configName => $configHandler) {
    if(
        $configHandler instanceof sfDefineEnvironmentConfigHandler
        &&
        $configHandler->getParameterHolder()->get('cache', false)
    ) {
        $this->configCache->import($configName, false);
    }
}
