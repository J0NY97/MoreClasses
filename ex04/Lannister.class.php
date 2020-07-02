<?php
	class Lannister
	{
		public $surename = "Lannister";
		public $man = False;

		public function sleepWith($thing)
		{
			if ($this->surename == $thing->surename)
			{
				if (!$this->man && !$thing->man)
					print ("With pleasure, but only in a tower in Winterfell, then.\n");
				else
					print ("Not even if I'm drunk !\n");
			}
			else
				print ("Let's do this.\n");
		}
	}
?>
