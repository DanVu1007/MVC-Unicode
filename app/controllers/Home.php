<?php 
    class Home {
        public function index(){
            echo 'trang chu';
        }
        public function detail($id = '',$slug = ''){
            echo 'id: '. $id;
            echo 'slug: '.$slug;
        }
    }