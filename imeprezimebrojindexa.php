<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava studenta</title>
</head>
<body>
    <h1>Prijava</h1>
    <hr><br>
    <form method="POST">
    <label for="ime"> Ime:</label>
    <input type="text" name="ime" placeholder="Unesite vase ime:" required><br>
    <br>
    <label for="prezime">Prezime:</label>
    <input type="text" name="prezime" placeholder="Unesite vase prezime" required><br>
    <br>
    <label for="broj">Broj Indexa:</label>
    S <input type="number" name="broj" placeholder="Unesite vas broj indexa" maxlength="3" required><br>
    <br>
    <label for="godina">Godina upisa:</label>
    <input type="number" name="godina" placeholder="Unesite godinu upisa" required><br>
    <br>
    <input type="submit" name="sub" value="Unesite podatke">
    </form>
    
</body>
</html>

<?php

if(isset($_POST['sub']))
{
    
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $broj=$_POST['broj'];
    $god=$_POST['godina'];

if($broj>200 || $broj <0)
{
    echo "Uneli ste neispravan broj indexa! ";
    exit();
}

else if($god < 2000 || $god > 2020 )
{
    echo "Uneli ste neispravnu godinu upisa! ";
    exit();
}
else 
    echo "<h1>Vasi podaci</h1><hr>";
    echo "<br>";
    echo "Vase ime je:  $ime <br> ";
    echo "Vase prezime je:  $prezime <br>";  
    echo "Vas broj indexa je: S$broj <br>";
    echo "Vasa godina upisa je: $god <br>";

exit();

}
?>