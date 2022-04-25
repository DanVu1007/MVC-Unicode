<?php 
    class Product extends Controller {

        public $data = [];

        public function index(){
            echo 'danh sach san pham';
        }

        public function list_product(){
            $product = $this->model('ProductModel');
            $dataProduct = $product->getProductList();
            $title = 'danh sach san pham';

            $this->data['title'] = $title;
            $this->data['product_list'] = $dataProduct;
            //render view
            $this->render('products/list',$this->data);
        }

        public function detail($id=0){
            $products = $this->model('ProductModel');
            $this->data['info'] = $products->getDetail($id);
            
            $this->render('products/detail',$this->data);
        }
    }