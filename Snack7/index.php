<?php 
/**
 * Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 * Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 */

$articolo = 'Come accadrà per tutti gli altri lavoratori, da venerdì anche per accedere alla Camera ed al Senato i parlamentari e i loro collaboratori, ma anche i membri del governo dovranno mostrare il green pass. Una delibera dei deputati questori trasmessa a tutti i deputati, infatti definisce l\'esibizione del certificato come condizione "inderogabile" per poter accedere in tutte le sedi di Montecitorio. Il gioco Vintage "da giocare". Nessuna installazione. Il gioco Vintage "da giocare". Nessuna installazione. Forge Of Empires In alternativa al green pass, sarà richiesto un tampone molecolare o un test antigenico. Al deputato che dovesse rifiutarsi di esibire il documento verrà applicata la sanzione dell\'articolo del regolamento interno di Montecitorio per i "fatti di eccezionale gravità che si svolgano nella sede della Camera, ma fuori dell\'aula": la "censura con interdizione di partecipare ai lavori parlamentari per un periodo da 2 a 15 giorni di seduta". Oltre a impedire la partecipazione ai lavori parlamentari per il deputato che non si adegua, la sanzione ha anche un costo economico: circa 250 euro al giorno, pari alla diaria che non viene percepita quando non si partecipa alle votazioni. Un ricorso diretto alla Corte costituzionale per conflitto di attribuzione: è quanto si apprestano a fare i parlamentari della componente de "l\'Alternativa c\'è", per contestare l\'adozione in Parlamento dell\'obbligo di green pass. Con il ricorso Ac non intende, viene spiegato, colpire solo la delibera della Camera dei deputati che ha introdotto l\'obbligo del pass ma lo stesso impianto del decreto legge sull\'obbligo nei posti di lavoro. Per i senatori senza green pass scatta dal 15 ottobre la sospensione, con il relativo taglio della diaria. Lo annunciano in una nota congiunta i Senatori Questori Antonio De Poli, Laura Bottici e Paolo Arrigoni. "Il Senato si è adeguato alla normativa generale sull\'obbligo del green pass - si legge nella nota - Da venerdì 15 ottobre scatta l\'obbligo di esibire la certificazione verde Covid-19, rilasciata in conformità alle disposizioni vigenti, per accedere alle sedi del Senato". "Per i senatori che dovessero violare l\'obbligo della certificazione - spiegano i Questori - sono previste sanzioni, tra cui la sospensione fino a 10 giorni, con il relativo taglio della diaria, che verrà disposta dal Consiglio di presidenza. La verifica della certificazione verrà effettuata mediante l\'utilizzo della App Verifica C19 con l\'impiego di dispositivi digitali di proprietà del Senato della Repubblica".';

$paragrafi = explode(".", $articolo);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack5</title>
</head>
<body>
    <h1>Elenco Paragrafi</h1>
    <!-- <?php var_dump($paragrafi); ?> -->
    <ol>
        <?php foreach($paragrafi as $paragrafo)
        {
            if(strlen($paragrafo) > 0)
            { ?>
                <li>
                    <?php
                    
                        echo $paragrafo . '.';
                    
                    ?>
                </li>
            <?php }
        } ?>
        
    </ol>
    

    
</body>
</html>