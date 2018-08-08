<?php namespace SmsirWordpress;

class PluginSmsir
{

  private $plugin_menu;
  private $page_title;

  public function __construct($menu, $page_title) {
      
    $this->plugin_menu = $menu;
    $this->page_title = $page_title;
    
    // fireup the smsir wordpress plugin
    $this->init_smsir_plugin();

  }

  private function init_smsir_plugin() {
    // load all assets (styles and scripts)
    new UIAssetsSmsir();
    // create the options page of plugin
    new AdminPageSmsir($this->plugin_menu, $this->page_title);
    // create a metabox for posts
    new PostMetaboxSmsir();
    // create a dashboard widget for details
    new DashboardWidgetSmsir();
  }

}