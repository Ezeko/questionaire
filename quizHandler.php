<?php
//connect to database
include_once('connect.php');

$Que1= $_POST['Question1'];
$Que2= $_POST['Question2'];
$Que3= $_POST['Question3'];
$Que4= $_POST['Question4'];
$Que5= $_POST['Question5'];
$Que6= $_POST['Question6'];
$Que7= $_POST['Question7'];
$Que8= $_POST['Question8'];
$Que9= $_POST['Question9'];
$Que10= $_POST['Question10'];
$Que11= $_POST['Question11'];
$Que12= $_POST['Question12'];
$Que13= $_POST['Question13'];
$Que14= $_POST['Question14'];
$Que15= $_POST['Question15'];
$Que16= $_POST['Question16'];
$Que17= $_POST['Question17'];
$Que18= $_POST['Question18'];
$Que19= $_POST['Question19'];
$Que20= $_POST['Question20'];
$Que21= $_POST['Question21'];
$Que22= $_POST['Question22'];
$Que23= $_POST['Question23'];
$Que24= $_POST['Question24'];
$Que25= $_POST['Question25'];
$Que26= $_POST['Question26'];
$Que27= $_POST['Question27'];
$Que28= $_POST['Question28'];
$Que29= $_POST['Question29'];
$Que30= $_POST['Question30'];
$Que31= $_POST['Question31'];
$Que32= $_POST['Question32'];

$name =$_POST['userName'];
$email= $_POST['email'];
//initialize score
$que1Score = 0; $que2Score= 0;$que3Score = 0; $que4Score = 0; $que5Score= 0;$que6Score = 0;$que7Score= 0;$que8Score = 0;
$que9Score = 0;$que10Score = 0;$que11Score = 0;$que12Score = 0;$que13Score = 0;$que14Score = 0;$que15Score = 0;$que16Score= 0;
$que17Score = 0;$que18Score = 0;$que19Score = 0;$que20Score = 0;$que21Score = 0;$que22Score = 0;$que23Score = 0;$que24Score=0;
$que25Score= 0;$que26Score = 0;$que27Score= 0; $que28Score= 0;$que29Score = 0;$que30Score = 0;$que31Score =0;
$que32Score = 0;


if ($Que1 ==="7-8 órát"){

    $que1Score = 10;
} else if ($Que1 === "kevesebb, mint 6 órát"){
    $que1Score = 4;
} else if($Que1 === "4-6 órát, néha többet és rendszertelenül"){
    $que1Score = 2;
}else{
    $que1Score = 0;
}

//question 2
if ($Que2 ==="napközben is hajlamos vagyok elaludni"){
    $Que2 = 6;
} else if($Que2 === "este könnyen és jól alszom") {
    $Que2 = 10;
}else if($Que2 ==="sokszor vagyok álmatlan"){
    $Que2 = 3;
}else{
    $Que2 = 0;
}

//Question 3

if ($Que3 === "nem"){
    $que3Score = 10;
}else if ($Que3 === "alkalmanként"){
    $que3Score = 6;
}else if ($Que3 === "rendszeresen"){
    $que3Score = 2;
}else {
    $que3Score = 0;
}

//Question 4

if ($Que4 === "minden részletében"){
    $que4Score = 10;
}else if ($Que4 === "nagyjából"){
    $que4Score = 7;
}else if($Que4 === "homályosan"){
    $que4Score = 4;
}else if($Que4 === "egyáltalán nem"){
    $que4Score = 1;
}else {
    $que4Score = 0;
}

