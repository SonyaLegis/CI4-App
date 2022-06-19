<?php

namespace App\Controllers;

class DashboardE extends BaseController
{
    public function email_view()
    {
        $email = \config\Services::email();
        $alamat_email = "snia16534@gmail.com";
        $email->setTo($alamat_email);
        $alamat_pengirim = "snia16534@gmail.com";
        $email->setFrom($alamat_pengirim);
        $subject = "Congrats tugas 10 kamu selesai";
        $email->setSubject($subject);
        $isi_pesan = "Selamat pagi sonya semoga hari ini,
        hari terbaik di hidup kamu keep spirit!!!";
        $email->setMessage($isi_pesan);
        if ($email->send()) {
            echo "<h1> Pesan Terkirim Ke Email Kamu</h1>";
        } else {
            echo "<h1>Pesan Gagal Dikirim Ke Email</h1>";
            $data_error = $email->printDebugger();
            print_r($data_error);
        }
    }
}
