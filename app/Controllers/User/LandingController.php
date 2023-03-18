<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;
use App\Models\GejalaModel;


class LandingController extends BaseController
{
   protected $GejalaModel;

   public function __construct()
   {
      $this->GejalaModel = new GejalaModel();
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
         'datagejala' => $this->GejalaModel->datagejala()
      ];
      return view('/client-side/diagnosa', $data);
   }

   public function diagnosa2 ()
   {
      return view('/client-side/diagnosa2');
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
