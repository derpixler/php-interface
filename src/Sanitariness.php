<?php
/**
 * lets get fresh
 *
 * @author René Reimann <info@rene-reimann.de>
 * @version 1.0
 */

interface Sanitariness {

	/**
	 * set taken shower at week
	 * @param int
	 * @param string
	 */
	public function shower( $int, $string );

	/**
	 * set shaves at time
	 * @param int
	 * @param string
	 */
	public function shave( $int, $string );

	/**
	 * set teeth care
	 * @param int
	 */
	public function brushing_teeth( $int );

}