<?php
    class Pages extends Controller{
        public function __construct(){

        }

        public function index(){
            if (isLoggedIn()) {
                redirect('posts');
            }

            $data = [
                'title' => 'Shareposts',
                'description' => 'Simple social network built on the PHP MVC framework.'
            ];           

            $this->view('pages/index', $data);
        }

        public function about() {
            $data = [
                'title' => 'About',
                'description' => 'App to share posts with other users.'
            ];

            $this->view('pages/about', $data);
        }
    }