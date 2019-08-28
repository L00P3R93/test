<?php

function get_data($dbconn,$index,$title,$table)
{
     $all = array();
    $q0 = mysqli_query($dbconn, "SELECT * FROM $table");
    while($result = mysqli_fetch_assoc($q0)){
        $all[] = $result;
    }
    return $all[$index][$title];
}
function get_cond_data($dbconn,$index,$title,$table,$col,$param)
{
     $all = array();
    $q0 = mysqli_query($dbconn, "SELECT * FROM $table WHERE $col='$param'");
    while($result = mysqli_fetch_assoc($q0)){
        $all[] = $result;
    }
    return $all[$index][$title];
}

function get_data_ordered($dbconn,$table,$col,$index,$title)
{
    $all = array();
    $q0 = mysqli_query($dbconn, "SELECT * FROM $table ORDER BY $col ASC");
    while($result = mysqli_fetch_assoc($q0)){
        $all[] = $result;
    }
    return $all[$index][$title];
}

function get_category($dbconn, $x, $index, $title, $table)
{
    $calls = array();
    $q = mysqli_query($dbconn, "SELECT * FROM $table WHERE post_category = '$x'");
    while($r = mysqli_fetch_assoc($q)){
        $calls[] = $r;
    }

    return $calls[$index][$title];
}

function get_post_data($dbconn, $index, $title, $id,$table)
{
    $all = array();
    $q0 = mysqli_query($dbconn, "SELECT * FROM $table WHERE id = '$id'");
    while($result = mysqli_fetch_assoc($q0)){
        $all[] = $result;
    }
    return $all[$index][$title];
}

function get_specific_data($dbconn, $table, $col, $param, $title){
    $all = array();
    $q = mysqli_query($dbconn, "SELECT * FROM $table WHERE $col = '$param'");
    $result = mysqli_fetch_assoc($q);
    return $result[$title];
}

function get_related_data($dbconn, $table, $col, $param, $index, $title){
    $all = array();
    $q = mysqli_query($dbconn, "SELECT * FROM $table WHERE $col = '$param'");
     while($result = mysqli_fetch_assoc($q)){
        $all[] = $result;
    }
    return $all[$index][$title];
}

function get_2user_data($dbconn, $value1, $value2, $table, $col, $param, $title){
    $all = array();
    $q = mysqli_query($dbconn, "SELECT $value1, $value2 FROM $table WHERE $col = '$param'");
    $result = mysqli_fetch_assoc($q);
    return $result[$title];
}
function get_1user_data($dbconn, $value, $table, $col, $param, $title){
    $all = array();
    $q = mysqli_query($dbconn, "SELECT $value FROM $table WHERE $col = '$param'");
    $result = mysqli_fetch_assoc($q);
    return $result[$title];
}

function selected($value1, $value2, $return)
{
	if($value1==$value2){
		echo $return;
	}
}

function get_rows($database, $table){
    $all = mysqli_num_rows(mysqli_query($database,"SELECT * FROM $table"));
    return $all;
}

function get_rows_data($database, $table, $col, $param){
    $all = mysqli_num_rows(mysqli_query($database,"SELECT * FROM $table WHERE $col='$param'"));
    return $all;
}
//get_category($dbconn, $cat, $i, 'imagename')

function get_risk($value1,$value2){

    return $risk_level;
}

function get_level($value1,$value2,$title){
    $risk_level = intval($value1) * intval($value2);
    //$risk_level = intval($risk_level);
    $all = array();
    $level = "";
    $color = "";
    $all['risk_level'] = $risk_level;
    if($risk_level <= 8){
        $level = "LOW";
        $color = "green";
        $all['level'] = $level;
        $all['color'] = $color;
    }else if($risk_level >=9 && $risk_level <=15){
        $level = "MEDIUM";
        $color = "green";
        $all['level'] = $level;
        $all['color'] = $color;
    }else if($risk_level >=16 && $risk_level <=25){
        $level = "HIGH";
        $color = "green";
        $all['level'] = $level;
        $all['color'] = $color;
    }
    return $all[$title];
}


?>