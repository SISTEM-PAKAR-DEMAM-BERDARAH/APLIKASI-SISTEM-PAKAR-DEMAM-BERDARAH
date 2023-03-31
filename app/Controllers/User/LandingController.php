<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;
use App\Models\DiagnosaModel;
use App\Models\PengetahuanModel;

class LandingController extends BaseController
{
   protected $PengetahuanModel;
   protected $DiagnosaModel;

   public function __construct()
   {
      $this->PengetahuanModel = new PengetahuanModel();
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function register ()
   {
      return view('/client-side/register');
   }

   public function index()
   {
    return view ('client-side/index');
   }
   public function home()
   {
      return view('/client-side/home');
   }

   public function diagnosa()
   {
      $data = [
         'basisgejala' => $this->PengetahuanModel->dataForDiagnosa(),
         'basispakar' => $this->PengetahuanModel->dataDiagnosaPakar()
      ];
      return view('/client-side/diagnosa', $data);
   }

   public function diagnosa2 ()
   {
      $data = [
         'autocode' => $this->DiagnosaModel->autoCodeDiagnosa()
      ];
      return view('/client-side/diagnosa2', $data);
   }

   public function diagnosaUser() 
   {
      $data = [
         'userdiagnosa' =>$this->DiagnosaModel->userDiagnosa()
      ];
      return view('/client-side/diagnosa-user', $data);
   }

   public function info ()
   {
      return view('/client-side/info');
   }

   public function kontak ()
   {
      return view('/client-side/kontak');
   }

   public function tentang ()
   {
      return view('/client-side/tentang');
   }

   public function edit ()
   {
      return view('/client-side/edit');
   }
}
