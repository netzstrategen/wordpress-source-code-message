<?php

namespace Netzstrategen\SourceCodeMessage;

/**
 * Administrative back-end functionality.
 */
class Admin {

  /**
   * @implements admin_init
   */
  public static function init() {
    add_settings_section('source_code_message_setting_section','Source code message',__CLASS__ . '::renderSettingsPage','reading');
    static::registerSettingsFields();
  }

  /**
   * Register settings fields for messages.
   */
  public static function registerSettingsFields() {
    register_setting('settings-group', 'source_code_message');
  }

  /**
   * Renders settings page template.
   */
  public static function renderSettingsPage() {
    $template = Plugin::getBasePath() . '/templates/admin-form.php';
    load_template($template);
  }

}
