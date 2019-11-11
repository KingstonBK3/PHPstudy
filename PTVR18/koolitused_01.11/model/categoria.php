<?php
class Categoria
{
    // property declaration
    private $id ;
	private $nimetus;
	private $kirjeldus;

	//construct
	 function __construct($id,$nimi,$tekst)
    {
       $this->id=$id;
	   $this->nimetus=$nimi;
		$this->kirjeldus=$tekst;
    }
    // method declaration
	
	public function displayId() {
        echo $this->id;
    }
    public function displayNimetus() {
        echo $this->nimetus;
    }
	 public function displayKirjeldus() {
        echo $this->kirjeldus;
    }
	
	public function getId() {
        return $this->id;
    }
    public function getNimetus() {
       return $this->nimetus;
    }
	 public function getKirjeldus() {
       return $this->kirjeldus;
    }
}
?>