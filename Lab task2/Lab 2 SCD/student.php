<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        body{
            background: #f5f5f5;
        }
        table{
            width: 80%;
            margin: 40px auto;
            border-collapse: collapse;
            background: #fff;
        }
        th, td{
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th{
            background: #333;
            color: white;
        }
    </style>
</head>
<body>

<?php

function processStudent($student){
    $marksArray = explode(",", $student["marks"]);
    $total = array_sum($marksArray);
    $avg = $total / count($marksArray);

    if($avg >= 80){
        $student["status"] = "Excellent";
    }elseif($avg >= 60){
        $student["status"] = "Good";
    }elseif($avg >= 40){
        $student["status"] = "Pass";
    }else{
        $student["status"] = "Fail";
    }

    switch($student["status"]){
        case "Excellent":
            $msg = "Awarded Scholarship";
            break;
        case "Good":
            $msg = "Can Apply for Internship";
            break;
        case "Pass":
            $msg = "Needs Improvement";
            break;
        default:
            $msg = "Repeat Semester";
    }

    return [
        "name"=>$student["name"],
        "age"=>(int)$student["age"],
        "marks"=>$marksArray,
        "average"=>number_format($avg,1),
        "status"=>$student["status"],
        "message"=>$msg
    ];
}

$students = [
    ["name"=>"Neha", "age"=>"21", "marks"=>"78,65,90,55,88", "status"=>""],
    ["name"=>"Reesha", "age"=>"19 years", "marks"=>"90,85,92,80,88", "status"=>""],
    ["name"=>"kasshish", "age"=>"18", "marks"=>"30,45,28,40,35", "status"=>""]
];

?>

<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Marks</th>
        <th>Average</th>
        <th>Status</th>
        <th>Message</th>
    </tr>
    <?php
    foreach($students as $stu){
        $res = processStudent($stu);
        echo "<tr>";
        echo "<td>".$res["name"]."</td>";
        echo "<td>".$res["age"]."</td>";
        echo "<td>".implode(", ", $res["marks"])."</td>";
        echo "<td>".$res["average"]."</td>";
        echo "<td>".$res["status"]."</td>";
        echo "<td>".$res["message"]."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
