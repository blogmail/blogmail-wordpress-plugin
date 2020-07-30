<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/blogmail/blogmail-wordpress-plugin
 * @since      1.0.0
 *
 * @package    blogmail
 * @subpackage blogmail/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    blogmail
 * @subpackage blogmail/public
 * @author     Brenden Matthews <brenden@brndn.io>
 */
class Blogmail_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $blogmail    The ID of this plugin.
	 */
	private $blogmail;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $blogmail       The name of the plugin.
	 * @param      string $version        The version of this plugin.
	 * @param      string $newsletter_id  The blogmail newsletter ID.
	 */
	public function __construct( $blogmail, $version, $newsletter_id ) {

		$this->blogmail = $blogmail;
		$this->version = $version;
		$this->newsletter_id = $newsletter_id;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Blogmail_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Blogmail_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->blogmail, plugin_dir_url( __FILE__ ) . 'css/blogmail-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Blogmail_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Blogmail_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->blogmail, plugin_dir_url( __FILE__ ) . 'js/blogmail-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Returns the blogmail embed newsletter template
	 *
	 * @since     3.0
	 * @return    string    The new comment text.
	 */
	public function blogmail_template( $content ) {
		global $post;

		echo $content;
		echo require plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/blogmail-public-display.php';
	}

}