//question 5
if ($Que5 === "egyjegyű számokat"){
    $que5Score = 3;
}else if($Que5 === "kétjegyű számokat"){
    $que5Score = 5;
}else if ($Que5 === "három- vagy többjegyű számokat"){
    $que5Score = 10;
}else{
    $que5Score = 0;
}
// QUESTION 6
if ($Que6 === "nem"){
    $que6Score = 10;
}else if($Que6 === "ritkán"){
    $que6Score = 7;
}else if ($Que6 ==="időnként"){
    $que6Score = 5;
}else if ($Que6 === "gyakran"){
    $que6Score = 3;
}else if ($Que6 === "állandóan"){
    $que6Score = 0;
} else {
    $que6Score = 0;
}
// QUESTION 7
if ($Que7 === "nem"){
    $que7Score = 10;
}else if($Que7 === "ritkán"){
    $que7Score = 7;
}else if ($Que7 ==="időnként"){
    $que7Score = 5;
}else if ($Que7 === "gyakran"){
    $que7Score = 3;
}else if ($Que7 === "állandóan"){
    $que7Score = 0;
} else {
    $que7Score = 0;
}
// QUESTION 8
if ($Que8 === "nem"){
    $que8Score = 0;
}else if ($Que8 === "ritkán"){
    $que8Score = 2;
}else if ($Que8 === "időnként"){
    $que8Score = 4;
}else if ($Que8 ==="gyakran"){
    $que8Score = 7;
}else if($Que8 ==="mindig"){
    $que8Score = 10;
}else {
    $que8Score = 0;
}

