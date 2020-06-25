<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Charts extends Controller
{
  public function index(){
    $data['title']        = 'Testing Chart';
    $data['nama_wilayah'] = ['Betung','Betung',
        'Betung Barat','Betung Barat',
        'Betung Selatan','Betung Selatan','Betung Selatan'];
    
    echo view('templates/header',$data);
    echo view('charts/chart',$data);
    echo view('templates/footer',$data);
  }
}