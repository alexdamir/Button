<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

//--------------------------------------------------------------------------------------------------------

class Student extends person {
    private $testScores;
  
    /*  
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    public function __construct($first_name, $last_name, $identification, $scores) {
        parent::__construct($first_name, $last_name, $identification);
        $this->testScores = $scores;
    }
    

    /*  
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    function calculate() {
        if (count($this->testScores)) {
            $average = array_sum($this->testScores) / count($this->testScores);
        } else {
            $average = 0;
        }
        if ( ( $average >= 90 ) and ( $average <= 100 ) ) {
            $grade = "O";
         } elseif ( ( $average >= 80 ) and ( $average < 90 ) ) {
            $grade = "E";
        } elseif ( ( $average >= 70 ) and ( $average < 80 ) ) {
            $grade = "A";
        } elseif ( ( $average >= 55 ) and ( $average < 70 ) ) {
            $grade = "P";
        } elseif ( ( $average >= 40 ) and ( $average < 55 ) ) {
            $grade = "D";
        } elseif ($average < 40) {
            $grade = "T";
        }
        return $grade;
    }

}
//--------------------------------------------------------------------------------------------------------
$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");