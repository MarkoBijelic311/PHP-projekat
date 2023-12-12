<?php

include 'stranica.php';
class Kupac
    {
        public $izbor;
        public $izbor1;
        public $izbor2;

        public function __construct($izbor, $izbor1,$izbor2)
        {
            $this->izbor = $izbor;
            $this->izbor1 = $izbor1;
            $this->izbor2 = $izbor2;
        }
        public function IspisFajl($fileName)
        {
            $options = "Izbor elemenata \n Izbor 1:$this->izbor\n Izbor 2:$this->izbor1 \n Izbor 3:$this->izbor2";
            if (file_put_contents($fileName, $options) !== false) {
                return "Nije uspelo.";
            } else {
                return "Uspelo.";
            }
        }
    }
class Stanje extends Kupac
{
    public function __construct($izbor, $izbor1, $izbor2)
    {
        parent::__construct($izbor, $izbor1, $izbor2);
    }
    public $stanje = 3;
    public $stanje1 = 10;
    public $stanje2 = 5;

    function Dodavanje()
    {
        $this->stanje += 1;
        $this->stanje1 += 1;
        $this->stanje2 += 1;
    }

    public function ProveraStanja($izbor,$izbor1,$izbor2)
    {
            if($izbor!=NULL || $izbor1!=NULL || $izbor2!=NULL)
            {
                if($this->stanje>0 && $this->stanje1>0 && $this->stanje2> 0)
                {
                    if($izbor!=NULL)
                    {
                        $this->stanje-=1;
                    }
                    if($izbor1!=NULL)
                    {
                        $this->stanje1-=1;
                    }
                    if($izbor2!=NULL)
                    {
                        $this->stanje2-= 1;
                    }
                }
                else
                {
                    $this->Dodavanje();
                }
            }
            else
            {
                echo "Niste izabrali ni jedan proizvod.";
            } 
            }
        
}
    
?>