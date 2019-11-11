<?php
class Cours
{
    // property declaration
    private $id ;
	private $nimetus;
	private $hind;
	private $categooria;

	//construct
	 function __construct($id,$nimi,$hind,$categooria)
    {
       $this->id=$id;
	   $this->nimetus=$nimi;
		$this->hind=$hind;
		$this->$categooria=$categooria;
    }
	
	
    // method declaration
	
	public function displayId() {
        echo $this->id;
    }
    public function displayNimetus() {
        echo $this->nimetus;
    }
	 public function displayHind() {
        echo $this->hind;
    }
	
	public function displayKategooria() {
        echo $this->hind;
    }
	
	public function getId() {
       return $this->id;
    }
    public function getNimetus() {
        return $this->nimetus;
    }
	 public function getHind() {
        return $this->hind;
    }
	
	public function getCategooria() {
        return $this->$categooria;
    }
}
?>