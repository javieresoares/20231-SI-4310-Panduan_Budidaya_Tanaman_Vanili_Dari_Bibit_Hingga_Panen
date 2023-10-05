<?php
namespace App\Controllers;

use App\Models\userModel;

class AuthController extends BaseController
{
    protected $user;

    function __construct()
    {
        helper('form');
        $this->user = new userModel();
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = $this->user->where(['username' => $username])->first();

            if ($dataUser) {
                if (md5($password) == $dataUser['password']) {
                    // Menambahkan data ke dalam sesi
                    session()->set([
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'isLoggedIn' => TRUE,
                        'fullname' => $dataUser['fullname'], // Tambahkan ini
                        'job' => $dataUser['job'], // Tambahkan ini
                        'address' => $dataUser['address'], // Tambahkan ini
                        'phone' => $dataUser['phone'], // Tambahkan ini
                        'email' => $dataUser['email'], // Tambahkan ini
                        'about' => $dataUser['about'] // Tambahkan ini
                    ]);

                    return redirect()->to(base_url('/'));
                } else {
                    session()->setFlashdata('failed', 'Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            return view('login_view');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

    public function register()
    {
        if ($this->request->getPost()) {
            $data = [
                'fullname' => $this->request->getVar('fullname'),
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password' => md5($this->request->getVar('password')),
                'role' => 'User'
            ];

            // Validasi input data
            $validationRules = [
                'fullname' => 'required',
                'email' => 'required|valid_email|is_unique[user.email]',
                'username' => 'required|is_unique[user.username]',
                'password' => 'required|min_length[6]'
            ];

            if (!$this->validate($validationRules)) {
                session()->setFlashdata('failed', 'Ada kesalahan dalam input data.');
                return redirect()->back()->withInput();
            }

            // Simpan data user baru ke database
            $result = $this->user->insert($data);

            if ($result) {
                // Menambahkan data ke dalam sesi
                session()->set([
                    'username' => $data['username'],
                    'role' => $data['role'],
                    'isLoggedIn' => TRUE,
                    'fullname' => $data['fullname'], // Tambahkan ini
                    'job' => '-', // Isi sesuai kebutuhan
                    'address' => '-', // Isi sesuai kebutuhan
                    'phone' => '-', // Isi sesuai kebutuhan
                    'email' => $data['email'], // Tambahkan ini
                    'about' => '-'// Tambahkan ini
                ]);

                session()->setFlashdata('success', 'Registrasi berhasil. Silakan login.');
                return redirect()->to('login');
            } else {
                session()->setFlashdata('failed', 'Gagal mendaftarkan akun.');
                return redirect()->back()->withInput();
            }
        } else {
            return view('register_view');
        }
    }

} // Tutup kurung kurawal kelas AuthController


