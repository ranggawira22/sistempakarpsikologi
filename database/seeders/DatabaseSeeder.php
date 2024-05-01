<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Evidence;
use App\Models\Hypothesis;
use App\Models\Rule;
use App\Models\Value;
use App\Models\Setting;
use App\Models\History;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Seorang Manager',
            'email' => 'manager@mail.com',
            'password' => bcrypt('admin123'),
            'level' => 'manager',
        ]);

        User::create([
            'name' => 'Seorang User',
            'email' => 'user@mail.com',
            'password' => bcrypt('user123'),
            'level' => 'user',
        ]);

        Evidence::create([
            'code' => 'EC0001',
            'name' => 'Takut atau cemas terhadap objek atau situasi tertentu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0002',
            'name' => 'Objek atau situasi tertentu hampir selalu memicu ketakutan atau kecemasan seketika.',
        ]);
        
        Evidence::create([
            'code' => 'EC0003',
            'name' => 'Objek atau situasi tertentu dihindari atau ditahan dengan ketakutan atau kecemasan yang intens.',
        ]);
        
        Evidence::create([
            'code' => 'EC0004',
            'name' => 'Ketakutan atau kecemasan tidak proporsional dengan bahaya aktual yang ditimbulkan.',
        ]);
        
        Evidence::create([
            'code' => 'EC0005',
            'name' => 'Ketakutan, kecemasan atau penghindaran bersifat persisten, biasanya berlangsung minimal 6 bulan.',
        ]);
        
        Evidence::create([
            'code' => 'EC0006',
            'name' => 'Ketakutan, kecemasan atau penghindaran menyebabkan menyebabkan tekanan yang signifikan secara klinis ataupun gangguan pada fungsi sosial, pekerjaan, atau bidang yang penting lainnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0007',
            'name' => 'Ketakutan atau kecemasan berlebih terhadap satu atau lebih situasi sosial pada kondisi di mana individu berada pada pengamatan/pengawasan orang lain.',
        ]);
        
        Evidence::create([
            'code' => 'EC0008',
            'name' => 'Ketakutan individu bahwa dia akan bertindak dengan cara atau menunjukkan gejala kecemasan yang akan dievaluasi secara negatif.',
        ]);
        
        Evidence::create([
            'code' => 'EC0009',
            'name' => 'Situasi sosial hampir selalu menimbulkan ketakutan atau kecemasan.',
        ]);
        
        Evidence::create([
            'code' => 'EC0010',
            'name' => 'Situasi sosial dihindari atau ditahan dengan ketakutan atau kecemasan yang intens.',
        ]);
        
        Evidence::create([
            'code' => 'EC0011',
            'name' => 'Ketakutan atau kecemasan tidak sebanding dengan ancaman aktual yang ditimbulkan oleh situasi sosial.',
        ]);
        
        Evidence::create([
            'code' => 'EC0012',
            'name' => 'Jika mengalami kondisi medis lainnya (misalnya, penyakit Parkinson, obesitas, cacat karena luka bakar atau cedera), ketakutan, kecemasan, atau penghindaran jelas tidak berhubungan atau berlebihan.',
        ]);
        
        Evidence::create([
            'code' => 'EC0013',
            'name' => 'Rasa takut yang hebat atau rasa tidak nyaman yang tiba-tiba dan mencapai puncaknya dalam beberapa menit, dan selama waktu tersebut empat (atau lebih) gejala berikut muncul: Detak jantung yang cepat atau berdebar-debar, berkeringat, gemetar atau menggigil, Sesak napas atau merasa tercekik, nyeri dada, mual atau gangguan perut, merasa pusing, tidak stabil, atau pingsan, derealisasi atau depersonalisasi, takut kehilangan kendali atau menjadi gila, dan takut mati.',
        ]);
        
        Evidence::create([
            'code' => 'EC0014',
            'name' => 'Kekhawatiran yang terus-menerus terhadap serangan panik berikutnya atau konsekuensinya (misalnya, kehilangan kendali, mengalami serangan jantung, “menjadi gila”) dan terjadi setidaknya selama sebulan.',
        ]);
        
        Evidence::create([
            'code' => 'EC0015',
            'name' => 'Suatu perubahan perilaku maladaptif yang signifikan terkait dengan serangan panik (perilaku ditujukan untuk menghindari terjadinya serangan panik, misalnya menghindari berolah raga atau pergi ke situasi yang belum dikenal. dan terjadi setidaknya selama sebulan.',
        ]);
        
        Evidence::create([
            'code' => 'EC0016',
            'name' => 'Gangguan yang dialami bukan disebabkan oleh efek fisiologis suatu zat (contoh suatu penyalahgunaan obat, atau suatu proses pengobatan), atau kondisi medis lain (di antaranya hipertiroid, gangguan jantung, atau paru-paru).',
        ]);
        
        Evidence::create([
            'code' => 'EC0017',
            'name' => 'Takut dan cemas ketika menggunakan transportasi umum (misalnya, mobil, bus, kereta, kapal, pesawat).',
        ]);
        
        Evidence::create([
            'code' => 'EC0018',
            'name' => 'Takut dan cemas ketika berada di ruang terbuka (misalnya, tempat parkir, pasar, jembatan).',
        ]);
        
        Evidence::create([
            'code' => 'EC0019',
            'name' => 'Takut dan cemas ketika berada di tempat tertutup (misalnya, toko, teater, bioskop).',
        ]);
        
        Evidence::create([
            'code' => 'EC0020',
            'name' => 'Takut dan cemas ketika berdiri dalam antrian atau berada di tengah kerumunan.',
        ]);
        
        Evidence::create([
            'code' => 'EC0021',
            'name' => 'Takut dan cemas ketika berada di luar rumah sendirian.',
        ]);
        
        Evidence::create([
            'code' => 'EC0022',
            'name' => 'Situasi agorafobia (Situasi di mana seseorang mengalami kecemasan atau ketakutan yang signifikan terhadap tempat atau situasi tertentu di mana mereka khawatir sulit untuk melarikan diri atau mendapatkan bantuan jika mereka merasa panik atau mengalami gejala kecemasan yang parah) hampir selalu memicu ketakutan atau kecemasan..',
        ]);
        
        Evidence::create([
            'code' => 'EC0023',
            'name' => 'Individu takut atau menghindari situasi agorafobia (Situasi di mana seseorang mengalami kecemasan atau ketakutan yang signifikan terhadap tempat atau situasi tertentu di mana mereka khawatir sulit untuk melarikan diri atau mendapatkan bantuan jika mereka merasa panik atau mengalami gejala kecemasan yang parah) karena berpikir bahwa melarikan diri mungkin sulit atau bantuan mungkin tidak tersedia.',
        ]);
        
        Evidence::create([
            'code' => 'EC0024',
            'name' => 'Situasi agorafobia (Situasi di mana seseorang mengalami kecemasan atau ketakutan yang signifikan terhadap tempat atau situasi tertentu di mana mereka khawatir sulit untuk melarikan diri atau mendapatkan bantuan jika mereka merasa panik atau mengalami gejala kecemasan yang parah) dihindari secara aktif, memerlukan teman pendamping, atau ditoleransi dengan ketakutan atau kecemasan yang intens.',
        ]);
        
        Evidence::create([
            'code' => 'EC0025',
            'name' => 'Kecemasan dan kekhawatiran berlebihan muncul pada sebagian besar hari dibandingkan dengan ketidakmunculannya, selama paling tidak 6 (enam) bulan lamanya, mengenai sejumlah kejadian atau aktivitas.',
        ]);
        
        Evidence::create([
            'code' => 'EC0026',
            'name' => 'Mengalami kesulitan untuk mengontrol kekhawatiran.',
        ]);
        
        Evidence::create([
            'code' => 'EC0027',
            'name' => 'Rasa gelisah atau merasa tegang atau gugup dan terjadi selama 6 bulan terakhir.',
        ]);
        
        Evidence::create([
            'code' => 'EC0028',
            'name' => 'Mudah lelah dan terjadi selama 6 bulan terakhir.',
        ]);
        
        Evidence::create([
            'code' => 'EC0029',
            'name' => 'Kesulitan berkonsentrasi atau pikiran menjadi kosong dan terjadi selama 6 bulan terakhir.',
        ]);
        
        Evidence::create([
            'code' => 'EC0030',
            'name' => 'Mudah marah dan terjadi selama 6 bulan terakhir.',
        ]);
        
        Evidence::create([
            'code' => 'EC0031',
            'name' => 'Tegang otot dan terjadi selama 6 bulan terakhir.',
        ]);
        
        Evidence::create([
            'code' => 'EC0032',
            'name' => 'Gangguan tidur (kesulitan tidur atau tetap tidur, atau tidur yang tidak nyaman dan tidak memuaskan) dan terjadi selama 6 bulan terakhir.',
        ]);
        
        Evidence::create([
            'code' => 'EC0033',
            'name' => 'Suasana hati tertekan/depresi sebagian besar hari, hampir setiap hari setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0034',
            'name' => 'Menurunnya minat atau kesenangan secara signifikan dalam semua atau hampir semua aktivitas sebagian besar hari, hampir setiap hari setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0035',
            'name' => 'Penurunan berat badan yang signifikan tanpa menjalani diet atau penambahan berat badan, atau penurunan atau peningkatan selera makan hampir setiap hari setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0036',
            'name' => 'Insomnia atau hipersomnia hampir setiap hari setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0037',
            'name' => 'Agitasi psikomotor hampir setiap hari setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0038',
            'name' => 'Kelelahan atau kehilangan energi hampir setiap hari setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0039',
            'name' => 'Perasaan tidak berharga atau rasa bersalah yang berlebihan atau tidak pantas (yang mungkin bersifat delusional) hampir setiap hari setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0040',
            'name' => 'Pikiran berulang tentang kematian, ideasi bunuh diri berulang tanpa rencana spesifik, atau upaya bunuh diri atau rencana khusus untuk melakukan bunuh diri setidaknya selama 2 minggu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0041',
            'name' => 'Suasana hati tertekan/depresi yang ditandai dengan perasaan sedih, kosong, atau putus asa sepanjang hari, setidaknya selama 2 tahun.',
        ]);
        
        Evidence::create([
            'code' => 'EC0042',
            'name' => 'Selama periode 2 tahun, tidak pernah bebas dari kondisi hilang selera makan atau makan berlebihan selama lebih dari 2 bulan pada satu waktu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0043',
            'name' => 'Selama periode 2 tahun, tidak pernah bebas dari kondisi susah tidur atau tidur berlebihan selama lebih dari 2 bulan pada satu waktu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0044',
            'name' => 'Selama periode 2 tahun, tidak pernah bebas dari kondisi energi rendah atau kelelahan selama lebih dari 2 bulan pada satu waktu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0045',
            'name' => 'Selama periode 2 tahun, tidak pernah bebas dari kondisi rasa rendah diri selama lebih dari 2 bulan pada satu waktu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0046',
            'name' => 'Selama periode 2 tahun, tidak pernah bebas dari kondisi konsentrasi buruk atau kesulitan membuat keputusan selama lebih dari 2 bulan pada satu waktu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0047',
            'name' => 'Selama periode 2 tahun, tidak pernah bebas dari perasaan putus asa selama lebih dari 2 bulan pada satu waktu.',
        ]);
        
        Evidence::create([
            'code' => 'EC0048',
            'name' => 'Perubahan afektif yang signifikan (misalnya, perubahan mood; tiba-tiba merasa sedih atau menangis, atau peningkatan sensitivitas terhadap penolakan) dan terjadi pada sebagian besar siklus menstruasi setidaknya setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0049',
            'name' => 'Perubahan yang signifikan dalam tingkat irritabilitas atau kemarahan, atau peningkatan konflik interpersonal dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0050',
            'name' => 'Suasana hati tertekan yang signifikan, perasaan putus asa, atau pikiran merendahkan diri sendiri dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0051',
            'name' => 'Kecemasan, ketegangan, dan/atau perasaan tegang atau gelisah yang signifikan dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0052',
            'name' => 'Penurunan minat dalam aktivitas sehari-hari dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0053',
            'name' => 'Kesulitan konsentrasi yang dirasakan secara subjektif dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0054',
            'name' => 'Lethargi, mudah lelah, atau kekurangan energi yang signifikan dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0055',
            'name' => 'Perubahan yang signifikan dalam selera makan; makan berlebihan; atau keinginan makanan tertentu dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0056',
            'name' => 'Hipersomnia atau insomnia dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0057',
            'name' => 'Perasaan kewalahan atau kehilangan kendali dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        Evidence::create([
            'code' => 'EC0058',
            'name' => 'Gejala fisik seperti nyeri atau pembengkakan payudara, nyeri sendi atau otot, sensasi "kembung," atau peningkatan berat badan dan terjadi pada sebagian besar siklus menstruasi setidaknya sejak tahun sebelumnya.',
        ]);
        
        

        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0001',
            'name' => 'Specific Phobia',
            'description' => 'Ketakutan yang berlebihan dan tidak rasional terhadap objek atau situasi tertentu. ',
            'solution' => 'Metode Exposure, Cognitive Behavioral Therapy (CBT), Hipnosis.'
        ]);
        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0002',
            'name' => 'Social Anxiety Disorder (Social Phobia)',
            'description' => 'Rasa cemas yang berlebihan terhadap situasi sosial atau kinerja publik.',
            'solution' => 'Cognitive-behavioral therapy (CBT), Model Rapee dan Heimberg, Cognitive Behavioral Therapy (CBT)-based guided self-help (GSH).'
        ]);
        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0003',
            'name' => 'Panic Disorder',
            'description' => 'Serangan panik tiba-tiba yang terjadi tanpa peringatan jelas. ',
            'solution' => 'Cognitive-behavioral therapy (CBT).'
        ]);
        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0004',
            'name' => 'Agoraphobia',
            'description' => 'Ketakutan terhadap situasi atau tempat yang sulit untuk melarikan diri atau mendapatkan bantuan. ',
            'solution' => 'Cognitive-behavioral therapy (CBT).'
        ]);
        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0005',
            'name' => 'Generalized Anxiety Disorder',
            'description' => 'Cemas kronis dan ketakutan berlebihan yang tidak berhubungan dengan situasi atau objek tertentu. ',
            'solution' => 'Cognitive-behavioral therapy (CBT).'
        ]);
        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0006',
            'name' => 'Major Depressive Disorder',
            'description' => 'Gangguan suasana hati yang parah dan menetap. ',
            'solution' => 'Cognitive Behavioral Therapy (CBT), Mindfulness / Acceptance-Based Cognitive-Behavioral Therapy (ACT, MBCT), Cognitive Behavioral Analysis System of Psychotherapy (CBASP), Interpersonal Therapy (IPT), Behavioral Activation (BA), Behavioral Couples Therapy (BCT), Psychodynamic Therapy.'
        ]);
        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0007',
            'name' => 'Dysthymia',
            'description' => 'Depresi jangka panjang yang kurang parah dibandingkan dengan Major Depressive Disorder.',
            'solution' => 'Cognitive Behavioral Therapy (CBT), Mindfulness / Acceptance-Based Cognitive-Behavioral Therapy (ACT, MBCT), Cognitive Behavioral Analysis System of Psychotherapy (CBASP), Interpersonal Therapy (IPT), Behavioral Activation (BA), Behavioral Couples Therapy (BCT), Psychodynamic Therapy.'
        ]);
        Hypothesis::create([
            'user_id' => 2,
            'code' => 'H0008',
            'name' => 'Premenstrual Dysphoric Disorder',
            'description' => 'Gangguan suasana hati yang terkait dengan siklus menstruasi. ',
            'solution' => 'Cognitive Behavioral Therapy (CBT), Mindfulness / Acceptance-Based Cognitive-Behavioral Therapy (ACT, MBCT), Cognitive Behavioral Analysis System of Psychotherapy (CBASP), Interpersonal Therapy (IPT), Behavioral Activation (BA), Behavioral Couples Therapy (BCT), Psychodynamic Therapy.'
        ]);

        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 1, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 2, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 3, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 4, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 5, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 6, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 7, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 8, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 9, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 10, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 11, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 12, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 13, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 14, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 15, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 16, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 17, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 18, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 19, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 20, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 21, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 22, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 23, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 24, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 25, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 26, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 27, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 28, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 29, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 30, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 31, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 32, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 33, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 34, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 35, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 36, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 37, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 38, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 39, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 40, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 41, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 42, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 43, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 44, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 45, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 46, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 47, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 48, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 49, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 50, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 51, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 52, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 53, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 54, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 55, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 56, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 57, 'value' => 0]);
        Rule::create(['hypothesis_id' => 1, 'evidence_id' => 58, 'value' => 0]);

        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 1, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 2, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 3, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 4, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 5, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 6, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 7, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 8, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 9, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 10, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 11, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 12, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 13, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 14, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 15, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 16, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 17, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 18, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 19, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 20, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 21, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 22, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 23, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 24, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 25, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 26, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 27, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 28, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 29, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 30, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 31, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 32, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 33, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 34, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 35, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 36, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 37, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 38, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 39, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 40, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 41, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 42, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 43, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 44, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 45, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 46, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 47, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 48, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 49, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 50, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 51, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 52, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 53, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 54, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 55, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 56, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 57, 'value' => 0]);
        Rule::create(['hypothesis_id' => 2, 'evidence_id' => 58, 'value' => 0]);

        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 1, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 2, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 3, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 4, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 5, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 6, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 7, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 8, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 9, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 10, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 11, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 12, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 13, 'value' => 0.75]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 14, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 15, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 16, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 17, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 18, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 19, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 20, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 21, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 22, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 23, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 24, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 25, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 26, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 27, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 28, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 29, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 30, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 31, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 32, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 33, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 34, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 35, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 36, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 37, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 38, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 39, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 40, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 41, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 42, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 43, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 44, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 45, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 46, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 47, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 48, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 49, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 50, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 51, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 52, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 53, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 54, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 55, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 56, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 57, 'value' => 0]);
        Rule::create(['hypothesis_id' => 3, 'evidence_id' => 58, 'value' => 0]);

        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 1, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 2, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 3, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 4, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 5, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 6, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 7, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 8, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 9, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 10, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 11, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 12, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 13, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 14, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 15, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 16, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 17, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 18, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 19, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 20, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 21, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 22, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 23, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 24, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 25, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 26, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 27, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 28, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 29, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 30, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 31, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 32, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 33, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 34, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 35, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 36, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 37, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 38, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 39, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 40, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 41, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 42, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 43, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 44, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 45, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 46, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 47, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 48, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 49, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 50, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 51, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 52, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 53, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 54, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 55, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 56, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 57, 'value' => 0]);
        Rule::create(['hypothesis_id' => 4, 'evidence_id' => 58, 'value' => 0]);

        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 1, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 2, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 3, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 4, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 5, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 6, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 7, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 8, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 9, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 10, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 11, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 12, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 13, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 14, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 15, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 16, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 17, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 18, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 19, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 20, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 21, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 22, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 23, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 24, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 25, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 26, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 27, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 28, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 29, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 30, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 31, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 32, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 33, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 34, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 35, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 36, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 37, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 38, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 39, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 40, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 41, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 42, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 43, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 44, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 45, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 46, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 47, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 48, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 49, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 50, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 51, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 52, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 53, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 54, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 55, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 56, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 57, 'value' => 0]);
        Rule::create(['hypothesis_id' => 5, 'evidence_id' => 58, 'value' => 0]);

        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 1, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 2, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 3, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 4, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 5, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 6, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 7, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 8, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 9, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 10, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 11, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 12, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 13, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 14, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 15, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 16, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 17, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 18, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 19, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 20, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 21, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 22, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 23, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 24, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 25, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 26, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 27, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 28, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 29, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 30, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 31, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 32, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 33, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 34, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 35, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 36, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 37, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 38, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 39, 'value' => 0.75]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 40, 'value' => 0.75]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 41, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 42, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 43, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 44, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 45, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 46, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 47, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 48, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 49, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 50, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 51, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 52, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 53, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 54, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 55, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 56, 'value' => 0]);
        Rule::create(['hypothesis_id' => 6, 'evidence_id' => 57, 'value' => 0]);

        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 1, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 2, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 3, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 4, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 5, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 6, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 7, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 8, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 9, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 10, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 11, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 12, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 13, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 14, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 15, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 16, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 17, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 18, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 19, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 20, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 21, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 22, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 23, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 24, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 25, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 26, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 27, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 28, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 29, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 30, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 31, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 32, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 33, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 34, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 35, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 36, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 37, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 38, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 39, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 40, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 41, 'value' => 0.75]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 42, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 43, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 44, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 45, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 46, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 47, 'value' => 0.75]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 48, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 49, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 50, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 51, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 52, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 53, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 54, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 55, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 56, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 57, 'value' => 0]);
        Rule::create(['hypothesis_id' => 7, 'evidence_id' => 58, 'value' => 0]);

        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 1, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 2, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 3, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 4, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 5, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 6, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 7, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 8, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 9, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 10, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 11, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 12, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 13, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 14, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 15, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 16, 'value' => 0.1]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 17, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 18, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 19, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 20, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 21, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 22, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 23, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 24, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 25, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 26, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 27, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 28, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 29, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 30, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 31, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 32, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 33, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 34, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 35, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 36, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 37, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 38, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 39, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 40, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 41, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 42, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 43, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 44, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 45, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 46, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 47, 'value' => 0]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 48, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 49, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 50, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 51, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 52, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 53, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 54, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 55, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 56, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 57, 'value' => 0.5]);
        Rule::create(['hypothesis_id' => 8, 'evidence_id' => 58, 'value' => 0.9]);


        Value::create(['name' => 'Selalu', 'value' => 1.0]);
        Value::create(['name' => 'Sering', 'value' => 0.75]);
        Value::create(['name' => 'Kadang', 'value' => 0.5]);
        Value::create(['name' => 'Jarang', 'value' => 0.25]);
        Value::create(['name' => 'Tidak Pernah', 'value' => 0.0]);

        Setting::create([
            'title' => 'Sistem Pakar Gangguan Psikologi',
            'description' => '<p>Sistem pakar ini adalah sistem yang membantu para pakar untuk melakuakan screening gangguan depresi dan gangguan kecemasan dengan bantuan komputasi komputer untuk melakukan screening berdasarkan ilmu atau pemahaman pakar.</p><p>Pada sistem pakar ini metode pakar yang digunakan untuk screening adalah metode Certainty Factor. Ceratinty Factor atau faktor kepastian adalah salah satu metode sistem pakar untuk membuktikan apakah suatu fakta itu pasti ataukah tidak pasti yang berbentuk metric yang biasanya digunakan dalam sistem pakar.</p>',
            'evidence_name' => 'Gejala',
            'hypothesis_name' => 'Gangguan'
        ]);

    }
}
