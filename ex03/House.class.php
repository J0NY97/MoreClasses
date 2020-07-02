<?php
	class House
	{
		public function introduce()
		{
			print (sprintf("House %s of %s : \"%s\"\n",
					$this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto()));
		}
	}
?>
