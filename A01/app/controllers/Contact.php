<?php
class Contact extends Controller
{
    public function __construct()
    {
    }
    
    public function Home()
    {
        $this->view('Contact/contactus');
    }

    public function Contactus()
    {
        $this->view('Contact/contactus');
    }

    public function About()
    {
        $this->view('Contact/about');
    }

}
