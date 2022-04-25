<?php 
    class ProductModel {
        public function getProductList(){
            $data = [
                'product 1',
                'product 2',
                'product 3'
            ];
            return $data;
        }

        public function getDetail($id){
            $data = [
                'san pham thu 1',
                'san pham thu 2',
                'san pham thu 3'
            ];
            return $data[$id];
        }
    }