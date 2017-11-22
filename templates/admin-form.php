<?php
  namespace Netzstrategen\SourceCodeMessage;

?>
<div class="wrap">
  <?php settings_fields('settings-group'); ?>
  <?php do_settings_sections('settings-group'); ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><?= __('Message:', Plugin::L10N) ?></th>
        <td>
          <textarea type="textarea" name="source_code_message" rows="5" cols="80"><?= esc_attr(get_option('source_code_message')) ?></textarea>
        </td>
    </tr>
  </table>
</div>
