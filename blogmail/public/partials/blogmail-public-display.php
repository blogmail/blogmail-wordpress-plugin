<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/blogmail/blogmail-wordpress-plugin
 * @since      1.0.0
 *
 * @package    blogmail
 * @subpackage blogmail/public/partials
 */
?>

<?php
if ( get_option( 'blogmail_newsletter_id' ) ) {
    global $post;
    $newsletter_id = get_option( 'blogmail_newsletter_id' )
?>
    <div class="blogmail" style="margin-bottom: 0px; border-width: 1px; border-radius: 0.25rem; border-color: #cbd5e0; border-style: solid; padding: 0.5rem;">
      <script type="application/json">
        <?php echo json_encode([
          'newsletterId' => $newsletter_id,
          'styles' => [
            'formDiv' => [
              'display' => 'flex',
              'flex-wrap' => 'wrap',
            ],
            'label' => [
              'width' => '100%',
              'padding'=> '0.5rem',
              'font-size'=>'2rem',
            ],
            'subscribedDiv'=> [
              'width'=> '100%',
              'padding'=> `0.5rem`,
            ],
            'textInput'=> [
              'padding'=> '0.5rem',
              'flex-grow'=> '1',
              'margin'=> '0.25rem',
              'width' => 'auto',
            ],
            'submitInput'=> [
              'padding'=> '0.5rem',
              'margin'=> '0.25rem',
            ],
            'bottomDiv'=> [
              'color'=> '#718096',
              'padding'=> '0.5rem',
              'font-size'=> '1.5rem',
            ]
          ]
        ]) ?>
      </script>
    </div>
    <script async src="https://blogmail.co/v1/bm.js"></script>
<?php
}
?>
