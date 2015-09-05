<?php
/**
 * We all Humans!
 *
 * @author René Reimann <info@rene-reimann.de>
 * @version 1.0
 * @package Humans
 */

interface HumanBuilder {

	/**
	 * Set a type Human
	 *
	 * @param string $type set a type of Human
	 * @return string
	 */
	public function setTyp( $type );

	/**
	 * Return Human
	 *
	 * @param string
	 * @return objects
	 */
	public function get( $type );


}
