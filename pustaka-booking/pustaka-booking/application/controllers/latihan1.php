<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller
{
    public function index()
    {
         //echo "Selamat Datang... Di pemrograman Web 2";

         $a=10;
         $b=20;
         $data['c']=$a+$b;

         $this ->load->view('latihan1', $data);

    }
}?>