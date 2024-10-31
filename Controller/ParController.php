<?php

namespace Controller;

class ParController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function par($a, $b, $c) {

        //$this->loadModel("Product");

        // $products = $this->product->getAll();

        $this->data("a", $a);
        $this->data("b", $b);
        $this->data("c", $c);

        $this->display("par");
    }

    public function qqq() {
        $this->display("qqq");
    }
}