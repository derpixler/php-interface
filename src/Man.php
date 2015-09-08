<?php
/**
 * We all Humans!
 *
 * @author René Reimann <info@rene-reimann.de>
 * @version 1.0
 * @package Humans
 * @subpackage man
 */

class Man implements HumanBuilder {

	private $typeof = False;


	public function __construct(){}

	/**
	 * Set a type of man
	 *
	 * @param string $type set a type of man
	 * @return string
	 */
	public function setTyp( $type ){

		$types = array(
			  				'dreamlover' => new DreamLover(),
							'hipster' => new Hipster()
						);

		return $types[ $type ];


	}

	/**
	 * Return a type of man you wish
	 *
	 * @param string $type set a type of man
	 * @return objects
	 */
	public function get( $type ){

		$typeof = $this->setTyp( $type );

		return $typeof;

	}


}


