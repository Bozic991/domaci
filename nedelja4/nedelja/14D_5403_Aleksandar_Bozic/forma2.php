<!-- Napraviti formu koja u jednom inputu prihvata ime i prezime razdvojene razmakom. Posle slanja forme, prikazati inicijale u obliku I.P. (sad saljem sa uputstvom 😊 za prvo slovo - je lako, za drugo slovo - nadjite poziciju razmaka preko strpos, a onda preko substr uzmete slovo na sledecoj poziciji) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="zadatak2.php"  method="GET">
        <input type="text" name="ime_prezime" value="IME PREZIME">

        <input type="submit" value="POSALJI">
    </form>
    <!-- <iframe name="rezultat"></iframe> -->
</body>
</html>