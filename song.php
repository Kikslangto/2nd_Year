<?php 
$title = "Iris";
$artist = "By: Goo Goo Dolls";
$nouns = [
    'forever', #0
    'Heaven', #1
    'home', #2
    'moment', #3
    'life', #4
    'world', #5
    'everything', #6
    'truth', #7
    'tears', #8
    'lies', #9
    'movies', #10
    'tonight', #11
];

$verbs = [
    'give', #0
    'touch', #1
    'feel', #2
    'go', #3
    'taste', #4
    'breathe', #5
    'miss', #6
    'see', #7
    'understand', #8
    'want', #9
    'fight', #10
    'come', #11
    'bleed', #12
    
];
$adjective =[
    'closest', #0
    'broken', #1
    'alive', #2
    'this', #3
    'your', #4
    'all', #5
    'the', #6
    'that', #7
];
$and="And";
$knowrepeats ="know";
$berepeats = "be";
$you ="you";

$numnouns = count($nouns);
$numverbs = count($verbs);
$numadj = count($adjective);

$total = $numadj + $numnouns + $numverbs;
$numberofwords = '248';
$exclu = $numberofwords - $total;

$verse1 = "$and I'd $verbs[0] up $nouns[0] to $verbs[1] $you<br><br>
        Cause I $knowrepeats $adjective[7] $you $verbs[2] me somehow<br><br>
        $you're $adjective[6] $adjective[0] to $nouns[1] $adjective[7] I'll ever $berepeats<br><br>
        $and I don't wanna $verbs[3] $nouns[2] right now<br><br>
        $and $adjective[5] I could $verbs[4] is tis $nouns[3]<br><br>
        $and $adjective[5] I can $verbs[5] is $adjective[4] $nouns[4]<br><br>
        $and sooner or later, it's over<br><br>
        I just don't wanna $verbs[6] $you $nouns[11]";

$chorus = "$and I don't $verbs[9] $adjective[6] $nouns[5] to $verbs[7] me<br><br>
            Cause I don't think $adjective[7] they'd $verbs[8]<br><br>
            When $nouns[6]'s made to $berepeats $adjective[1]
            I just $verbs[9] $you to $knowrepeats who I am";

$verse2 = "$and $you can't $verbs[10] $adjective[6] $nouns[8] $adjective[7] ain't comin<br><br>
            Or $adjective[6] $nouns[3] of $nouns[7] in $adjective[4] $nouns[9]<br><br>
            When $nouns[6] feels like $adjective[6] $nouns[10]<br><br>
            Yeah, $you $verbs[12] just to $knowrepeats $you're $adjective[2]";
$repeats = "I just $verbs[9] $you to $knowrepeats who I Am";
?>



<!DOCTYPE html>
<html>
    <head>
        
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width , initial-scale=1">
        <title> Iris Lyrics </title>
        <style>
            body {
  font-family: "Raleway", sans-serif;
  background-color: #6A88C6;
  color: #fcba63;
  margin: 0px;
  text-align: center;
  background-size: 245px 380px;
  background-position: right top;
  background-repeat: repeat-y;
}
h1 {
  font-family: "Playfair Display", serif;
  padding: 10px 20px 12px 20px;
  margin: 0px;
  font-size: 2.5em;
  color: #fcba63;
}
h2 {
  font-weight: 700;
  font-size: 1.5em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  padding: 20px;
  margin: 0px;
}

h3 {
  font-weight: 700;
  font-size: 1em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  padding: 20px;
  margin: 0px;
}

p {
  padding: 6px 20px 6px 20px;
  margin: 0px;
}
    </style>   
    </head>
    
    <body {background-color: #6A88C6;}>
    
        <h1> <?=$title?> </h1>
        <h2> <?=$artist?> </h2>
        <h3>Verse1</h3>
        <p><?=$verse1?></p>
        <h3>Chorus</h3>
        <p><?=$chorus?></p>
        <h3>Verse2</h3>
        <p><?=$verse2?></p>
        <h3>Chorus</h3>
        <p><?=$chorus?></p>
        <h3>Chorus</h3>
        <p><?=$chorus?></p>
        <p><?=$repeats?></p>
        <p><?=$repeats?></p>
        <p><?=$repeats?></p>
        <p><?=$repeats?><br><br></p>
        <p>Total of Nouns, Adjective, and Verbs used: <?=$total?></p>
        <p>Total number of words excluding Nons, Adjectives and Verbs <?=$exclu?></p>
        
    </body>
   
</html>