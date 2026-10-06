<!DOCTYPE html>
<html>
<head>
    <title>Student Course Search</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .box{
            width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Student Course Search</h2>

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
        "courses"=>["Web Programming","Database Systems","Computer Networks","Software Engineering"]
    ],
    [
        "id"=>"S002",
        "name"=>"Bob Smith",
        "department"=>"Business",
        "semester"=>2,
        "courses"=>["Accounting","Marketing","Economics","Management"]
    ],
    [
        "id"=>"S003",
        "name"=>"Charlie Brown",
        "department"=>"Information Technology",
        "semester"=>4,
        "courses"=>["Cyber Security","Cloud Computing","Web Design","Programming"]
    ],
    [
        "id"=>"S004",
        "name"=>"David Lee",
        "department"=>"Engineering",
        "semester"=>1,
        "courses"=>["Physics","Calculus","Engineering Graphics","Mechanics"]
    ],
    [
        "id"=>"S005",
        "name"=>"Emma Wilson",
        "department"=>"Computer Science",
        "semester"=>5,
        "courses"=>["AI","Machine Learning","Data Structures","Operating Systems"]
    ],
    [
        "id"=>"S006",
        "name"=>"Frank Miller",
        "department"=>"Science",
        "semester"=>2,
        "courses"=>["Biology","Chemistry","Physics","Mathematics"]
    ]
];

if(isset($_POST['student_id'])){

    $searchID = $_POST['student_id'];
    $found = false;

    foreach($students as $student){

        if($student['id'] == $searchID){

            $found = true;

            echo "<h3>Student Information</h3>";
            echo "<p><strong>Student Name:</strong> ".$student['name']."</p>";
            echo "<p><strong>Department:</strong> ".$student['department']."</p>";
            echo "<p><strong>Semester:</strong> ".$student['semester']."</p>";

            echo "<h4>Courses:</h4>";
            echo "<ul>";

            foreach($student['courses'] as $course){
                echo "<li>$course</li>";
            }

            echo "</ul>";
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