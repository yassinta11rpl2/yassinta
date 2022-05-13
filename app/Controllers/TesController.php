<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class TesController extends Controller{
      public function index()
      {
          return view(TesView);
      }
}