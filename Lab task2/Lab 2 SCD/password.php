<?php

function check_password($pwd){
    $result = [
        "length_ok" => false,
        "has_upper" => false,
        "has_digit" => false,
        "has_special" => false,
        "score" => 0,
        "strength" => ""
    ];

    if(strlen($pwd) >= 8){
        $result["length_ok"] = true;
        $result["score"]++;
    }

    if(preg_match('/[A-Z]/', $pwd)){
        $result["has_upper"] = true;
        $result["score"]++;
    }

    if(preg_match('/[0-9]/', $pwd)){
        $result["has_digit"] = true;
        $result["score"]++;
    }

    if(preg_match('/[^A-Za-z0-9]/', $pwd)){
        $result["has_special"] = true;
        $result["score"]++;
    }

    if($result["score"] <= 1){
        $result["strength"] = "Weak";
    }elseif($result["score"] == 2){
        $result["strength"] = "Medium";
    }else{
        $result["strength"] = "Strong";
    }

    return $result;
}

$passwords = ["hey12", "Hello123", "abc!2025", "abc"];

foreach($passwords as $p){
    $res = check_password($p);
    echo "Password: \"$p\" — Score: ".$res["score"]."/4 — Strength: ".$res["strength"]."<br>";
}

?>