//QUESTION 9
if ($Que9 === "nem"){
    $que9Score =10;
}else if ($Que9 === "ritkán"){
    $que9Score = 8;
}else if ($Que9 === "időnként"){
    $que9Score = 6 ;
}else if ($Que9 === "gyakran"){
    $que9Score =3;
}else if($Que9 === "állandóan"){
    $que9Score = 1;
}else {
    $que9Score = 0;
}
//QUESTION 10
if($Que10 === "nem"){
    $que10Score = 10;
}else if($Que10 === "ritkán"){
    $que10Score = 7;
}else if ($Que10 === "időnként"){
    $que10Score = 4;
}else if ($Que10 === "gyakran"){
    $que10Score = 2;
}else if($Que10 === "mindig"){
    $que10Score = 0;
}else{
    $que10Score = 0;
}
//QUESTION 11
if ($Que11 === "nem"){
    $que11Score = 1;
}else if($Que11 === "ritkán"){
    $que11Score = 3;
}else if($Que11 === "időnként"){
    $que11Score = 5;
}else if($Que11 === "gyakran"){
    $que11Score = 8;
}else if ($Que11 === "mindig"){
    $que11Score =10;
}else {
    $que11Score = 0;
}
//QUESTION 12
if ($Que12 === "nem"){
    $que12Score = 10;
}else if($Que12 === "ritkán"){
    $que12Score = 8;
}else if($Que12 === "időnként"){
    $que12Score = 6;
}else if($Que12 === "gyakran"){
    $que12Score = 4;
}else if ($Que12 === "állandóan"){
    $que12Score =2;
}else {
    $que12Score = 0;
}
//QUESTION 13
if ($Que13 === "nem"){
    $que13Score = 0;
}else if($Que13 === "ritkán"){
    $que13Score = 2;
}else if($Que13 === "időnként"){
    $que13Score = 5;
}else if($Que13 === "gyakran"){
    $que13Score = 8;
}else if ($Que13 === "mindig"){
    $que13Score =10;
}else {
    $que13Score = 0;
}
//QUESTION 14
if ($Que14 === "nem"){
    $que14Score = 0;
}else if($Que14 === "ritkán"){
    $que14Score = 2;
}else if($Que14 === "időnként"){
    $que13Score = 4;
}else if($Que14 === "gyakran"){
    $que14Score = 7;
}else if ($Que14 === "mindig"){
    $que14Score =10;
}else {
    $que14Score = 0;
}
//QUESTION 15
if ($Que15 === "nem"){
    $que15Score = 10;
}else if($Que15 === "ritkán"){
    $que15Score = 8;
}else if($Que15 === "időnként"){
    $que15Score = 4;
}else if($Que15 === "gyakran"){
    $que15Score = 2;
}else if ($Que15 === "mindig"){
    $que15Score =0;
}else {
    $que15Score = 0;
}
//QUESTION 16
if ($Que16 === "nem"){
    $que16Score = 0;
}else if($Que16 === "ritkán"){
    $que16Score = 2;
}else if($Que16 === "időnként"){
    $que16Score = 4;
}else if($Que16 === "gyakran"){
    $que16Score = 7;
}else if ($Que16 === "mindig"){
    $que16Score =10;
}else {
    $que16Score = 0;
}
//QUESTION17
if ($Que17 === "nem"){
    $que17Score = 10;
}else if($Que17 === "ritkán"){
    $que17Score = 7;
}else if($Que17 === "időnként"){
    $que17Score = 4;
}else if($Que17 === "gyakran"){
    $que17Score = 2;
}else if ($Que17 === "mindig"){
    $que17Score = 0;
}else {
    $que17Score = 0;
}
//QUESTION 18
if ($Que18 === "nem"){
    $que18Score = 2;
}else if($Que18 === "ritkán"){
    $que18Score = 4;
}else if($Que18 === "időnként"){
    $que18Score = 6;
}else if($Que18 === "gyakran"){
    $que18Score = 8;
}else if ($Que18 === "mindig"){
    $que18Score =10;
}else {
    $que18Score = 0;
}
//QUESTION 19
if ($Que19 === "nem"){
    $que19Score = 0;
}else if($Que19 === "ritkán"){
    $que19Score = 2;
}else if($Que19 === "időnként"){
    $que19Score = 4;
}else if($Que19 === "gyakran"){
    $que19Score = 7;
}else if ($Que19 === "mindig"){
    $que19Score =10;
}else {
    $que19Score = 0;
}
//QUESTION 20
if($Que20 === "nem"){
    $que20Score = 10;
}else if($Que20 === "ritkán"){
    $que20Score = 7;
}else if($que20Score === "időnként"){
    $que20Score =3;
}else if($Que20 === "gyakran"){
    $que20Score = 1;
}else if($Que20 === "állandóan"){
    $que20Score = 0;
}else {
    $que20Score = 0;
}
//QUESTION  21
if($Que21 ==="nem"){
    $que21Score = 2;
}else if($Que21 === "ritkán"){
    $que21Score = 4;
}else if ($Que21 === "időnként"){
    $que21Score = 6;
}else if ($Que21 === "gyakran"){
    $que21Score = 8;
}else if ($Que21 === "mindig"){
    $que21Score =10;
}else{
    $que21Score =0;
}
//QUESTION 22
if ($Que22 === "nem"){
    $que22Score = 10;
}else if($Que22 === "ritkán"){
    $que22Score = 8;
}else if ($Que22 === "időnként"){
    $que22Score = 5;
}else if ($Que22 === "gyakran"){
    $que22Score =2;
}else if($Que22 === "mindig"){
    $que22Score = 0;
}else{
    $que22Score = 0;
}
//QUESTION 23
if ($Que23 === "nem"){
    $que23Score = 1;
}else if($Que23 === "ritkán"){
    $que23Score = 3;
}else if($Que23 === "időnként"){
    $que23Score = 6;
}else if($Que23 === "gyakran"){
    $que23Score = 8;
}else if($Que23 === "mindig"){
    $que23Score= 10;
}else{
    $que23Score = 0;
}
//QUESTION 24
if($Que24 === "nem"){
    $que24Score =10;
}else if ($Que24 ==="ritkán"){
    $que24Score = 7;
}else if($Que24 === "időnként"){
    $que24Score =4;
}else if ($Que24 === "gyakran"){
    $que24Score =2;
}else if($Que24 === "mindig"){
    $que24Score = 0;
}else{
    $que24Score = 0;
}
//Question 25
if($Que25 === "nem"){
    $que25Score = 1;
}else if($Que25 === "ritkán"){
    $que25Score= 3;
}else if($Que25 === "időnként"){
    $que25Score = 5;
}else if($Que25 === "gyakran"){
    $que25Score = 8;
}else if($Que25 === "mindig"){
    $que25Score = 10;
}else{
    $que25Score = 0;
}
// Question 26
if ($Que26 === "nem"){
    $que26Score =10;
}else if($Que26 === "ritkán"){
    $que26Score = 7;
}else if ($Que26 === "időnként"){
    $que26Score = 4;
}else if($Que26 === "gyakran"){
    $que26Score =2;
}else if($Que26 === "mindig"){
    $que26Score = 0;
}else{
    $que26Score =0;
}
//Question 27
if ($Que27 === "nem"){
    $que27Score =10;
}else if($Que27 === "ritkán"){
    $que27Score = 7;
}else if ($Que27 === "időnként"){
    $que27Score = 4;
}else if($Que27 === "gyakran"){
    $que27Score =2;
}else if($Que27 === "mindig"){
    $que27Score = 0;
}else{
    $que27Score =0;
}
//Question 28
if ($Que28 === "nem"){
    $que28Score =1;
}else if($Que28 === "ritkán"){
    $que28Score = 3;
}else if ($Que28 === "időnként"){
    $que28Score = 5;
}else if($Que28 === "gyakran"){
    $que28Score =8;
}else if($Que28 === "mindig"){
    $que28Score = 10;
}else{
    $que28Score =0;
}
//Question 29
if ($Que29 === "nem"){
    $que29Score =10;
}else if($Que29 === "ritkán"){
    $que29Score = 8;
}else if ($Que29 === "időnként"){
    $que29Score = 6;
}else if($Que29 === "gyakran"){
    $que29Score =4;
}else if($Que29 === "mindig"){
    $que29Score = 2;
}else{
    $que29Score =0;
}
//Question 30
if ($Que30 === "nem"){
    $que30Score =10;
}else if($Que30 === "ritkán"){
    $que30Score = 8;
}else if ($Que30 === "időnként"){
    $que30Score = 5;
}else if($Que30 === "gyakran"){
    $que30Score =2;
}else if($Que30 === "mindig"){
    $que30Score = 0;
}else{
    $que30Score =0;
}
//Question 31
if($Que31 === "1-2 naponta") {
    $que31Score = 28;
}else if($Que31 === "kb.hetente"){
    $que31Score = 14;
}else if ($Que31 === "havonta 1-2 alkalommal"){
    $que31Score = 7;
}else if ($Que31 === "ritkábban vagy soha"){
    $que31Score = 0;
} else{
    $que31Score = 0;
}
//QUESTION 32;
if ($Que32 === "még egy éve sem"){
    $que32Score = 8;
}else if ($Que32 === "2-3 éve"){
    $que32Score = 12;
}else if($Que32 === "legalább 5 éve"){
    $que32Score= 17;
}else if($Que32==="legalább 5 éve"){
    $que32Score= 22;
}else if($Que32 === "még nem csináltam"){
    $que32Score = 0;
}else{
    $que32Score = 0;
}

