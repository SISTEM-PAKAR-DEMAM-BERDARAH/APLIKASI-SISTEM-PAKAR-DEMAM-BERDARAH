<?php

namespace App\Controllers\User;

use App\Models\DiagnosaModel;
use Myth\Auth\Models\UserModel;
use App\Models\PengetahuanModel;
use App\Controllers\BaseController;
use Myth\Auth\Password;

class LandingController extends BaseController
{
   protected $PengetahuanModel;
   protected $DiagnosaModel;
   protected $helpers = ['form', 'auth'];

   public function __construct()
   {
      $this->PengetahuanModel = new PengetahuanModel();
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function register()
   {
      return view('/client-side/register');
   }

   public function index()
   {
      return view('client-side/index');
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

   public function diagnosa2()
   {
      $data = [
         'autocode' => $this->DiagnosaModel->autoCodeDiagnosa()
      ];
      return view('/client-side/diagnosa2', $data);
   }

   private function authenticateUser()
   {
      $auth = service('authentication');
      $user = $auth->user();

      if (!$user) {
         // Handle user authentication error
      }

      return $user->id;
   }

   public function diagnosaUser()
   {
      $userId = $this->authenticateUser(); // Mendapatkan id user yang sedang login
      $data = $this->DiagnosaModel->dataDiagnosaUser($userId);
      return view('/client-side/diagnosa-user', ['data' => $data]);
   }

   public function info()
   {
      return view('/client-side/info');
   }

   public function kontak()
   {
      return view('/client-side/kontak');
   }

   public function tentang()
   {
      return view('/client-side/tentang');
   }

   public function edit()
   {
      return view('/client-side/edit');
   }

   public function updatepass() {
      $userModel = new UserModel();
      $data = [
         'password_hash' => Password::hash($this->request->getVar('passwordBaru')),
         'reset_hash' => null,
         'reset_at' => null,
         'reset_expires' => null,
      ];
      $userModel->update($this->request->getVar('id'), $data);

      return redirect()->to('/');
   }
}
