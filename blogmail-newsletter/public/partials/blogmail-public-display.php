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
    <div class="blogmail" style="margin-bottom: 0px;">
      <script type="application/json">
        <?php
        echo json_encode(
            [
				'newsletterId' => $newsletter_id,
				'classes' => [
					'a' => 'blogmail-a',
					'form' => 'blogmail-form',
					'formDiv' => 'blogmail-formDiv',
					'label' => 'blogmail-label',
					'subscribedDiv' => 'blogmail-subscribedDiv',
					'textInput' => 'blogmail-textInput',
					'submitInput' => 'blogmail-submitInput',
					'bottomDiv' => 'blogmail-bottomDiv',
				],
            ]
        )
        ?>
      </script>
    </div>
    <script async src="https://blogmail.co/v1/bm.js"></script>
<?php
}
?>
