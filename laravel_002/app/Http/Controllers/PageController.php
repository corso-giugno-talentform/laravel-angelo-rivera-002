<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected static $articles = [
        [
            'id' => 1,
            'slug' => 'ice-1',
            'titolo' => 'Ice-Breaker',
            'descrizione' => 'Lo scioglimento dei ghiacciai è causato dal riscaldamento globale e provoca l innalzamento del livello del mare.',

            'descrizione-dett' => 'Lo scioglimento dei ghiacciai è il processo attraverso il quale le masse di ghiaccio presenti sulle montagne e sulle regioni polari si trasformano in acqua liquida. Questo fenomeno avviene quando le temperature ambientali superano il punto di fusione del ghiaccio e si sta accelerando a causa dei cambiamenti climatici globali.

            Le cause principali dello scioglimento includono il riscaldamento globale, che è dovuto principalmente alle emissioni di gas serra come anidride carbonica e metano, e i cambiamenti nelle correnti atmosferiche e oceaniche. Un altro fattore importante è la riduzione dell albedo, cioè la capacità delle superfici di riflettere la luce solare, che diminuisce con la perdita di ghiaccio e neve, portando a un ulteriore riscaldamento della superficie.

            Lo scioglimento dei ghiacciai ha molte implicazioni gravi. Contribuisce all innalzamento del livello del mare, mettendo a rischio le aree costiere e le isole. Può provocare alterazioni negli ecosistemi, portando alla perdita di habitat per specie che dipendono dai ghiacciai e dalle regioni fredde. Inoltre, influisce sulle risorse idriche, poiché molte fiumi dipendono dall acqua di scioglimento glaciale. Un ulteriore problema sono i rischi di eventi climatici estremi come inondazioni e siccità, causati dai cambiamenti nei modelli di distribuzione delle acque.

            Esempi di ghiacciai in rapido scioglimento sono quelli dell Himalaya, come il ghiacciaio Thwaites in Antartide, noto come il ghiacciaio dell apocalisse, e i ghiacciai delle Alpi, in Svizzera e Italia.

            Per contrastare questo fenomeno, sono necessarie azioni di mitigazione come la riduzione delle emissioni di gas serra, la promozione di fonti di energia rinnovabile, la protezione delle aree glaciali e la sensibilizzazione pubblica. La ricerca scientifica è fondamentale per monitorare e prevedere i processi di fusione e per sviluppare strategie di adattamento.',

            'image' => 'https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExNnZscm56empuN3NmNjdzaWw5OGxxNDU1ZDk5bHN5MGxnY25na3E4dCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l41YBikSYhA4LybJe/giphy.gif'
        ],
        [
            'id' => 2,
            'slug' => 'ice-2',
            'titolo' => 'Storm-Breaker',
            'descrizione' => 'Stormbreaker: potente martello di Thor, evoca tempeste e distrugge tutto.',
            'descrizione-dett' => 'Stormbreaker è un martello magico di aspetto imponente, realizzato con materiali extraterrestri e dotato di una lama affilata sulla testa. Ha un manico lungo e robusto, decorato con dettagli intricati e rune che brillano di energia. È capace di evocare tempeste e fulmini, ed è uno degli strumenti più potenti di Thor, in grado di affrontare avversari incredibilmente forti e distruggere grandi strutture.',
            'image' => 'https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExenUwcHY3bHV3N3Qzc2dqbTlhdWZ4eXpnaWJlc3ZxaDgxeTVuaTFzYyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/uJZHyX8RERoQNhigJU/giphy.gif'
        ],
        [
            'id' => 3,
            'slug' => 'ice-3',
            'titolo' => 'Aurora',
            'descrizione' => 'L aurora boreale è uno spettacolo di luci colorate nel cielo polare.',
            'descrizione-dett' => 'L aurora boreale è uno spettacolare fenomeno naturale che si manifesta nel cielo notturno delle regioni polari. Si presenta come un soffice alone di luci colorate che si muovono lentamente, creando forme fluide e danzanti. I colori predominanti sono il verde, il rosa, il viola e il rosso, che si mescolano e si sovrappongono, dando vita a un vero e proprio spettacolo visivo. Questo fenomeno si verifica quando particelle cariche provenienti dal sole colpiscono l atmosfera terrestre, interagendo con il campo magnetico del pianeta. Le aurore boreali sono considerate uno dei più affascinanti e misteriosi spettacoli della natura, simbolo di magia e meraviglia nel cielo artico.',

            'image' => 'https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExaWxuNnZoYmF5Y2UyNmFkYWcyNDBycDI4NWpjb2JzNWF6YzdlOHZmeiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/SZfBTkwb2jx9C/giphy.gif'
        ],
    ];


    protected static $posts = [
        [
            'id' => 1,
            'titolo' => 'Post 1',
            'descrizione' => 'Una breve descrizione del post 1. Questo è un esempio di contenuto.',
            'data' => '10/10/10',
            'autore' => 'Aruel'
        ],
        [
            'id' => 2,
            'titolo' => 'Post 2',
            'descrizione' => 'Una breve descrizione del post 2. Contenuto di esempio per il blog.',
            'data' => '11/11/11',
            'autore' => 'Angelo'
        ],
        [
            'id' => 3,
            'titolo' => 'Post 3',
            'descrizione' => 'Altra descrizione breve di esempio per questo post.',
            'data' => '12/12/12',
            'autore' => 'Rivera'
        ],
    ];

    public function homepage()
    {
        return view('welcome', ['articles' => self::$articles], ['posts' => self::$posts]);
    }

    public function contacts()
    {
        return view('contatti');
    }

    public function article($articleSlug)
    {
        foreach (self::$articles as $article) {
            if ($article['slug'] === $articleSlug) {
                return view('article', ['article' => $article]);
            }
        }
        abort(404);
    }
}
