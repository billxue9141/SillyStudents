<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();

        //add a new student John Doe to the students array
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        //add a new student Albert Einstein to the students array
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
         //add a new student Bill Xue to the students array
        $third = new Student();
        $third->surname = "Xue";
        $third->first_name = "Bill";
        $third->add_email('personal', 'billxue9141@hotmail.com');
        $third->add_email('school', 'bxue3@my.bcit.ca');
        $third->add_grade(100);
        $students['a00941893'] = $third;

        //sort the student list by key in decending order
        ksort($students);

        //print the students
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
