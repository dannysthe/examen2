<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index .css">
</head>

<?php 
include "header.php"; 
include "connect-db.php";
connectdb(); 
?>

 
<h2 class="h2">Venta de las casas mas perronas de toda Konoha</h2>
<img src="OIP.jpg" alt="Imagen centrada" style="display: block; margin: auto; width: 80%; max-width: 800px; height: auto;">



<section>
    <h2 class="section-title">Más sobre nosotros</h2>
    <div class="section-container">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-dollar" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M13 21h-6a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10" />
                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                <path d="M19 21v1m0 -8v1" />
            </svg>
            <h2>SEGURIDAD</h2>
            <img src="seguridad.jpg" alt="Imagen centrada" style="display: block; margin: auto;">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem possimus autem</p>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
            </svg>
            <h2>Precio</h2>
            <img src="dinero.jpg" alt="Imagen centrada" style="display: block; margin: auto;">

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem possimus autem</p>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                <path d="M12 7v5l3 3" />
            </svg>
            <h2>Tiempo</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem possimus autem</p>
        </div>
    </div>
</section>

<main>
    <h2>Casas y Depas en venta</h2>
    <div>
        <h2>Kakashi House</h2>
        <img src="Kakashi House.jpg" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa velit natus error, nihil adipisci temporibus
            pariatur iste eligendi ullam nostrum magni minima saepe veniam accusantium fugiat et tenetur dolore
            quibusdam.</p>
    </div>
    <button class="button"> Ver todas</button>
</main>

<section>
    <h2>ENCUENTRA LA CASA DE TU SUEÑOS</h2>
    <img src="konoha.jpg" alt="">
    <P>Llena el parrafo y un asesor se comunicara contigo de inmediato</P>
    <button class="button">Contactanos</button>
</section>



<?php include "footer.php"?>

</html>

