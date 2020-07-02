<?php
	require_once "IFighter.class.php";

	class NightsWatch
	{
		public $fighters;

		public function recruit($ifighter)
		{
			$this->fighters[] = $ifighter;
		}

		public function fight()
		{
			foreach ($this->fighters as $fighter)
			{
				if ($fighter instanceof IFighter)
					$fighter->fight();
			}
		}
	}
?>
