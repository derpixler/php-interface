<?php

/**
 * We all Humans!
 *
 * @author René Reimann <info@rene-reimann.de>
 * @version 1.0
 * @package Humans
 * @subpackage man
 */

#Require sanitariness interface
#require_once( dirname( __FILE__ ) . '/Sanitariness.php' );
#require_once( dirname( __FILE__ ) . '/Clothes.php' );

class Man implements Sanitariness, Clothes {

	private $typeof = False;


	public function __construct(){

		#Require variations of a man
		#require_once( dirname( __FILE__ ) . '/Dreamlover.php' );
		#require_once( dirname( __FILE__ ) . '/Hipster.php' );

	}

	/**
	 * Set a type of man
	 *
	 * @param string $type set a type of man
	 * @return string
	 */
	private function setTyp( $type ){

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

		return $this->setTyp( $type );

	}

}


#$Man = new Man;
#$myMan = $Man->get( 'dreamlover' );
#
#print_r( $myMan );

