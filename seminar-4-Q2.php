<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Search</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .box{
            width: 700px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td{
            border: 1px solid black;
        }
        th, td{
            padding: 10px;
            text-align: center;
        }
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">

<h2>Student Grade Search</h2>

<form method="post">
    Student ID:
    <input type="text" name="student_id" required>
    <input type="submit" value="Search">
</form>

<?php

$students = [

[
    "id"=>"S001",
    "name"=>"Alice Johnson",
    "department"=>"Computer Science",
    "semester"=>3,
    "grades"=>[
        "Web Programming"=>"A",
        "Database Systems"=>"B+",
        "Computer Networks"=>"A-",
        "Software Engineering"=>"A"
    ]
],

[
    "id"=>"S002",
    "name"=>"Bob Smith",
    "department"=>"Business",
    "semester"=>2,
    "grades"=>[
        "Accounting"=>"B",
        "Marketing"=>"A",
        "Economics"=>"B+",
        "Management"=>"A-"
    ]
],

[
    "id"=>"S003",
    "name"=>"Charlie Brown",
    "department"=>"Information Technology",
    "semester"=>4,
    "grades"=>[
        "Cyber Security"=>"A",
        "Cloud Computing"=>"A-",
        "Web Design"=>"B+",
        "Programming"=>"A"
    ]
],

[
    "id"=>"S004",
    "name"=>"David Lee",
    "department"=>"Engineering",
    "semester"=>1,
    "grades"=>[
        "Physics"=>"B+",
        "Calculus"=>"A",
        "Engineering Graphics"=>"A-",
        "Mechanics"=>"B"
    ]
],

[
    "id"=>"S005",
    "name"=>"Emma Wilson",
    "department"=>"Computer Science",
    "semester"=>5,
    "grades"=>[
        "AI"=>"A",
        "Machine Learning"=>"A",
        "Data Structures"=>"A-",
        "Operating Systems"=>"B+"
    ]
],

[
    "id"=>"S006",
    "name"=>"Frank Miller",
    "department"=>"Science",
    "semester"=>2,
    "grades"=>[
        "Biology"=>"B+",
        "Chemistry"=>"A-",
        "Physics"=>"B",
        "Mathematics"=>"A"
    ]
]

];

if(isset($_POST['student_id'])){

    $searchID = $_POST['student_id'];
    $found = false;

    foreach($students as $student){

        if($student['id'] == $searchID){

            $found = true;

            echo "<h3>Student Information</h3>";
            echo "<p><strong>Name:</strong> ".$student['name']."</p>";
            echo "<p><strong>Department:</strong> ".$student['department']."</p>";
            echo "<p><strong>Semester:</strong> ".$student['semester']."</p>";

            echo "<h3>Grades</h3>";

            echo "<table>";
            echo "<tr><th>Course</th><th>Grade</th></tr>";

            foreach($student['grades'] as $course=>$grade){
                echo "<tr>";
                echo "<td>$course</td>";
                echo "<td>$grade</td>";
                echo "</tr>";
            }

            echo "</table>";

            break;
        }
    }

    if(!$found){
        echo "<p class='error'>Student ID not found!</p>";
    }
}

?>

</div>

</body>
</html>