<?php
class ArticleModel
{
    private $csvFile = ROOT . '/public/asset/database/t_article.csv';


    // public function getAllArticles()
    // {
    //     $press = $this->loadArticlesFromCSV();
    //     return $press;
    // }

    public function getAllArticle()
    {
        $articles = [];
        // Nombre maximum de lignes à lire
        $lineCount = 0;


        if (($handle = fopen($this->csvFile, "r")) !== FALSE) {

            while (($data = fgetcsv($handle, 50, ",")) !== false) {
                $lineCount++;
                // Assurez-vous que chaque ligne a au moins 5 éléments (titre, sujet, image, auteur, date)
                if (count($data) >= 9) {
                    $articles[] = [
                        'id_art' => $data[0],
                        'ident_art' => $data[1],
                        'date_art' => $data[2],
                        'readtime_art' => $data[3],
                        'title_art' => $data[4],
                        'hook_art' => $data[5],
                        'url_art' => $data[6],
                        'category_art' => $data[7],
                        'content_art' => $data[8],
                        'image_art' => $data[9],
                    ];
                }
            }
            fclose($handle);
        }

        $datas = [$lineCount, $articles];
        return $datas;
    }

    public function readArticle($id)
    {

        if (($handle = fopen($this->csvFile, "r")) !== FALSE) {

            while (($data = fgetcsv($handle, 50, ",")) !== false) {

                $col = [$data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]];
                if (in_array($id, $col)) {

                    $article = [
                        'id_art' => $data[0],
                        'ident_art' => $data[1],
                        'date_art' => $data[2],
                        'readtime_art' => $data[3],
                        'title_art' => $data[4],
                        'hook_art' => $data[5],
                        'url_art' => $data[6],
                        'category_art' => $data[7],
                        'content_art' => $data[8],
                        'image_art' => $data[9],
                    ];

                    return $article;
                }
            }
            fclose($handle);
        }
    }

    public function displayFavorite($data)
    {

        foreach ($data as $id) {
            $articles[] = $this->readArticle($id);
        }
        return $articles;
    }


    public function searchArticles($query)
    {
        $searchResults = [];
        $press = $this->loadArticlesFromCSV($query); // Passer la requête de recherche à la méthode loadArticlesFromCSV()

        foreach ($press as $article) {
            // Vérifiez d'abord si les clés existent avant de les utiliser
            if (isset($article['title']) && isset($article['subject']) && isset($article['image']) && isset($article['id']) && isset($article['author']) && isset($article['date'])) {
                if (
                    stripos($article['title'], $query) !== false ||
                    stripos($article['subject'], $query) !== false ||
                    stripos($article['author'], $query) !== false
                ) {
                    // Ajoutez l'image et l'ID à chaque résultat de recherche
                    $searchResults[] = [
                        'id' => $article['id'],
                        'title' => $article['title'],
                        'subject' => $article['subject'],
                        'image' => $article['image'],
                        'author' => $article['author'],
                        'date' => $article['date']
                    ];
                }
            } else {
                // Si une clé est manquante, affichez un message d'erreur ou gérez la situation en conséquence
                // Par exemple :
                // echo "Certaines clés sont manquantes pour cet article.";
            }
        }

        return $searchResults;
    }

    private function loadArticlesFromCSV($query = null)
    {
        $press = [];
        $lineNumber = 0;

        if (($handle = fopen($this->csvFile, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($lineNumber > 0) { // Commence à partir de la deuxième ligne
                    if (count($data) >= 5) {
                        $article = [
                            'id' => $data[0],
                            'title' => $data[1],
                            'subject' => $data[2],
                            'image' => $data[3],
                            'author' => $data[4],
                            'date' => $data[5]
                        ];

                        // Vérifie si l'article correspond à la recherche
                        if ($query === null || $this->articleMatchesQuery($article, $query)) {
                            $press[] = $article;
                        }
                    }
                }
                $lineNumber++;
            }
            fclose($handle);
        }
        return $press;
    }

    private function articleMatchesQuery($article, $query)
    {
        // Vérifie si le titre, le sujet ou l'auteur de l'article contient la requête de recherche
        return stripos($article['title'], $query) !== false ||
            stripos($article['subject'], $query) !== false ||
            stripos($article['author'], $query) !== false;
    }
}
