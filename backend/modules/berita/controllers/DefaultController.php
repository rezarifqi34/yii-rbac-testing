<?php

namespace backend\modules\berita\controllers;

use yii\web\Controller;

/**
 * Default controller for the `berita` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
