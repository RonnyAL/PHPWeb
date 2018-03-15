<?php

interface StudentInterface {

    public function visAlle() : array;
    public function visStudent(int $id) : Student;
}