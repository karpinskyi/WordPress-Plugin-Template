<?php
/**
 * Post type Frontend API file.
 *
 * @package WordPress Plugin Template/Includes
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Admin API class.
 */
class WordPress_Plugin_Template_Frontend_API {

  /**
   * Constructor function
   */
  public function __construct() {
    add_action( 'loop_start', array( $this, 'loop_start' ) );
  }

  public function loop_start() {
    echo '<div style="background-color:lime;">Hello World</div>';
  }

}
