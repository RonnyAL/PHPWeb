<?php

class StudentRegister implements StudentInterface
{
	private $db;
	
	public function __construct(PDO $db)
	{
		$this->db = $db;
	}
	
	public function visAlle(): array
	{
		$studenter = array();

        try
        {
            $resultat = $this->db->query("SELECT * FROM studenter ORDER BY etternavn");
            while ($student = $resultat->fetchObject("Student")) {
                $studenter[] = $student;
            }
        }
        catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
		return $studenter;
    }
    
	public function visStudent(int $id) : Student
	{
        try
        {
            return $this->db->query("SELECT * FROM studenter WHERE id = " . $_GET['id'])->fetchObject("Student");
        }
        catch (InvalidArgumentException $e) {
            print $e->getMessage() . PHP_EOL;
        }

	}

}