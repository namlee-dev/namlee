<?php

namespace NamLee\Controllers;

use NamLee\Models\Article;
use NamLee\Models\Project;

class MainController extends CoreController
{
    public function home()
    {
        // Display home page

        // Article
        $article = new Article();
        $articlesList = $article->findAll();

        $viewVars['articlesList'] = $articlesList;

        // Project
        $project = new Project();
        $projectsList = $project->findAll();

        $viewVars['projectsList'] = $projectsList;

        $this->show('main/home',$viewVars);
    }

    public function about()
    {
        // Display about page
        $this->show('main/about');
    }

    public function contact()
    {
        // Display contact page
        $this->show('main/contact');
    }

    public function privacy()
    {
        // Display privacy page
        $this->show('main/privacy');
    }

    public function sitemap()
    {
        // Display sitemap page
        $this->show('main/sitemap');
    }
}
