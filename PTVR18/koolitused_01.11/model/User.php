<?php
class User
{
    // property declaration
    private $id ;
	private $nimi;
	private $parool;
	private $status;

	//construct
	 function __construct($id,$nimi,$parool,$status)
    {
       $this->id=$id;
	   $this->nimi=$nimi;
	   $this->parool=$parool;
	   $this->status=$status;
		
    }
    // method declaration
	
	public function getId() {
        return $this->id;
    }
    public function getNimi() {
       return $this->nimi;
    }
	 public function getParool() {
       return $this->parool;
    }
		public function getStatus() {
        return $this->status;
    }
}
?>