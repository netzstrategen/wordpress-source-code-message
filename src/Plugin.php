<?php

namespace Netzstrategen\SourceCodeMessage;

class Plugin {

  /**
   * Prefix for naming.
   *
   * @var string
   */
  const PREFIX = 'source-code-message';

  /**
   * Gettext localization domain.
   *
   * @var string
   */
  const L10N = self::PREFIX;

  /**
   * @var string
   */
  private static $baseUrl;

  /**
   * Plugin init.
   */
  public static function init() {
    if (is_admin()) {
      return;
    }

    static::renderCustomMessage();
  }

  /**
   * Renders custom message at very beginning of HTML frontend code.
   */
  public static function renderCustomMessage() {
    $source_code_message = get_option('source_code_message');
    echo '<!-- ' . $source_code_message . ' -->';
  }

  /**
   * Loads the plugin textdomain.
   */
  public static function loadTextdomain() {
    load_plugin_textdomain(static::L10N, FALSE, static::L10N . '/languages/');
  }

  /**
   * The absolute filesystem base path of this plugin.
   *
   * @return string
   */
  public static function getBasePath() {
    return dirname(__DIR__);
  }

}
