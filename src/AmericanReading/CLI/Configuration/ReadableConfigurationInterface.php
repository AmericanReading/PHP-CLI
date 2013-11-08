<?php

namespace AmericanReading\CLI\Configuration;

interface ReadableConfigurationInterface
{
    public function get($setting, $default = null);
}
