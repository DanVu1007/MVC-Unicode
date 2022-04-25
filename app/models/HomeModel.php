<?php 
    //Kế thừa từ các class Model
    class HomeModel{
        protected $_table = 'products';

        public function getList(){
            $data = [
                'item 1',
                'item 2',
                'item 3'
            ];
            return $data;
        }
    }