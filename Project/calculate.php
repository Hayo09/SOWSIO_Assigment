<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = explode(" ", $_POST["question"]);
    $awnser = (int)$question[0] * (int)$question[2];
    $input = (int)$_POST['awnser'];
    if ($awnser == $input) {
        $message = "<strong>GRATZ!</strong> That was correct";
        $data['alert'] = "alert-success";
    } else {
        $message = "<strong>Incorrect awnser</strong> Thee correct awnser = ". $awnser;
        $data['alert'] = "alert-danger";
    }
    $data += [
        'message' => $message,
        'yourAwnser' => $input,
        'awnser' => $awnser,
    ];

    require_once "../SOWISO_Assigment/math_Question.php";
} else {
}

?>