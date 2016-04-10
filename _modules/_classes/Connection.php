<?php
	class Connection
	{
		private $Connect = FALSE;

		private $Host = MYSQL_HOSTNAME;
		private $User = MYSQL_USERNAME;
		private $Pass = MYSQL_PASSWORD;
		private $Data = MYSQL_DATABASE;

		public function __construct()
		{
			$this->Connect();

//			if(connection_aborted() == TRUE)
//			{
//
//			}
		}

		private function Connect()
		{
			$this->Connect = new mysqli($this->Host, $this->User, $this->Pass, $this->Data);

			if($this->Connect->connect_errno)
			{
				exit('Não foi possível realizar a Conexão.');

				return FALSE;
			}

			return TRUE;
		}
	}
?>
