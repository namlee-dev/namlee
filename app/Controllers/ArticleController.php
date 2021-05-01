<?php

namespace NamLee\Controllers;

use NamLee\Models\Article;

class ArticleController extends CoreController
{
    /**
     * Display a list of articles
     *
     * @param array $routeArguments
     */
    public function list()
    {
        $articlesList = Article::findAll();

        $this->show('article/list', [
            'articlesList' => $articlesList,
        ]);
    }

    /**
     * Dispaly 1 article by the id
     *
     * @param array $routeArguments
     */
    public function single($articleId)
    {
        $article = Article::find($articleId);

        $this->show('article/single', [
            'article' => $article,
        ]);
    }
}
