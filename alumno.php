<?php
class alumno
	{
		public $nombre="Fer";
		public $apellido="Saibene";

		private function Mostrar()
		{
			echo "<br>";
			echo $this->nombre." ".$this->apellido;
		}
		public static function MostrarAlumno($unAlumno)
		{
			echo $unAlumno->Mostrar();

		}

	}
?>