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
            'descrizione' => 'Una breve descrizione dell articolo 1. Questo è un esempio di contenuto.',
            'image' => 'https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExNnZscm56empuN3NmNjdzaWw5OGxxNDU1ZDk5bHN5MGxnY25na3E4dCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l41YBikSYhA4LybJe/giphy.gif'
        ],
        [
            'id' => 2,
            'slug' => 'ice-2',
            'titolo' => 'Storm-Breaker',
            'descrizione' => 'Una breve descrizione dell articolo 2. Contenuto di esempio per il blog.',
            'image' => 'https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExenUwcHY3bHV3N3Qzc2dqbTlhdWZ4eXpnaWJlc3ZxaDgxeTVuaTFzYyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/uJZHyX8RERoQNhigJU/giphy.gif'
        ],
        [
            'id' => 3,
            'slug' => 'ice-3',
            'titolo' => 'Aurora',
            'descrizione' => 'Altra descrizione breve di esempio per questo articolo.',
            'image' => 'https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExaWxuNnZoYmF5Y2UyNmFkYWcyNDBycDI4NWpjb2JzNWF6YzdlOHZmeiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/SZfBTkwb2jx9C/giphy.gif'
        ],
    ];


    protected static $posts = [
        [
            'id' => 1,
            'titolo' => 'Post 1',
            'descrizione' => 'Una breve descrizione dell articolo 1. Questo è un esempio di contenuto.',
            'data' => '10/10/10',
            'autore' => 'Aruel'
        ],
        [
            'id' => 2,
            'titolo' => 'Post 2',
            'descrizione' => 'Una breve descrizione dell articolo 2. Contenuto di esempio per il blog.',
            'data' => '11/11/11',
            'autore' => 'Angelo'
        ],
        [
            'id' => 3,
            'titolo' => 'Post 3',
            'descrizione' => 'Altra descrizione breve di esempio per questo articolo.',
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
