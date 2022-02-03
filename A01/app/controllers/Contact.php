<?php
class Contact extends Controller
{
    public function __construct()
    {
    }
    
    public function index()
    {
        $this->view('Contact/contact');
    }

    public function contactus()
    {
        $this->view('Contact/contactus');
    }

    public function about()
    {
        $this->view('Contact/about');
    }

}
