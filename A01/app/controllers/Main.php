<?php
class Main extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Main/main');
    }

    public function Home()
    {
        $this->view('Main/home');
    }

    public function Timeline()
    {
        $this->view('Main/timeline');
    }
}
