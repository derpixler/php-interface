<?php
/**
 * We all dream lovers!
 *
 * @author René Reimann <info@rene-reimann.de>
 * @version 1.0
 * @package Humans
 * @subpackage man/dreamlover
 */

class DreamLover extends Man {

	public function __construct(){

		return $this->bulid();

	}


	private function bulid(){

		$this->shower 			= self::shower( 7, '2 Times per day');
		$this->shave 			= self::shower( 7, 'Every day');
		$this->brushing_teeth 	= self::shower( 7 );

	}

	/**
	 * set taken shower at week
	 *
	 * @see interface Sanitariness
	 * @param int
	 * @param string
	 */
	private function shower( $int, $string ){

		$shower = array(
						7 => 'Daily',
						5 => 'sometimes'
					);

		print_r($shower);

		#return $shower[ $int ] $string;

	}

	/**
	 * set shaves at time
	 *
	 * @see interface Sanitariness
	 * @param int
	 */
	private function shave( $int, $string ){

		$shave = array(
						7 => 'Daily',
						5 => 'sometimes'
					);

		#return $shave[ $int ], $string;

	}

	/**
	 * set teeth care
	 *
	 * @see interface Sanitariness
	 * @param int
	 */
	private function brushing_teeth( $int ){

		$brushing = array(
						1 => 'Daily',
						2 => 'sometimes'
					);

		#return $brushing[ $int ];

	}

}