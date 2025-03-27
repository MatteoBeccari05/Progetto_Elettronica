<?php

$content = 'ElettroMerola Rovigo';
require_once '../strutture_pagina/functions_active_navbar.php';
require '../strutture_pagina/navbar.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <title>Home</title>
</head>
<body>

<div class="home-content">
    <div class="image-container">
        <img src="../images/img.JPG" alt="elettromerola" class="corriere-img">
    </div>
    <div class="description-container">
        <h2 class="titolo"><?=$content?></h2>
        <p>
            Benvenuti nel nostro negozio di elettronica! Siamo il tuo punto di riferimento per la tecnologia più innovativa e i prodotti elettronici di alta qualità. Dalle ultime novità in ambito di smartphone, computer e accessori, fino agli elettrodomestici intelligenti e alla domotica, il nostro negozio offre una vasta selezione di articoli per soddisfare tutte le tue esigenze tecnologiche.
        </p>
        <p>
            Ogni prodotto è scelto con cura per garantirti il miglior rapporto qualità-prezzo. Che tu stia cercando dispositivi all’avanguardia per il tuo ufficio, attrezzature per il tempo libero o semplicemente nuovi gadget per la casa, qui troverai sempre ciò che fa per te.
        </p>
        <p>
            <strong>Perché scegliere noi?</strong><br>
            - <strong>Assistenza professionale</strong>: Il nostro team di esperti è sempre disponibile per guidarti nella scelta dei prodotti giusti per te, rispondendo a tutte le tue domande e fornendo supporto post-vendita.<br>
            - <strong>Prodotti di qualità</strong>: Offriamo solo marchi affidabili e articoli testati, per garantirti una lunga durata e performance superiori.<br>
            - <strong>Offerte e promozioni</strong>: Ogni mese proponiamo sconti esclusivi e offerte speciali per farti risparmiare su tutti i tuoi acquisti.
        </p>
        <p>
            Visita il nostro negozio online o vieni a trovarci di persona per scoprire tutte le novità del mondo dell’elettronica. Siamo pronti ad aiutarti a trovare il prodotto perfetto per le tue necessità!
        </p>
    </div>
</div>

<?php
require '../strutture_pagina/footer.php';
?>

</body>
</html>
