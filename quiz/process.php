<html>
<head>
<title> parabens  </title>
<style>
h6{text-align: center;
    color:red;}
.footer{
        margin: -8px;
        clear: both;
        background-image: url(https://giphy.com/gifs/uicideboy-g59-inlftrgmh-S3ncIZn0tN6eW6y6PU);
        background-position-x: center;
        color: white;
        text-align:center;
        padding: 100px;
}
</style>
</head>
<?php
$fid = $_GET['id'];
?>
<body bgcolor="#e1e1e1">
<div class="footer">
</div>
<div id="wrapper">
<br />
<br />
<ing
<?php
//questoes do fomulario
$answer1= $_POST['questao_1'];
$answer2= $_POST['questao_2'];
$answer3= $_POST['questao_3'];
$answer4= $_POST['questao_4'];
$answer5= $_POST['questao_5'];
$answer6= $_POST['questao_6'];
$answer7= $_POST['questao_7'];
$answer8= $_POST['questao_8'];
$answer9= $_POST['questao_9'];
$answer10= $_POST['questao_10'];
//final das questoes do fomulario
//
//calculador
$score = 0;
if ($answer1 == "C"){$score++;}
if ($answer2 == "A"){$score++;}
if ($answer3 == "C"){$score++;}
if ($answer4 == "D"){$score++;}
if ($answer5 == "B"){$score++;}

if ($answer6 == "A"){$score++;}
if ($answer7 == "C"){$score++;}
if ($answer8 == "A"){$score++;}
if ($answer9 == "B"){$score++;}
if ($answer10 == "D"){$score++;}
$progress = ($score / 10 * 100 );
//fim calculador

echo "<center><font face='Berlin Sans FB' size='10'><color='green'>parabens você acertou:</color><br> $score/10</font></center>";

echo "<center><font face='Berlin Sans FB' size='10'><color='green'>voce teve um Desempenho de:</color><br> $progress</font></center>";





?>
</div>
</body>
</html>