<?php

class AppController extends Controller
{
    public $default_view_class = 'AppLayoutView';

    public $logger;
    private $before_exception = null; // beforeFilter内で発生した例外

    public function beforeFilter()
    {
         $this->initLogger();
    }

    private function generateProcessId()
    {
        return crypt(microtime(true).'-'.mt_rand());
    }
}