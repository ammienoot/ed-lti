<?php
/**
 * Blog creator interface.
 *
 * @author    DLAM Applications Development Team <ltw-apps-dev@ed.ac.uk>
 * @copyright University of Edinburgh
 * @license   https://www.gnu.org/licenses/gpl.html
 *
 * @link https://github.com/uoe-dlam/ed-lti
 */
interface Blog_Creator {

	/**
	 * Create the blog.
	 *
	 * @param array $data
	 *
	 * @return void
	 */
	public function create( array $data );
}
