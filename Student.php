<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Bill Xue
 */
class Student {

    /**
     * constructor for Student
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * add an email address to a student
     * @param type $which type of email
     * @param type $address email address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * add a grade to a student
     * @param type $grade grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * calculate average grade 
     * @return type average grades
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * print the student info
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= '   ' . $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