//add score
$score = $que1Score + $que2Score + $que3Score + $que4Score + $que5Score + $que6Score + $que7Score + $que8Score +$que9Score + $que10Score + $que11Score +$que12Score + $que13Score + $que14Score + $que15Score + $que16Score +$que17Score + $que18Score + $que19Score + $que20Score + $que21Score + $que22Score + $que23Score + $que24Score + $que25Score + $que26Score + $que27Score + $que28Score +$que29Score + $que30Score + $que31Score + $que32Score;
$sql ="INSERT INTO `respondent` (name, score, email) VALUES ('$name', '$score', '$email') ";
//`respondent being database table
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if($query === true){
//echo ("Hi $name, Your Score is $score");
if($score ==0 && $score =<150){
    echo  ("Hi $name, Your Score is $score <br> jelentős kiegyensúlyozatlanság, koncentrációs problémák, zaklatottság: a stressz szintjének csökkentése ajánlott, főként relaxációs alapgyakorlatokkal");
}else if($score > 150 && $score =<210){
    echo ("Hi $name, Your score is $score <br> átlagos stressz, időnként figyelmi problémák, enyhe zaklatottság: relaxációs alapgyakorlatok és csukottszemes biofeedback ajánlott");
}else if ($score >210 && =< 270){
    echo("Hi $name, Your score is $score <br> jó összpontosítási és ellazulási képességek, átlagos kiegyensúlyozottság: koncentrációs gyakorlatok relaxációban, változatos biofeedback gyakorlatokkal javasolt");
}else {
    echo("Hi $name, Your score is $score <br> kiváló összpontosítás és kiegyensúlyozott életvitel: a csukott- és nyitottszemes gyakorlatok teljes skálája ajánlott");
}



?>