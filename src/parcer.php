<?php

	namespace simon\parcer;

	/**
	 * @author Vasily Rybakov <simonk8179@gmail.com>
	 */

	class Parcer implements ParcerInterface
	{
		public $userURL;

		public function __construct()
		{
			$this->userURL = $_POST['userURL'];

		}

		public function ParcerInterface($userURL)
		{
			$data = file_get_html($this->userURL);

			if ($data->innertext !='' && count($data->find('img'))) {
				foreach ($data->find('img') as $img) {
					echo '<img src="'.$img->src.'"/>'.'</br>';
				}
				echo '<hr>';
			}
			if ($data->innertext !='' && count($data->find('a'))) {
				foreach ($data->find('a') as $a) {
					echo '<a href="'.$this->userURL.'/'.$a->href.'">'.$a->plaintext.'</a></br>';
				}
			}
		}
	}
	$item = new Parcer;
	$item->ParcerInterface(true);
?>