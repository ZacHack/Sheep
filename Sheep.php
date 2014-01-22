<?php

/*
__PocketMine Plugin__
name=Sheep
author=KnownUnown
version=4.0
apiversion=11,12
class=Sheep
 */

class Sheep implements Plugin{

    private $api;
    private $cfg;
    private $pfg;
    private $prefix;

    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;
    }

    public function init(){
        $this->cfg = new Config($this->api->plugin->configPath($this) . "config.yml", CONFIG_YAML, array(
                "debug" => true,
                "prefix" => "[Sheep]",
                "malaware-check" => false,
                "bad-functions" => array(),
            ));
        $this->prefix = $this->cfg->get("prefix");
        $this->pfg = new Config($this->api->plugin->configPath($this) . "plugins.json", CONFIG_JSON, array(

            ));
        console($this->prefix . " Starting Sheep 4.0.");
        $this->api->console->register("sheep", "Sheep version 4.0", array($this, "cmdHandler"));
    }

    public function cmdHandler(){

    }
}