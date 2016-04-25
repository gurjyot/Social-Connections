<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
  header('Location: ../../');
  exit;
}

qa_register_plugin_module(
  'widget', // type of module
  'qa-social-connections-widget.php', // PHP file containing module class
  'qa_social_connections_widget', // module class name in that PHP file
  'Social Connections' // human-readable name of module
);