<?php
	
	namespace simon\parcer;

	/**
	* @author Vasily Rybakov <simonk8179@gmail.com>
	*/

	interface ParcerInterface 
	{
		/**
		 *@param string $url
		 *@param string $tag
		 *@return array  
		 */
		
		public function ParcerInterface(string $url) : array;
	}
?>