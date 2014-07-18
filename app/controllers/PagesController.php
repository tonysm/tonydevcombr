<?php

class PagesController extends BaseController
{
    /**
     * @return mixed
     */
    public function home()
    {
        return $this->render('pages.home');
    }
}
