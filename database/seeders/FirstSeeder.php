<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Pemberitahuan;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pesan;


class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USER
        User::Create([
            'kode' => 'Admin1',
            'nis'    => '203910',
            'fullname'    => 'Rahima sabira',
            'username' => 'Admin',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII-RPL',
            'alamat' => 'JL.BULAN BINTANG',
            'verif'    => '',
            'role' => 'admin',
            'join_date'    => '2023-01-06',
            'terakhir_login' => '2023-01-06',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'BB881',
            'nis'    => '0046378',
            'fullname'    => 'Umayra mahardika',
            'username' => 'User',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII - RPL',
            'alamat' => 'JL. Baaburayyan III  No. 17',
            'verif'    => 'verified',
            'role' => 'user',
            'join_date'    => '2023-01-06',
            // 'terakhir_login' => '',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA002',
            'nis'    => '0054238',
            'fullname'    => 'Difa azzahra',
            'username' => 'Difa',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII - RPL',
            'alamat' => 'Jl. Asia Afrika',
            // 'verif'    => '',
            'role' => 'user',
            'join_date'    => '2023-01-06',
            // 'terakhir_login' => '',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'Admin2',
            // 'nis'    => '203910',
            'fullname'    => 'Mam_AdminPerpus',
            'username' => 'Mam',
            'password'    => Hash::make("password"),
            // 'kelas'    => 'XII-RPL',
            // 'alamat' => 'JL.KEMBANG WANGI',
            // 'verif'    => '',
            'role' => 'admin',
            'join_date'    => '2023-01-06',
            // 'terakhir_login' => '2023-01-06',
            'foto' => '',
        ]);

        //KATEGORI
        Kategori::create([
            'kode' => 'Fairytale',
            'nama' => 'Fairytale',
        ]);

        Kategori::create([
            'kode' => 'Survive',
            'nama' => 'Survive',
        ]);

        Kategori::create([
            'kode' => 'time management',
            'nama' => 'Time Management',
        ]);

        //PENERBIT
        Penerbit::create([
            'kode' => '1-00-99876-0',
            'nama'    => 'Gramedia',
            // 'verif' => 'intermedia',
        ]);

        Penerbit::create([
            'kode' => '1-700-327898-0',
            'nama'    => 'Erlangga',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => '1-300-3482531-0',
            'nama'    => 'Komputindo',
            // 'verif' => '',
        ]);

        //BUKU
        Buku::create([
            'judul' => 'The sleeping beauty',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Disney',
            'tahun_terbit' => '2018',
            'isbn' => '',
            'j_buku_baik' => '13',
            'j_buku_rusak' => '4',
            'foto' => '/img/test1.jpg',
        ]);

        Buku::create([
            'judul' => 'The little prince',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Disney',
            'tahun_terbit' => '2012',
            'isbn' => '',
            'j_buku_baik' => '18',
            'j_buku_rusak' => '6',
            'foto' => '/img/test2.jpg',
        ]);

        Buku::create([
            'judul' => 'Hacks to live in the wood',
            'kategori_id' => '2',
            'penerbit_id' => '2',
            'pengarang' => 'Peter pan',
            'tahun_terbit' => '2013',
            'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '6',
            'foto' => '/img/test3.jpg',
        ]);

        Buku::create([
            'judul' => 'Time is money',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Alice',
            'tahun_terbit' => '2015',
            'isbn' => '',
            'j_buku_baik' => '15',
            'j_buku_rusak' => '6',
            'foto' => '/img/test4.jpg',
        ]);

        //PEMINJAMAN
        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tgl_peminjaman' => '2023-01-06',
            'tgl_pengembalian' => '2023-01-12',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'rusak',
            'denda' => '20000',
        ]);

        Peminjaman::create([
            'user_id' => '3',
            'buku_id' => '2',
            'tgl_peminjaman' => '2021-03-09',
            // 'tgl_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'rusak',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '1000',
        ]);

        Peminjaman::create([
            'user_id' => '1',
            'buku_id' => '3',
            'tgl_peminjaman' => '2023-01-09',
            // 'tgl_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            // 'kondisi_buku_saat_dikembalikan' => '',
            // 'denda' => '0',
        ]);

        //PESAN
        Pesan::create([
            'penerima_id' => '1',
            'pengirim_id' => '2',
            'judul' => 'Pengembalian Buku',
            'isi' => 'Buku akan saya kembalikan segera',
            'status' => 'terkirim',
            'tgl_kirim' => '2023-01-21',
        ]);

        Pesan::create([
            'penerima_id' => '1',
            'pengirim_id' => '2',
            'judul' => 'Terimakasih Perpus',
            'isi' => 'Buku yang ada di perpus ini sungguh update',
            'status' => 'terkirim',
            'tgl_kirim' => '2023-01-21',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Anda merusakan buku',
            'isi' => 'Anda terkena denda 10000',
            'status' => 'dibaca',
            'tgl_kirim' => '2023-01-16',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '4',
            'judul' => 'Congratullations!!!',
            'isi' => 'You already read 15 book in a month, go to library to take your rewards!',
            'status' => 'dibaca',
            'tgl_kirim' => '2023-01-16',
        ]);

        // PEMBERITAHUAN
        // Pemberitahuan::create([
        //     'isi'    => 'Maaf server sedang maintance',
        //     // 'level_user'	=> '',
        //     'status' => 'aktif',
        // ]);

        // Pemberitahuan::create([
        //     'isi'    => 'Maaf perpus tutup sampai tanggal 20',
        //     // 'level_user'	=> '',
        //     'status' => 'nonaktif',
        // ]);

        // Pemberitahuan::create([
        //     'isi'    => 'Pengambilan buku paket sampai tanggal 30',
        //     // 'level_user'	=> '',
        //     'status' => 'aktif',
        // ]);

        //IDENTITAS
        identitas::create([
            'nama_app'    => 'PERPUS SMKN 10 JAKARTA',
            'alamat_app' => 'JL. SMEAN 6, Cawang, Kramat Jati',
            'email_app'    => 'perpusten@gmail.com',
            'nomor_hp'    => '081511978444',
            'foto' => '/img/test5.jpg',
        ]);
    }
}
