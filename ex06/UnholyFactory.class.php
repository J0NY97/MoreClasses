<?php
	class UnholyFactory
	{
		public $absorbed = array();

		public function absorb($fighter)
		{
			if ($fighter instanceof Fighter)
			{	
				if (!in_array($fighter, $this->absorbed))
				{
					$this->absorbed[] = $fighter;
					print ("(Factory absorbed a fighter of type $fighter->role)\n");
				}
				else
					print ("(Factory already absorbed a fighter of type $fighter->role)\n");
			}
			else
				print ("(Factory can't absorb this, it's not a fighter)\n");
		}

		public function fabricate($role)
		{
			foreach ($this->absorbed as $key => $absFighter)
			{
				if ($absFighter->role == $role)
				{
					print ("(Factory fabricates a fighter of type $role)\n");
					return (clone $absFighter);
				}
			}
			print ("(Factory hasn't absorbed any fighter of type $role)\n");
			return ;
		}
	}
?>
