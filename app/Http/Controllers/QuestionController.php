<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculate(Request $request)
    {   
        $array = array_count_values($request->all());
        // dd($request->all());
        $mbtiBigData = [
            "ISTJ" => [
                "keterangan" => "Introverted, Sensing, Thinking, Judging",
                "penjelasan" => "Orang Dengan Kepribadian ISTJ Biasanya Cenderung Pendiam Dan Serius, Namun Sangat Gigih, Bertanggung Jawab, Dan Dapat Diandalkan. Orang Dengan Kepribadian ISTJ Umumnya Juga Selalu Menginginkan Ketertiban Dan Keteraturan Dalam Setiap Aspek Hidupnya. Oleh Sebab Itu, Ia Dijuluki Sebagai ‘Si Perencana Yang Terorganisir’."
            ],
            "ISTP" => [
                "keterangan" => "Introverted, Sensing, Thinking, Perceiving",
                "penjelasan" => "Kepribadian ISTP Umumnya Adalah Orang Sangat Realistis, Logis, Spontan, Dan Berfokus Pada Masa Kini. Orang Dengan Kepribadian ISTP Juga Memiliki Kemampuan Memecahkan Masalah Dan Menghadapi Krisis Yang Baik. Tak Heran, Pribadi ISTP Kerap Dijuluki Sebagai ‘Si Mekanik’ Atau ‘Si Pengrajin’."
            ],
            "ISFJ" => [ 
                "keterangan" => "Introverted, Sensing, Feeling, Judging",
                "penjelasan" => "Kepribadian Dengan Tipe ISFJ Adalah Salah Satu Tipe Kepribadian Yang Paling Umum. Orang Dengan Kepribadian ISFJ Biasanya Dikenal Sebagai Pribadi Yang Penuh Perhatian, Kehangatan, Dan Aura Positifnya Yang Bisa Membawa Ketenangan Pada Orang-Orang Di Sekitarnya. Ini Sebabnya, Pribadi ISFJ Dijuluki Sebagai ‘Si Pelindung’."
            ],
        
            "ISFP" => [
                "keterangan" => "Introverted, Sensing, Thinking, Perceiving",
                "penjelasan" => "Kepribadian ISFP Biasanya Adalah Pribadi Yang Bisa Membuat Orang Lain Nyaman, Memiliki Kepedulian Yang Tinggi Terhadap Orang Lain, Penuh Semangat, Dan Kreatif. Individu ISFP Umumnya Juga Sangat Berbakat Dalam Dunia Seni. Oleh Sebab Itulah, Ia Dijuluki Sebagai ‘Sang Seniman’ Di Antara Kepribadian Lainnya."
            ],
            "INFJ" => [
                "keterangan" => "Introverted, Intuitive, Feeling, Judging",
                "penjelasan" => "Kepribadian INFJ Atau Yang Kerap Dijuluki Sebagai ‘Sang Penasihat’ Adalah Tipe Kepribadian Yang Paling Langka. Pribadi INFJ Biasanya Sangat Suportif, Peka Terhadap Perasaan Orang Lain, Dan Suka Menolong. Tidak Hanya Itu, Ia Juga Terkenal Dengan Idealismenya Untuk Mengubah Dunia Menjadi Tempat Yang Lebih Baik Bagi Semua Orang."
            ],
        
            "INFP" => [
                "keterangan" => "Introverted, Intuitive, Feeling, Perceiving",
                "penjelasan" => "Orang Dengan Tipe Kepribadian INFP Terlihat Idealis, Perfeksionis, Dan Memiliki Jiwa Kemanusiaan Yang Tinggi. Ketika Terdapat Konflik, Pribadi INFP Biasanya Sangat Pandai Menjadi Mediator Untuk Menengahi Konflik Tersebut. Inilah Mengapa Pribadi INFP Dijuluki Sebagai ‘Si Mediator’."
            ],
        
            "INTJ" => [
                "keterangan" => "Introverted, Intuitive, Thinking, Judging",
                "penjelasan" => "Kepribadian INTJ Adalah Orang Yang Kreatif Dan Analitis. Oleh Sebab Itu, Ia Sangat Pandai Membuat Strategi Dan Perencanaan. Selain Itu, Individu INTJ Biasanya Juga Memiliki Kemampuan Untuk Menciptakan Berbagai Solusi Inovatif Bagi Setiap Permasalahan. Maka Dari Itu, Pribadi INTJ Mendapat Julukan ‘Si Ahli Strategi’."
            ],
        
            "INTP" => [
                "keterangan" => "Introverted, Intuitive, Thinking, Perceiving",
                "penjelasan" => "Individu Dengan Kepribadian Ini, INTP Mendapat Julukan ‘Si Logis’ Atau ‘Sang Pemikir’ Tentu Karena Ia Adalah Seorang Pemikir Yang Logis, Analitis, Dan Berwawasan Luas. Namun, Pribadi INTP Biasanya Tidak Menyukai Aturan Dan Perencanaan. Sebaliknya, Ia Lebih Suka Memiliki Banyak Pilihan Terhadap Suatu Hal."
            ],
        
            "ESTP" => [ 
                "keterangan" => "Extroverted, Sensing, Thinking, Perceiving",
                "penjelasan" => "Orang Dengan Kepribadian ESTP Orang Yang Sangat Ramah, Antusias, Dan Pandai Berteman. Ia Biasanya Juga Sangat Pandai Memengaruhi Orang Lain, Serta Memiliki Kemampuan Untuk Berpikir Dan Bertindak Cepat Dalam Situasi Yang Darurat. Oleh Sebab Itu, Pribadi ESTP Kerap Dijuluk Sebagai ‘Sang Pembujuk’."
            ],
        
            "ESTJ"=> [
                "keterangan" => "Extroverted, Sensing, Thinking, Judging",
                "penjelasan" => "Individu Dengan Kepribadian ESTJ Dijuluki Sebagai ‘Si Pengarah Yang Tegas’ Karena Ia Paling Terkenal Dengan Kemampuannya Dalam Berorganisasi Dan Memimpin. Kemampuan Mengarahkannya Ini Didapatkan Dari Karakteristiknya Yang Tegas, Teliti, Disiplin, Taat Aturan, Dan Bertanggung Jawab."
            ],
        
            "ESFP"=> [ 
                "keterangan" => "Extroverted, Sensing, Feeling, Perceiving",
                "penjelasan" => "Individu Dengan Kepribadian ESFP Adalah Kepribadian Yang Disebut Sebagai Kepribadian Yang Paling Extrovert. Pasalnya, Ia Sangat Senang Menghabiskan Waktunya Dengan Orang Lain Dan Suka Menjadi Pusat Perhatian. Tak Heran, Pribadi ESFP Dijuluki Sebagai ‘Sang Penghibur’."
            ],
        
            "ESFJ" => [
                "keterangan" => "Extroverted, Sensing, Feeling,  Judging",
                "penjelasan" => "Orang Dengan Kepribadian ESFJ Biasanya Cenderung Berhati Lembut, Setia, Ramah, Dan Terorganisir. Ia Sangat Suka Membantu Orang Lain, Terutama Orang-Orang Di Sekitarnya. Nah, Inilah Alasan Mengapa Pribadi ESFJ Disebut Sebagai ‘Sang Pengasuh’."
            ],
            "ENFP" => [
                "keterangan" => "Extroverted, Intuitive, Feeling, Perceiving",
                "penjelasan" => "Pada Umumnya Orang Dengan Kepribadian ENFP Dijuluki Sebagai ‘Sang Motivator’ Di Antara Tipe Kepribadian Lainnya. Ini Karena Orang Dengan Tipe Kepribadian ENFP Sangat Senang Menumpulkan Berbagai Ide Positif Untuk Membantu Orang Lain Dan Mampu Mengalirkan Energi Positif Tersebut Pada Orang-Orang Di Sekitarnya."
            ],
            "ENFJ" => [
                "keterangan" => "Extroverted, Intuitive, Feeling, Judging",
                "penjelasan" => "Kepribadian ENFJ Terkenal Akan Kemampuannya Untuk Menjalin Persahabatan Dengan Hampir Setiap Kepribadian Lainnya, Bahkan Dengan Pribadi Yang Sangat Tertutup. Biasanya, Individu ENFJ Juga Memiliki Empati Yang Tinggi, Sehingga Ia Sangat Senang Membantu Orang Lain Untuk Mencapai Tujuan Mereka. Berkat Karakteristiknya Ini, Pribadi ENFJ Dijuluki Sebagai ‘Sang Protagonis’."
            ],
            "ENTP" => [
                "keterangan" => "Extroverted, Intuitive, Thinking, Perceiving",
                "penjelasan" => "Individu Dengan Kepribadian ENTP Biasa Dikenal Sebagai Pribadi Yang Logis, Cerdas, Kreatif, Dan Paling Suka Berargumen. Berkat Sifat-Sifatnya Tersebut, Pribadi ENTP Mendapat Julukan ‘Sang Pendebat’."
            ],
            "ENTJ" => [
                "keterangan" => "Extroverted, Intuitive, Thinking, Judging",
                "penjelasan" => "Orang Dengan Kepribadian ENTJ Cenderung Berani, Memiliki Pengetahuan Yang Luas Dan Cerdas. Mereka Tipe Yang Logis Dan Selalu Objektif. Dalam Bekerja, Mereka Lebih Fokus Dan Mampu Memikirkan Ide-Ide Besar Dan Cenderung Tidak Menyukai Kegiatan Yang Monoton. Mereka Lebih Menyukai Pekerjaan Yang Konseptual Dan Memecahkan Masalah. Kepribadian ENTJ Kerap Dijuluki Sebagai ‘Sang Komandan’"
            ]
        ];
        $P = $array['P'] / 15 * 100;
        $I = $array['I'] / 15 * 100;
        $J = $array['J'] / 15 * 100;
        $T = $array['T'] / 15 * 100;
        $E = $array['E'] / 15 * 100;
        $N = $array['N'] / 15 * 100;
        $S = $array['S'] / 15 * 100;
        $F = $array['F'] / 15 * 100;
        $satu = $I > $E ? "I" : "E";
        $dua = $S > $N ? "S" : "N";
        $tiga = $T > $F ? "T" : "F";
        $empat = $J > $P ? "J" : "P";
        $hasil = $satu.$dua.$tiga.$empat;
        $nama = strtoupper($request->nama);
        $jenis_kelamin = strtoupper(trim($request->jenis_kelamin));
        $prodi = strtoupper($request->prodi);
        $reports = new Report();    
        $reports->nama = $nama;
        $reports->prodi = $prodi;
        $reports->jenis_kelamin = $jenis_kelamin;
        $reports->P = (int)$P;
        $reports->I = (int)$I;
        $reports->J = (int)$J;
        $reports->T = (int)$T;
        $reports->E = (int)$E;
        $reports->N = (int)$N;
        $reports->S = (int)$S;
        $reports->F = (int)$F;
        $reports->result = str_replace(' ', '', $hasil);
        $reports->keterangan = $mbtiBigData[$hasil]['keterangan'];
        $reports->penjelasan = $mbtiBigData[$hasil]['penjelasan'];
        if ($reports->save()) {
            return view('mbti.'.$hasil.'', [
                'nama' => $nama,
                'hasil' => str_replace(' ', '', $hasil),
                'jenis_kelamin' => $jenis_kelamin,
                'prodi' => $prodi,
                'P' => (int)$P,
                'I' => (int)$I,
                'J' => (int)$J,
                'T' => (int)$T,
                'E' => (int)$E,
                'N' => (int)$N,
                'S' => (int)$S,
                'F' => (int)$F
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}