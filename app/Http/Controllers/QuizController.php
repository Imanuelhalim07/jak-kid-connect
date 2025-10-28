<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    /**
     * Data pertanyaan kuis.
     * Dalam aplikasi nyata, data ini mungkin lebih baik disimpan di database.
     */
    private $questions = [
        [
            "question" => "Sebutkan empat prinsip utama Konvensi Hak Anak:",
            "options" => [
                "Non-diskriminasi, kepentingan terbaik anak, hak hidup & tumbuh kembang, partisipasi anak",
                "Non-diskriminasi, hak pendidikan, hak kesehatan, hak perlindungan",
                "Hak sipil, hak keluarga, hak pendidikan, hak perlindungan",
                "Non-diskriminasi, hak bermain, hak berpendapat, hak aman"
            ],
            "answer" => "Non-diskriminasi, kepentingan terbaik anak, hak hidup & tumbuh kembang, partisipasi anak"
        ],
        [
            "question" => "Menurut Pasal 7, hak apa saja yang harus didapatkan seorang anak sejak lahir?",
            "options" => [
                "Hak untuk bermain dan beristirahat",
                "Hak untuk mendapatkan layanan kesehatan",
                "Hak untuk memiliki nama, kewarganegaraan, dan identitas",
                "Hak untuk mendapatkan pendidikan gratis"
            ],
            "answer" => "Hak untuk memiliki nama, kewarganegaraan, dan identitas"
        ],
        [
            "question" => "Pasal berapa yang mengatur hak anak untuk berpartisipasi dan menyatakan pendapatnya secara bebas dalam semua hal yang memengaruhi mereka?",
            "options" => ["Pasal 10", "Pasal 12", "Pasal 15", "Pasal 17"],
            "answer" => "Pasal 12"
        ],
        [
            "question" => "Hak anak untuk mendapatkan perlindungan dari eksploitasi dan pelecehan seksual diatur dalam Pasal...?",
            "options" => ["Pasal 34", "Pasal 32", "Pasal 19", "Pasal 27"],
            "answer" => "Pasal 34"
        ],
        [
            "question" => "Salah satu hak anak yang terkait dengan perlindungan dari pekerjaan berbahaya adalah:",
            "options" => [
                "Hak untuk bekerja di lingkungan yang aman",
                "Hak untuk dilindungi dari eksploitasi ekonomi",
                "Hak untuk menolak pekerjaan",
                "Hak untuk mendapatkan upah minimum"
            ],
            "answer" => "Hak untuk dilindungi dari eksploitasi ekonomi"
        ],
        [
            "question" => "Hak-hak anak dalam bidang kesehatan mencakup...",
            "options" => [
                "Hak atas pelayanan kesehatan dan fasilitas rehabilitasi",
                "Hak untuk mendapatkan obat gratis",
                "Hak untuk dirawat di rumah sakit mewah",
                "Hak untuk tidak pernah sakit"
            ],
            "answer" => "Hak atas pelayanan kesehatan dan fasilitas rehabilitasi"
        ],
        [
            "question" => "Pasal 29 Konvensi Hak Anak mengatur tentang tujuan pendidikan. Apa saja tujuan tersebut?",
            "options" => [
                "Mengembangkan bakat anak semaksimal mungkin",
                "Mempersiapkan anak untuk masa depan kerja",
                "Mengembangkan kepribadian, bakat, dan kemampuan anak secara optimal",
                "Meningkatkan daya saing anak di sekolah"
            ],
            "answer" => "Mengembangkan kepribadian, bakat, dan kemampuan anak secara optimal"
        ],
        [
            "question" => "Bagaimana Konvensi Hak Anak melindungi anak-anak dari pekerjaan berbahaya?",
            "options" => [
                "Dengan melarang semua anak untuk bekerja",
                "Dengan menetapkan usia minimum untuk bekerja dan mengatur kondisi kerja",
                "Dengan memberikan sanksi berat kepada anak yang bekerja",
                "Dengan memberikan upah yang sangat tinggi kepada anak"
            ],
            "answer" => "Dengan menetapkan usia minimum untuk bekerja dan mengatur kondisi kerja"
        ],
        [
            "question" => "Konvensi Hak Anak disahkan oleh Majelis Umum PBB pada tahun berapa?",
            "options" => ["1989", "1990", "1979", "1992"],
            "answer" => "1989"
        ],
        [
            "question" => "Prinsip 'Non-diskriminasi' dalam Konvensi Hak Anak berarti bahwa semua hak berlaku untuk setiap anak, tanpa memandang...",
            "options" => [
                "Pendidikan, bakat, atau kemampuan",
                "Suku, agama, jenis kelamin, atau status",
                "Status ekonomi, tempat tinggal, atau kesehatan",
                "Keluarga, teman, atau lingkungan"
            ],
            "answer" => "Suku, agama, jenis kelamin, atau status"
        ]
    ];

    /**
     * Menampilkan formulir post-test.
     */
    public function showPostTest()
    {
        // Ambil hasil skor dari session jika ada
        $result = Session::get('quiz_result');

        // Hapus hasil skor dari session agar tidak tampil lagi setelah refresh
        Session::forget('quiz_result');

        return view('post-test', [
            'questions' => $this->questions,
            'result' => $result
        ]);
    }

    /**
     * Memproses jawaban dan menghitung skor.
     */
    public function submitPostTest(Request $request)
    {
        $score = 0;
        $totalQuestions = count($this->questions);

        // Loop melalui data pertanyaan
        foreach ($this->questions as $key => $q) {
            // Ambil jawaban dari input form (nama input q0, q1, dst.)
            $user_answer = $request->input('q' . $key);

            // Membandingkan jawaban yang disubmit dengan jawaban yang benar
            if (isset($user_answer) && $user_answer == $q['answer']) {
                $score++;
            }
        }

        // Simpan hasil skor ke session
        Session::flash('quiz_result', [
            'score' => $score,
            'total' => $totalQuestions,
        ]);

        // Redirect kembali ke halaman yang sama untuk menampilkan hasil
        return redirect()->route('post-test.show');
    }
}
