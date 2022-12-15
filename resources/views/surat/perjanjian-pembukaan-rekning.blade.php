@extends('home')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/pembukaanrekening.css') }}">
@endsection

@section('content')
<div class="appContent">
    <div class="splashBlock">
        <div class="row mb-2 mt-2">
            <div class="col-xs-2 justify-content-start d-flex">
                <img src="{{ asset('img/logo.png') }}" class="img-logo" alt="Logo">
            </div>
        </div>
        <div class="sectionTitle">
            <div class="title font-weight-bold">
                <p class="text-dark text-start text-justify">
                    <strong>
                        PERJANJIAN PEMBUKAAN REKENING EFEK
                    </strong>
                    <br>
                    <strong>PT. Profindo Sekuritas Indonesia </strong>
                </p>
            </div>
            <div class="lead">
                <h6 class="text-start">Perjanjian Pembukaan Rekening Efek ("Perjanjian") ini dibuat dan
                    ditandatangani di pada tanggal [dd/mm/yy], oleh dan antara: </h6>
                <ol>
                    <li>
                        <p class="text-start text-justify paraghraph">
                            Pihak yang identitasnya telah disebutkan dalam Formulir (untuk selanjutnya disebut
                            "Nasabah") dan
                        </p>
                    </li>
                    <li>
                        <p class="text-start text-justify paraghraph-text">
                            PT. Profindo Sekuritas Indonesia, suatu Perseroan Terbatas yang didirikan dan
                            dijalankan berdasarkan Hukum Negara Republik Indonesia, berkedudukan di Jakarta dan
                            beralamat di Gedung
                            Permata Kuningan Lt. 19. Jl. Kuningan Mulia Kav 9C, Guntur Setiabudi, Jakarta
                            Selatan 12980,
                            dalam hal ini diwakili oleh Direksi (untuk selanjutnya disebut sebagai
                            "Perusahaan"),
                        </p>
                    </li>
                </ol>
                <p class="paraghraph-letter text-start text-justify ml-5">
                    (Nasabah dan Perusahaan untuk selanjutnya secara bersama-sama disebut sebagai "Para Pihak"
                    dan masing masing sebagai "Pihak"). Selanjutnya Nasabah dan Perusahaan menerangkan guna
                    mengatur
                    hak dan kewajiban terkait pelaksanaan transaksi efek, maka Para Pihak saling membuat dan
                    menandatangani Perjanjian dengan ketentuan sebagai berikut :
                </p>
                <p class="paraghraph-letter text-start text-justify">
                    PASAL 1
                    <br>
                    Definisi
                    <br>
                    Kecuali secara tegas dinyatakan lain, setiap dan seluruh kata atau istilah sebagaimana
                    didefinisikan di dalam Perjanjian ini mempunyai pengertian sebagai berikut:
                </p>
                <ol class="ol-custom">
                    <li class="li-custom">
                        <ol class="ol-custom">
                            <li class="li-custom text-custom text-justify text-start">
                                Bank adalah bank umum yang telah memperoleh persetujuan untuk melakukan
                                kegiatan sebagai bank umum sesuai peraturan yang berlaku di bidang
                                perbankan,
                                yang
                                telah bekerja sama dengan PT. Profindo Sekuritas Indonesia dalam hal
                                pengelolaan
                                Rekening Dana Nasabah;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Bank Kustodian adalah Perseroan yang telah memperoleh izin usaha dari Otoritas
                                Jasa Keuangan sebagai Lembaga yang menyelenggarakan kegiatan Kustodian bagi Bank
                                Kustodian,
                                Perusahaan Efek dan pihak lain yang sesuai dengan undang-undang;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Batas Transaksi (Trading Limit) adalah besarnya nilai transaksi yang ditetapkan
                                oleh Perusahaan yang
                                dapat dipergunakan oleh Nasabah terhadap Rekening Efek reguler milik Nasabah
                                pada Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Bursa Efek adalah Pihak yang menyelenggarakan dan menyediakan sistem dan atau
                                sarana untuk
                                mempertemukan penawaran jual beli efek oleh pihak-pihak lain dengan tujuan
                                memperdagangkan efek
                                diantara mereka yang telah memperoleh izin dari Otoritas Jasa Keuangan
                                sebagaimana diatur dalam
                                Undang-Undang Pasar Modal;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Efek adalah surat berharga, yaitu surat pengakuan hutang, surat berharga,
                                komersial, saham, obligasi, tanda bukti hutang, unit penyertaan kontrak
                                investasi kolektif, kontrak berjangka atas efek dan setiap derivatif dari efek;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Formulir adalah seluruh formulir yang harus diisi oleh Nasabah untuk membuka
                                Rekening Efek di Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Hari Bursa adalah hari diselenggarakannya perdagangan efek di Bursa Efek mulai
                                hari Senin sampai Jumat, kecuali hari tersebut merupakan hari libur nasional
                                atau dinyatakan sebagai hari libur bursa oleh Bursa Efek;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Hari Kerja berarti hari dimana perdagangan di Bursa Efek di Indonesia dapat
                                dilakukan dan bankbank di Indonesia dapat melakukan transaksi perbankan,
                                khususnya kliring pembayaran;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                LKP (Lembaga Kliring dan Penjaminan) adalah pihak yang menyelenggarakan jasa
                                kliring dan penjaminan penyelesaian transaksi bursa;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                LPP (Lembaga Penyimpanan dan Penyelesaian) adalah lembaga yang menyelenggarakan
                                kegiatan kustodian sentral dengan cara mengadministrasikan, menyimpan dan
                                memelihara catatan, pembukuan data dan keterangan kegiatan para pemegang
                                Rekening Efek;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah adalah pihak pemegang Rekening Efek pada Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Perusahaan adalah PT. Profindo Sekuritas Indonesia;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Perjanjian adalah Perjanjian Pembukaan Rekening Efek beserta lampiran dan
                                adendumnya dari waktu ke waktu;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Sub Rekening Efek adalah Rekening Efek setiap Nasabah Perusahaan yang tercatat
                                dalam Rekening
                                Efek partisipan pada LPP;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                RDN adalah Rekening Dana Nasabah yang wajib dibuat oleh masing-masing Nasabah
                                untuk melakukan pembayaran;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Syarat dan Ketentuan adalah syarat dan ketentuan pembukaan rekening yang
                                termaksud dalam Perjanjian ini beserta segala perubahannya yang mengikat bagi
                                Nasabah dan Perusahaan.
                            </li>
                        </ol>
                    </li>
                    <p class="paraghraph-letter-2 text-start text-justify">
                        PASAL 2
                        <br>
                        PEMBUKAAN REKENING
                    </p>
                    <li class="li-custom">
                        <ol class="ol-custom">
                            <li class="li-custom text-custom text-justify text-start">
                                Nasabah dengan ini setuju untuk membuka suatu Rekening Efek pada Perusahaan yang
                                akan dibuka atas nama Nasabah dan akan dikelola serta dioperasikan oleh
                                Perusahaan pada Bank
                                kustodian atau LPP;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah setuju bahwa dalam hal suatu rekening Efek pada Perusahaan dibuka atas
                                nama bersama
                                dua Nasabah atau lebih begitu pula pada Bank kustodian atau LPP, maka segala
                                ketentuan dalam
                                Perjanjian ini berlaku dan mengikat para Nasabah secara tanggung renteng, dan
                                oleh karenanya
                                Perusahaan berhak untuk melaksanakan suatu kuasa, hak, atau upaya hukum yang
                                dimiliki Perusahaan
                                berdasarkan Perjanjian ini maupun ketentuan hukum yang berlaku terhadap seluruh
                                Nasabah tersebut.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 3
                                <br>
                                SYARAT - SYARAT PEMBUKAAN REKENING
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Dengan telah diisi data-data Nasabah pada Formulir dan ditandatanganinya
                                Perjanjian oleh Nasabah
                                maka Nasabah menyatakan setuju atas seluruh isi dari Perjanjian ini dan
                                menyatakan bahwa semua
                                data-data, informasi dan keterangan yang tercantum dalam Formulir dan/atau
                                bentuk lain yang
                                Perusahaan minta adalah lengkap dan benar sesuai dengan keadaan Nasabah pemilik
                                rekening
                                sebenarnya;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah wajib menginformasikan data tambahan atau menyerahkan dokumen pendukung
                                informasi
                                yang diminta oleh Perusahaan dan juga menginformasikan secara tertulis
                                secepatnya kepada
                                Perusahaan jika ada perubahan-perubahan yang berkenaan dengan data-data yang
                                telah diberikan dan
                                dimuat dalam Formulir dan karenanya Perusahaan tidak bertanggung jawab apabila
                                ada kerugian yang
                                diderita oleh Nasabah yang disebabkan tidak disampaikannya perubahan data
                                dimaksud atau informasi
                                pendukung yang diminta oleh Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Perusahaan berhak dalam hal apapun dan tanpa alasan apapun menolak dan/ atau
                                membatalkan
                                permohonan pembukaan rekening oleh Calon Nasabah.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 4
                                <br>
                                SUB REKENING
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Berdasarkan peraturan perundang-undangan yang berlaku, Nasabah wajib memiliki
                                Sub Rekening
                                Efek di LPP dan RDN di Bank untuk itu, Nasabah dengan ini menyatakan dan
                                menjamin kepada
                                Perusahaan untuk membebaskan Perusahaan dari segala tuntutan hukum dan/atau
                                finansial atas:
                                <ol type="a">
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Dibukanya Sub Rekening Efek di LPP dan/atau pemberian data-data dan
                                        informasi milik Nasabah
                                        kepada LPP;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Dibukanya RDN di Bank dan/atau pemberian data-data dan informasi milik
                                        Nasabah kepada Bank;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Penyalahgunaan atau pengungkapan atas data-data, informasi, transaksi
                                        dan/atau aktivitas transaksi
                                        yang berkaitan dengan Sub Rekening Efek dan/atau RDN yang dilakukan oleh
                                        Staff, karyawan, maupun
                                        pihak lainnya di LPP dan Bank.
                                    </li>
                                </ol>
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah dapat sewaktu-waktu meminta laporan dan atau memeriksa kesesuaian antara
                                saldo Rekening Efek Nasabah dalam pembukuan Perusahaan dengan saldo efek Nasabah
                                dalam Sub Rekening Efek di LPP;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Semua dana dan/atau saham akan efektif di RDN setelah setoran dana dan/atau
                                saham selesai diproses pada sistem.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 5
                                <br>
                                PENGOPERASIAN REKENING
                                <br>
                                Perusahaan akan memberikan upaya terbaik untuk melaksanakan setiap perintah dari
                                Nasabah
                                sehubungan dengan pengoperasian rekening atas nama Nasabah atau melaksanakan
                                transaksi atas
                                nama Nasabah atau atas nama Rekening Nasabah. Namun demikian, Nasabah dengan ini
                                membebaskan
                                Perusahaan dari segala tanggung jawab dan kewajiban apapun dalam hal :
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Perusahaan tidak dapat atau belum melaksanakan instruksi atau perintah Nasabah
                                karena
                                keputusan pemerintah, pengaturan oleh Bursa Efek, perubahan peraturan
                                Perundang-undangan,
                                penghentian perdagangan, kegagalan sistem perdagangan, gangguan dalam jaringan
                                komunikasi,
                                gangguan dalam sistem elektronik, perang, pemogokan atau sebab-sebab lain diluar
                                kekuasaan Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Terdapat kerugian yang timbul sebagai akibat dari transaksi dan/atau
                                penyelesaiannya yang
                                mengalami keterlambatan, kesalahan, penundaan, pembatalan, kegagalan yang
                                disebabkan,
                                diumumkan, dilakukan oleh dan/atau melalui lembaga yang berwenang menurut
                                peraturan perundangundangan yang berlaku pada saat terjadinya transaksi dan/atau
                                yang diumumkan kemudian;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Terjadi kelalaian atau kealpaan yang tidak disengaja dan/atau tidak dilandasi
                                oleh itikad buruk
                                Perusahaan (termasuk disini: Direksi, karyawan, wakil atau kuasa Perusahaan);
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Keterlambatan dalam penentuan/pembentukan harga ataupun pelaksanaan transaksi,
                                khususnya
                                yang dikarenakan oleh keterbatasan system perdagangan yang tesedia atau
                                perubahan harga efek yang
                                cepat yang mengakibatkan suatu transaksi dilaksanakan tidak pada harga yang
                                dimintakan pada suatu
                                waktu tertentu atau harga pasar. Karenanya Nasabah dengan ini pula setuju untuk
                                menerima dan terikat
                                pada transaksi yang telah dilaksanakan dalam keadaan tersebut.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 6
                                <br>
                                PENUTUPAN REKENING
                                <br>
                                Dalam hal Perusahaan menutup (yang merupakan hak Perusahaan sepenuhnya dan tanpa
                                harus
                                menyebutkan suatu alasan apapun juga) Rekening Efek milik Nasabah pada
                                Perusahaan, maka
                                Perusahaan berhak untuk :
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Membatalkan semua atau sebagian perintah yang telah diterima namun belum
                                terlaksana, dan/atau;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Membatalkan semua atau sebagian Perjanjian antara Perusahaan dengan Nasabah,
                                dan/atau;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Melakukan segala hal yang perlu untuk menutup saldo negatif pada Perusahaan,
                                baik dengan
                                menjual ataupun membeli Efek yang ada dalam Rekening Nasabah pada Perusahaan,
                                dan/atau;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Menjual seluruh atau sebagian efek yang ada dalam Rekening-rekening Nasabah pada
                                Perusahaan dengan harga yang dianggap baik oleh Perusahaan, dan/atau;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Membeli efek yang diperlukan atau dianggap perlu oleh Perusahaan atas resiko,
                                beban, tanggung
                                jawab Nasabah untuk memenuhi kewajiban penyerahan sehubungan dengan penjualan
                                efek tersebut
                                yang telah dilakukan atas nama rekening tersebut;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Dalam hal saldo rekening dalam posisi negatif, Nasabah wajib untuk melakukan
                                pembayaran atau menambah efek, sebelum rekening ditutup;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Dalam hal saldo rekening positif Perusahaan wajib mengembalikan kepada Nasabah
                                untuk kelebihan saldo tersebut;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Dalam hal saldo efek dan RDN pada Rekening Nasabah berada di posisi nihil (nol)
                                dalam jangka waktu paling lama 6 (enam) bulan berturut-turut terhitung sejak
                                tanggal pencatatan terakhir, maka Perusahaan akan melakukan penutupan sepihak
                                atas Rekening Efek milik Nasabah bersangkutan.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 7
                                <br>
                                JAMINAN
                                <br>
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Nasabah wajib menyerahkan jaminan (collateral) kepada Perusahaan, yang jumlahnya
                                ditentukan
                                oleh Perusahaan berdasarkan kebijakan Perusahaan semata, yang dapat berubah-ubah
                                sewaktu-waktu
                                tanpa pemberitahuan terlebih dahulu, untuk menentukan Batas Transaksi (Trading
                                Limit) sebelum
                                Nasabah memberikan perintah transaksi. Terlepas dari hal tersebut diatas,
                                Nasabah wajib membayar
                                setiap kekurangan dan melunasi setiap jumlah yang terhutang yang timbul dari
                                suatu transaksi efek atas
                                nama Rekening Nasabah, berikut kewajiban lain (jika ada) yang besarnya
                                ditentukan oleh Perusahaan
                                menurut kebijakan dan/atau ketentuan Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Tanpa mengurangi ketentuan-ketentuan lain yang dimuat dalam Perjanjian ini,
                                Nasabah setuju dan
                                oleh karenanya memberikan wewenang sepenuhnya kepada Perusahaan untuk
                                menggunakan jaminan
                                yang diberikan oleh Nasabah kepada Perusahaan dimaksud dalam Pasal 7.1
                                Perjanjian ini untuk
                                menutupi segala kerugian yang timbul, biaya biaya dan hal-hal lainnya yang ada.
                                Ketentuan ini tidak
                                membatasi tanggung jawab Nasabah untuk tetap membayar kepada Perusahaan atas
                                segala kerugian
                                yang timbul dan biaya-biaya lain jika jumlah jaminan ternyata kurang. Dengan
                                ketentuan definisi
                                menggunakan jaminan dalam ketentuan ini adalah termasuk segala tindakan yang
                                diperlukan yang
                                menurut penilaian Perusahaan perlu untuk dilakukan, agar jaminan dapat digunakan
                                sesuai dengan
                                tujuan pemberian jaminan termasuk namun tidak terbatas menjual jaminan (apabila
                                jaminan terebut
                                dalam bentuk efek atau benda lainnya) dengan syarat dan ketentuan serta tingkat
                                harga yang dianggap
                                baik oleh Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Dalam hal dana menunjukkan saldo negatif dalam Rekening Efek Nasabah, Perusahaan
                                dapat :
                                <ol type="a">
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Menggunakan efek dalam Rekening Efek Nasabah tersebut sebagai jaminan
                                        atas kredit bank atau
                                        lembaga keuangan lainnya;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Melakukan penjualan efek secara paksa (forced sell) tanpa persetujuan
                                        Nasabah, hanya dalam rangka
                                        penyelesaian kewajiban Nasabah yang bersangkutan;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Ketentuan forced sell yang dilakukan oleh Perusahaan dilakukan dengan
                                        mempertimbangkan nilai
                                        portfolio Nasabah yang memiliki efek dengan potensi yang paling positif
                                        atau efek yang paling
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 8
                                <br>
                                PELAKSANAAN TRANSAKSI
                                <br>
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Para Pihak setuju dan sepakat bahwa setiap transaksi efek yang dilakukan atas
                                nama rekening
                                (Nasabah, penyelesaian transaksi dan perintah yang diberikan oleh Nasabah akan
                                selalu terikat dan
                                tunduk pada Ketentuan Hukum dan Peraturan Perundang-undangan yang berlaku di
                                Indonesia,
                                termasuk tetapi tidak terbatas pada ketentuan Pasar Modal, Bursa Efek dan
                                Lembaga yang berwenang
                                menurut peraturan Perundang-undangan yang berlaku (“Peraturan”) dan
                                tambahan-tambahan dan
                                perubahan-perubahannya atau yang diumumkan kemudian, kebiasaan, kelaziman yang
                                berlaku di
                                Indonesia ataupun Bursa Efek dimana transaksi tersebut dilakukan dan pasal-pasal
                                yang diatur dalam
                                Perjanjian ini;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah setuju dan oleh karenanya mengikatkan diri dengan Perjanjian ini,
                                Nasabah wajib
                                menanggung kerugian yang dideritanya yang disebabkan oleh hal-hal yang telah
                                disebutkan diatas dan
                                oleh karenanya kerugian yang timbul akan menjadi tanggung jawab Nasabah
                                sepenuhnya termasuk pula
                                kerugian yang disebabkan karena perubahan kebijaksanaan pemerintah dan/atau
                                lembaga yang
                                berwenang dibidang Pasar Modal;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Setiap perintah Nasabah, dapat disampaikan secara lisan dan/atau secara tertulis
                                dalam bentuk
                                surat pesanan, melalui media elektronik dan/atau media komunikasi lain untuk
                                perdagangan efek
                                termasuk tetapi tidak terbatas pada perdagangan efek jarak jauh (remote
                                trading), perdagangan efek
                                secara online (on-line trading), perdagangan melalui internet (internet
                                trading), melalui system
                                elektronik yang telah ditentukan oleh Perusahaan, tidak dibatasi oleh
                                batas-batas wilayah dan/atau
                                negara kepada karyawan yang berwenang di Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Berkenaan dengan perintah Nasabah yang disampaikan melalui media elektronik atau
                                media
                                komunikasi lain dan/atau sistem elektronik yang ditentukan oleh Perusahaan,
                                Nasabah dengan ini
                                menyatakan bertanggung jawab atas keabsahan dan kebenaran data perintah yang
                                disampaikan atau
                                ditujukan kepada Perusahaan berdasarkan data perintah yang diterima oleh sistem
                                komputer
                                Perusahaan dan karenanya diakui oleh Nasabah tanpa diperlukan tanda tangan
                                Nasabah dan merupakan
                                satu-satunya bukti tertulis yang sah mengikat Nasabah dan Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah yang melakukan transaksi beli harus menyelesaikan kewajiban pembayaran
                                kepada
                                Perusahaan melalui Rekening Dana Investor masing-masing efektif pada hari ke dua
                                (T+2) pk. 10.00 dan
                                apabila pada T+2 pembayaran tersebut belum diselesaikan maka Perusahaan berhak
                                melakukan
                                penjualan terhadap saham yang dimiliki oleh Nasabah pada T+4.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 9
                                <br>
                                BIAYA - BIAYA
                                <br>
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Nasabah wajib membayar dan menyelesaikan semua kewajiban dan biaya (jasa) lain
                                yang timbul
                                berkaitan dengan kepentingan Nasabah, termasuk tetapi tidak terbatas pada
                                komisi, bunga, pajak, biaya
                                administrasi, biaya korespondensi, bea, denda, biaya layanan jasa dan/ atau
                                biaya penitipan yang
                                dikenakan sehubungan dengan transaksi efek yang dilakukan atas nama Rekening
                                Nasabah, pembukaan,
                                pemeliharaan, pengoperasian, penutupan Rekening Nasabah, pembukaan, pemeliharaan
                                dan
                                pengoperasian RDN baik yang telah maupun akan ditetapkan kemudian oleh
                                Perusahaan dan Lembaga
                                yang berwenang. Perusahaan dapat dari waktu ke waktu mengubah dan
                                memberitahukannya kepada
                                Nasabah, besarnya kewajiban biaya jasa lain tersebut. Nasabah juga wajib
                                mengganti seketika saat
                                ditagih, semua biaya jasa dan pengeluaran yang ditanggung oleh Perusahaan
                                dan/atau pihak lain yang
                                ditunjuk/di gunakan oleh Perusahaan. Sehubungan dengan hal ini, Nasabah
                                memberikan kuasa yang
                                tidak dapat dicabut kembali kepada Perseroan untuk melakukan pemotongan langsung
                                dari Rekening
                                Nasabah yang ada pada Perseroan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Apabila Nasabah tidak dapat melakukan pembayaran atas segala biaya, termasuk
                                tetapi tidak
                                terbatas pada biaya layanan jasa Sub Rekening Efek, pajak dan biaya penitipan
                                yang timbul sehubungan
                                dengan proses pembukaan, pemeliharaan, dan pengoperasian Sub Rekening Efek,
                                Perusahaan berhak
                                untuk melakukan penutupan atas Sub Rekening Efek milik Nasabah yang ada di LPP
                                dengan atau tanpa
                                melakukan pemberitahuan terlebih dahulu kepada Nasabah;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah dengan ini menjaminkan efek dan/atau uang dalam Rekening Nasabah pada
                                Perusahaan
                                sebagai jaminan pelunasan dan penyelesaian segala kewajiban Nasabah kepada
                                Perusahaan.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 10
                                <br>
                                KONFIRMASI
                                <br>
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Perusahaan akan memberikan konfirmasi mengenai setiap transaksi perdagangan efek
                                yang terjadi
                                pada setiap hari bursa kepada Nasabah melalui media komunikasi dan/atau media
                                elektronik yang
                                dianggap tepat oleh Perusahaan. Konfirmasi tertulis dianggap bersifat akurat,
                                benar dan tidak dapat
                                diganggu gugat akurasi dan kebenarannya serta mengikat bagi Nasabah kecuali jika
                                Nasabah tidak
                                menyetujui isi konfirmasi transaksi tersebut. Dalam hal Nasabah tidak menyetujui
                                dan/atau tidak
                                menerima maka Nasabah sudah harus memberitahukannya kepada Perusahaan paling
                                lambat 1 (satu)
                                hari bursa . Jika dalam waktu tersebut tidak terdapat sanggahan dari Nasabah,
                                maka Nasabah dianggap
                                telah menyetujui isi konfirmasi;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Berkenaan dengan pasal 10.1 di atas, Perusahaan dapat melakukan koreksi atas
                                konfirmasi
                                transaksi yang telah diberikan oleh Perusahaan.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 11
                                <br>
                                PENGUNGKAPAN
                                <br>
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Perusahaan dapat menyampaikan pemberitahuan mengenai posisi Rekening Nasabah
                                melalui
                                media komunikasi dan/atau media elektronik sebagaimana tersebut didalam
                                Perjanjian ini kepada
                                Nasabah;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah dengan ini menyetujui bahwa pemberitahuan mengenai posisi Rekening
                                Nasabah yang
                                diberikan oleh Perusahaan melalui media komunikasi dan/atau media elektronik
                                tersebut adalah
                                merupakan konfirmasi tertulis yang bersifat akurat dan benar, dan tidak dapat
                                diganggu gugat akurasi
                                dan kebenarannya serta mengikat bagi Nasabah kecuali terdapat koreksi atas
                                pemberitahuan mengenai
                                posisi Rekening Nasabah yang diberikan dan disetujui oleh Perusahaan dengan
                                ketentuan dalam hal
                                terjadi koreksi dimaksud, maka Perusahaan selanjutnya akan membuat dan
                                memberitahukan suatu
                                pemberitahuan mengenai posisi rekening terbaru kepada nasabah.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 12
                                <br>
                                PEMBEBASAN TANGGUNG JAWAB
                                <br>
                                Tanpa mengurangi ketentuan lain dalam Perjanjian ini, Nasabah membebaskan
                                Perusahaan dari segala
                                tanggung jawab dan kewajiban apapun dalam hal:
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Keterlambatan atau ketidakcocokan proses order atau atas konfirmasi transaksi;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Terjadinya kebangkrutan, ketidakmampuan membayar atau dilikuidasinya bank, LPP,
                                LKP, Bursa
                                Efek atau organisasi/perorangan lainnya;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Kegagalan Perusahaan dalam memenuhi kewajibannya berdasarkan Syarat dan
                                Ketentuan ini
                                termasuk melaksanakan instruksi Nasabah akibat sebab-sebab termasuk tetapi tidak
                                terbatas pada
                                pelarangan oleh pemerintah, pengaturan bursa, perubahan Perundang-undangan,
                                perang,
                                pemberontakan, huru-hara, bencana alam, sabotase, pemogokan, kegagalan teknis
                                (baik perangkat
                                lunak maupun perangkat keras Bursa Efek), yang mengakibatkan JATS atau sistem
                                perdagangan Bursa
                                Efek tidak dapat berfungsi sebagaimana mestinya dan/atau terhentinya perdagangan
                                di Bursa Efek,
                                penundaan penyelesaian transaksi bursa atas saham tertentu yang dilakukan oleh
                                pihak Regulator (OJK,
                                LPP, LKP, Bursa Efek Indonesia) yang akan menyebabkan terjadinya penundaan hak
                                terima dana
                                dan/atau saham kepada Nasabah dan/atau kejadian lain diluar kekuasaan Perusahaan
                                dan/atau sebabsebab lain diluar kekuasaan Perusahaan (force majeure);
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Terjadinya suspen atau penghentian transaksi atau pengiriman saham oleh Bursa
                                Efek atau LPP;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Kelalaian atau kealpaan yang tidak disengaja dan tidak dilandasi oleh itikad
                                buruk yang dilakukan
                                oleh Direksi, Karyawan, wakil atau kuasa Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Akibat lain diluar kendali Perusahaan baik langsung maupun tidak langsung atas
                                terjadinya suatu
                                peristiwa atau keadaan dimana Perusahaan dan/atau Nasabah tidak dapat
                                mencegahnya seperti
                                pembatasan yang dilakukan oleh pemerintah, keadaan darurat, kekacauan negara,
                                tindakan terorisme,
                                bencana alam, huru-hara, peperangan dan pemogokan kerja;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Keterlambatan dalam pelaksanaan instruksi akibat terjadinya kerusakan pada
                                transmisi alat-alat
                                komunikasi yang digunakan Perusahaan untuk melaksanakan transaksi efek.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 11
                                <br>
                                KUASA-KUASA
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Sehubungan dengan pelaksanaan Perjanjian ini, Nasabah dengan ini setuju untuk
                                memberikan
                                kuasa yang tidak dapat ditarik kembali ini kepada Perusahaan untuk :
                                <ol type="a">
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Membuka dan memelihara Rekening Efek atas nama Nasabah pada Perusahaan
                                        untuk maksud
                                        pembelian, penjualan, penukaran, penyerahan ataupun maksud dilakukannya
                                        perbuatan-perbuatan
                                        hukum lain seumumnya atas, atau sehubungan dengan setiap segala jenis
                                        efek;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Mengoperasikan rekening tersebut sesuai dengan perintah dari Nasabah
                                        atau wakil/kuasanya yang sah;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Menerima, menyerahkan atau menyimpan uang dan/atau efek untuk dan atas
                                        nama Nasabah (apabila
                                        Nasabah tidak memiliki jasa kustodian tersendiri);
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Menerima/ menyerahkan sejumlah uang dan/atau efek yang ditransaksikan
                                        dari/kepada Bank
                                        Kustodian Nasabah untuk dan atas nama Nasabah (apabila Nasabah tidak
                                        memiliki jasa kustodian
                                        tersendiri);
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Membuka, memelihara dan mengoperasikan Sub Rekening Efek atas nama
                                        Nasabah pada LPP;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Dapat menyerahkan uang dan/atau efek Nasabah di Perusahaan dengan cara
                                        memindahkan/transfer
                                        uang dan/atau efek Nasabah ke rekening jaminan (collateral) Perusahaan
                                        di LKP dan/atau LPP sepanjang
                                        uang dan/atau efek tersebut tetap dicatat;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Menandatangani surat pesanan dalam hal perintah dilakukan secara lisan.
                                        Kuasa yang diberikan oleh
                                        Nasabah kepada Perusahaan untuk melakukan hal tersebut di atas, tidak
                                        diberikan dalam bentuk Surat
                                        Kuasa yang terpisah dan Nasabah dengan ini menyetujui pula bahwa setiap
                                        pembicaraan yang dilakukan
                                        oleh Nasabah dengan Perusahaan (dalam hal ini pejabat yang ditunjuk oleh
                                        Perseroan) direkam oleh
                                        Perusahaan dan rekaman tersebut merupakan bukti yang sah dan mengikat
                                        Nasabah dan Perusahaan;
                                        Menagih, menerima dan mengumpulkan:
                                        <ol type="i">
                                            <li
                                                class="syarat-pengumpulan text-custom-2 text-justify text-start">
                                                Bunga yang didistribusikan/dibayarkan atas efek milik Nasabah
                                                yang disimpan Perusahaan, atau;
                                            </li>
                                            <li
                                                class="syarat-pengumpulan text-custom-2 text-justify text-start">
                                                Efek, uang atau harta lain yang timbul/berasal dari atau
                                                ditawarkan sebagai bonus, pengembalian
                                                (pembayaran kembali), pemecahan, opsi atau lainnya sehubungan
                                                dengan efek, dan mengkreditkannya
                                                ke Rekening Nasabah (kecuali diinstruksikan/diperintahkan lain
                                                oleh Nasabah).
                                            </li>
                                        </ol>
                                        <p>
                                            Berkenaan dengan hal tersebut di atas, Nasabah dengan ini menunjuk
                                            dan memberikan kuasa kepada
                                            Perusahaan dan Perusahaan dengan ini menerima penunjukan dan
                                            pemberian kuasa tersebut, untuk
                                            bertindak sebagai Kustodian atas setiap dan segala jenis efek
                                            dan/atau uang dalam Rekening Nasabah,
                                            dengan melakukan hal-hal sebagai berikut :
                                        </p>
                                        <ol type="a">
                                            <li class="hal-hal-kuasa text-custom-2 text-justify text-start">
                                                Mengkreditkan setiap hasil penjualan, penukaran, atau penyerahan
                                                efek atas nama Nasabah ke
                                                Rekening Nasabah (kecuali diinstruksikan/ diperintahkan lain
                                                secara tertulis oleh Nasabah);
                                            </li>
                                            <li class="hal-hal-kuasa-2 text-custom-2 text-justify text-start">
                                                Mendebit Rekening Nasabah untuk pembayaran dan/atau pelunasan
                                                komisi,biaya jasa perusahaan
                                                efek lain, pengeluaran biaya bea, ganti rugi, denda, penalti,
                                                provisi, pajak biaya layanan jasa sub
                                            </li>
                                            <li class="hal-hal-kuasa-2 text-custom-2 text-justify text-start">
                                                deposit, menjual jaminan (collateral) dan/atau efek-efek milik
                                                Nasabah (dan memperhitungkan hasil
                                                penjualan tersebut untuk kepentingan Nasabah dan Perusahaan)
                                                atas akibat antara lain dalam hal
                                                Nasabah melakukan cidera janji dan oleh karenanya Kuasa yang
                                                diberikan ini merupakan bagian yang
                                                tidak terpisahkan dari Perjanjian ini;
                                            </li>
                                            <li class="hal-hal-kuasa-2 text-custom-2 text-justify text-start">
                                                Menyesuaikan, menggabungkan, mengkonsolidasikan atau menutup
                                                (tanpa harus menyebut suatu
                                                alasan apapun juga) Rekening Nasabah pada Perusahaan dan
                                                melaksanakan kompensasi penjumpaan
                                                hak dan/atau kewajiban atau memindahkan jumlah kredit pada
                                                rekening tersebut, maka konversi
                                                tersebut akan dilaksanakan dengan kurs konversi yang berlaku di
                                                pasar untuk mata uang yang
                                                bersangkutan pada hari dilaksanakannya penggabungan,
                                                konsolidasi, kompensasi/ penjumpaan hak
                                                dan/atau kewajiban atau pemindahan jumlah kredit tersebut
                                                sebagaimana yang ditentukan sendiri oleh
                                                Perusahaan.
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah sepakat dan setuju mengenai pemberian kuasa sebagaimana tersebut
                                dalam pasal 13 ayat
                                1 ini adalah diberikan dan oleh karenanya mempunyai kekuatan hukum pada
                                saat yang bersamaan
                                dengan ditandatanganinya Perjanjian ini, dan dalam hal diperlukannya
                                surat kuasa terpisah, Nasabah
                                dengan ini setuju untuk membuat dan menandatangani surat kuasa
                                tersendiri dalam bentuk dan isi yang
                                disetujui terlebih dahulu oleh Perusahaan, dan merupakan bagian yang
                                tidak terpisahkan dari Perjanjian
                                ini;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Semua hal tersebut di atas beserta segala akibat dan kewajiban yang timbul
                                adalah tanggungan dan
                                resiko Nasabah. Dalam melaksanakan segala apa yang diminta atau dikuasakan
                                berdasarkan Perjanjian
                                ini, Perusahaan dapat melaksanakannya sendiri ataupun melalui Perusahaan lain,
                                agen, mitra
                                Perusahaan atau pihak lain yang dipilih oleh Perusahaan.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 14
                                <br>
                                REKENING LAIN
                                <br>
                                Apabila Nasabah berkehendak membuka rekening lain di Perusahaan maka Nasabah
                                setuju untuk
                                menandatangani perjanjian yang dipersyaratkan oleh Perusahaan dan Nasabah setuju
                                seluruh informasi
                                dan data yang terdapat dalam Formulir digunakan oleh Perusahaan dan menjamin
                                bahwa informasi dan
                                data yang terdapat dalam Formulir dan Perjanjian ini adalah benar pada saat itu,
                                kecuali secara tertulis
                                dan tegas dinyatakan lain oleh Nasabah.
                            </p>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 15
                                <br>
                                KORESPONDENSI
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Para Pihak sepakat bahwa setiap korespondensi yang ditujukan kepada Nasabah
                                cukup
                                disampaikan pada alamat email dan/atau alamat korespondesi Nasabah sebagaimana
                                disebutkan dalam
                                Formulir (kecuali apabila alamat Nasabah berubah maka perubahan tersebut
                                haruslah diberitahukan
                                secara tertulis dan pemberitahuan perubahannya telah diterima dalam bentuk
                                tertulis oleh Perusahaan)
                                dan dianggap telah diterima oleh Nasabah sendiri dalam waktu 1 (satu) Hari Bursa
                                setelah dilakukan
                                pengirimannya oleh Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Nasabah akan menyetujui setiap korespondensi yang dikeluarkan oleh Perusahaan
                                sehubungan
                                dengan operasional transaksi.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 16
                                <br>
                                PENYELESAIAN PERSELISIHAN
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Apabila terjadi sengketa yang berhubungan dengan Perjanjian ini, termasuk namun
                                tidak terbatas
                                pada hal-hal yang berkaitan dengan keberadaan, keberlakuan, atau pelaksanaan hak
                                atau kewajiban,
                                maka Perusahaan dan Nasabah sepakat akan mengusahakan, untuk dalam jangka waktu
                                30 (tiga puluh)
                                hari sejak diterimanya pemberitahuan dari salah satu pihak lainnya atas
                                terjadinya perselisihan tersebut,
                                menyelesaikan terlebih dahulu sengketa dimaksud dengan cara musyawarah di antara
                                Perusahaan dan
                                nasabah;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Dalam hal perselisihan yang timbul tidak dapat diselesaikan secara musyawarah
                                dalam jangka
                                waktu 30 (tiga puluh) hari, Perusahaan dan Nasabah sepakat untuk menyelesaikan
                                perselisihan tersebut
                                melalui Badan Arbitrase Pasar Modal Indonesia (BAPMI) sesuai dengan peraturan
                                Perundang-undangan
                                yang berlaku;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Perusahaan Indonesia dan Nasabah sepakat bahwa keputusan BAPMI bersifat final
                                dan mengikat
                                dengan menanggung sendiri biaya-biaya dan pengeluaran-pengeluaran yang timbul
                                sehubungan dengan
                                proses penyelesaian perselisihan.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 17
                                <br>
                                NASABAH MENINGGAL DUNIA
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Dengan penyerahan kekayaan Rekening Efek Nasabah yang meninggal dunia kepada
                                (para) ahli
                                waris atau pelaksana wasiat sesuai peraturan perundangan yang berlaku
                                sebagaimana yang disebutkan
                                dalam surat keterangan hak waris atau surat wasiat atau dokumen lainnya, maka
                                Perusahaan akan
                                menutup Rekening Efek atas nama Nasabah dan Perusahaan dibebaskan sepenuhnya
                                dari tanggung
                                jawab sehubungan dengan penyerahan kekayaan Rekening Efek Nasabah dimaksud;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Jika Nasabah perorangan meninggal dunia, maka Perusahaan berhak meminta ahli
                                waris yang sah
                                untuk memberikan akta kematian, surat keterangan hak waris, akta wasiat dan
                                dokumen lain yang
                                menurut pertimbangan Perusahaan diperlukan untuk mengetahui (para) ahli waris
                                yang berhak atas
                                Rekening Efek Nasabah yang telah meninggal dunia tersebut.
                            </li>
                        </ol>
                    </li>
                    <li class="li-custom mt-2">
                        <ol class="ol-custom">
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PASAL 18
                                <br>
                                KETENTUAN - KETENTUAN LAIN
                            </p>
                            <li class="li-custom text-custom text-justify text-start">
                                Jika suatu ketentuan atau syarat dalam Perjanjian ini dinyatakan tidak berlaku
                                oleh suatu putusan
                                pengadilan atau kekuasaan yang berwenang, atau menjadi tidak berlaku berdasarkan
                                ketentuan hukum
                                yang berlaku, maka ketentuan dan syarat lain yang bukan termasuk yang dinyatakan
                                tidak berlaku
                                tersebut dalam Syarat dan Ketentuan ini tidaklah terpengaruh dan tetap mengikat
                                Para Pihak;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Setiap perubahan dan/atau tambahan atas peraturan dan/atau kebijakan Perusahaan
                                dapat
                                disampaikan oleh Perusahaan dengan cara, antara lain melalui pengumuman yang
                                diumumkan baik di
                                kantor Perusahaan dan/atau kantor Mitra Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Segala perubahan terhadap ketentuan dalam Perjanjian ini akan diberitahukan oleh
                                Perusahaan
                                kepada Nasabah secara tertulis. Perubahan tersebut mengikat Nasabah sejak
                                tanggal berlakunya;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Segala sesuatu yang belum diatur dalam Perjanjian ini akan diatur lebih lanjut
                                oleh Perusahaan;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Perusahaan dapat mengubah dan/atau menambah Perjanjian ini setiap saat secara
                                sepihak
                                dengan/atau tanpa alasan apapun;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Perjanjian ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dengan
                                Formulir dan
                                persyaratan dan ketentuan perdagangan efek yang akan dibuat dan ditentukan
                                kemudian;
                            </li>
                            <li class="li-custom text-custom-2 text-justify text-start">
                                Perjanjian ini berlaku dan mengikat Para Pihak sejak Nasabah menandatangani
                                Perjanjian ini.
                            </li>
                        </ol>
                    </li>
                    <li class="mt-3">
                        <ol>
                            <p class="paraghraph-letter-3 text-start text-justify">
                                PERSETUJUAN ATAS KETENTUAN - KETENTUAN PENGGUNAAN ONLINE TRADING
                            </p>
                            <li class="text-custom text-justify text-start">
                                Profindo Online Trading yang selanjutnya disebut "ProCLICK" adalah Online
                                Trading Platform yang
                                dikembangkan oleh Perusahaan untuk memfasilitasi perdagangan efek secara online
                                dengan validasi
                                secara otomatis tanpa intervensi dari personil Perusahaan;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Perusahaan akan memberikan username, password dan PIN Trading dalam rangka
                                penggunaan
                                fasilitas ProCLICk. Dengan ini Nasabah menyatakan bertanggung jawab penuh :
                                <ol type="a">
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Untuk menjaga, memelihara serta mengamankan Username, Password, dan PIN
                                        Trading yang
                                        diberikan oleh Perusahaan untuk dapat menggunakan fasilitas ProCLICK;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Untuk menanggung segala kerugian yang terjadi akibat kesalahan order
                                        transaksi dan atas
                                        penggunaan Rekening Nasabah dengan melalui Username, Password, dan PIN
                                        Trading Nasabah,
                                        termasuk namun tidak terbatas pada order yang dilakukan oleh pihak yang
                                        tidak berhak memperoleh
                                        secara tidak sah;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Nasabah diwajibkan untuk segera mengganti Username, Password, dan PIN
                                        Trading untuk menjaga
                                        keamanan dan kerahasiaan transaksi dari pihak ketiga/lain, setelah
                                        Username, Password, dan PIN
                                        Trading Nasabah terima dari Perusahaan;
                                    </li>
                                    <li class="sub-rekening text-custom-2 text-justify text-start">
                                        Apabila terjadi penyalahgunaan oleh pihak yang tidak berhak atas
                                        Username, Password, dan PIN
                                        Trading Nasabah wajib segera memberitahukan Perusahaan dalam waktu
                                        selambat-lambatnya 1 x 24
                                        jam dan dengan ini Nasabah membebaskan Perusahaan dari segala bentuk
                                        tanggung jawab dan
                                        kerugian yang ditimbulkan.
                                    </li>
                                </ol>
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Nasabah dengan ini bertanggung jawab penuh serta membebaskan Perusahaan dari
                                segala tuntutan
                                atas pengiriman Username, Password, dan PIN Trading melalui surat elektronik
                                (E-mail) atau pesan
                                singkat (SMS) sesuai dengan alamat E-mail atau nomor telepon selular yang
                                tercantum dalam Formulir
                                Pembukaan Rekening Efek ProCLICK atas nama Nasabah;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Berkenaan dengan perintah dan/atau pesanan Nasabah yang disampaikan melalui
                                ProCLICK, Nasabah
                                menyatakan bertanggung jawab atas keabsahan dan kebenaran data, perintah
                                dan/atau pesanan
                                Nasabah yang disampaikan dan ditujukan kepada Perusahaan berdasarkan data yang
                                diterima dalam
                                sistem komputer Perusahaan, bahwa transaksi tersebut diakui oleh Nasabah tanpa
                                diperlukan tanda
                                tangan Nasabah dan merupakan satu-satunya bukti tertulis yang sah dan mengikat
                                Nasabah dengan
                                Perusahaan terlihat dari mutasi yang tercatat dalam laporan Rekening Nasabah
                                jika dicetak. Setiap order
                                beli dan jual yang telah berhasil dilakukan akan memperoleh JATS Order ID dari
                                Bursa Efek sedangkan
                                Order yang telah terjadi (match) akan memperoleh JATS Trade ID;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Perusahaan tidak bertanggung jawab atas segala keterlambatan dalam melaksanakan
                                order Nasabah
                                baik untuk membeli atau menjual efek yang mana order tersebut membutuhkan
                                persetujuan
                                sebelumnya dari pejabat berwenang sebelum terjadinya peristiwa atau sebab-sebab
                                lain diluar
                                kekuasaan Perusahaan. Apabila terjadi perubahan pasar yang ketat dan cepat,
                                Perusahaan hanya
                                akan melaksanakan order Nasabah atas dasar usaha terbaik. Apabila terjadi
                                perubahan pasar yang tidak
                                biasa dan volume perdagangan yang tinggi, Perusahaan atas kebijaksaannya
                                sendiri, dapat membatasi
                                dan memperketat jenis order yang diterima dari Nasabah;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Perusahaan berhak mengawasi, membatasi dan menghentikan akses Nasabah dalam
                                menggunakan
                                ProCLICK setiap saat tanpa pemberitahuan terlebih dahulu dan tanpa alasan
                                apapun, termasuk namun
                                tidak terbatas pada pemeliharaan dan perbaikan sistem, atau terjadinya
                                pelanggaraan atau alasan lain
                                terhadap ketentuan yang diatur dalam persetujuan ini. Untuk melakukan aktifasi
                                kembali karena
                                penghentian akses layanan tersebut diatas, Nasabah harus melakukan pendaftaran
                                ulang dengan
                                menghubungi Perusahaan;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Perusahaan berhak membatasi dan menghentikan akses Nasabah dalam menggunakan
                                ProCLICK
                                apabila Rekening Nasabah tidak aktif dalam 3 (tiga) bulan terakhir. Untuk
                                melakukan aktifasi kembali
                                karena penghentian akses layanan tersebut diatas, Nasabah dapat menghubungi
                                Perusahaan;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Fasilitas-fasilitas ProCLICK yang diberikan oleh Perusahaan kepada Nasabah
                                sebagai satu kesatuan
                                sistem merupakan resiko Nasabah sendiri. Fasilitas tersebut termasuk pula
                                berita, data, fakta dan
                                pandangan, pendapat rekomendasi individu dan organisasi dalam jasa dan/atau
                                produk. Informasi yang
                                ada dalam fasilitas ProCLICK diperoleh dari berbagai sumber yang diyakini dapat
                                diandalkan tetapi dapat
                                diubah atau diperbaharui sewaktu-waktu tanpa adanya pemberitahuan terlebih
                                dahulu kepada
                                Nasabah. Tidak satupun informasi tersebut yang Nasabah peroleh yang menyatakan
                                suatu permintaan
                                dari Perusahaan atau permintaan bahwa Nasabah harus membeli atau menjual efek
                                tertentu pada
                                jumlah/harga tertentu atau semuanya;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Nasabah dengan ini membebaskan Perusahaan dari segala bentuk tanggung jawab atas
                                kerugian dan
                                kerusakan yang terjadi baik secara langsung maupun tidak langsung dari
                                penggunaan fasilitas ProCLICK
                                yang diakibatkan oleh segala gangguan, penghapusan kesalahan, penundaan
                                pengoperasian atau
                                transmisi, virus komputer, kerusakan jaringan komunikasi, pencurian atau
                                perusakan, memperoleh
                                secara tidak sah, perubahan atau penggunaan informasi;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Nasabah bertanggung jawab atas segala biaya (termasuk namun tidak terbatas pada
                                biaya penasihat
                                hukum), klaim, kerusakan (termasuk namun tidak terbatas pada kerusakan apapun
                                yang bersifat tidak
                                langsung, kerusakan yang tidak disengaja atau kerusakan apapun yang bersifat
                                khusus), kerugian
                                (termasuk namun tidak terbatas pada kerugian transaksi atau hilangnya
                                pendapatan) atau kewajiban
                                lainnya karena ketidakmampuan Nasabah dalam menggunakan sistem (misalnya
                                ketidakmampuan
                                untuk membatalkan order), termasuk namun tidak terbatas pada pembatasan akses
                                atau gangguan
                                sistem;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Biaya penggunaan ProCLICK akan ditentukan oleh Manajemen Perusahaan dan tanpa
                                pemberitahuan terlebih dahulu berhak sepenuhnya untuk mengubah biaya penggunaan
                                aplikasi ini
                                apabila dianggap perlu;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Perusahaan berhak sepenuhnya dari waktu ke waktu memperbaharui, merevisi atau
                                mengubah
                                Persetujuan Atas Ketentuan-ketentuan Penggunaan ProCLICK ini atau mengubah atau
                                menghentikan
                                suatu bagian atau fitur ProCLICK tanpa pemberitahuan terlebih dahulu kepada
                                Nasabah;
                            </li>
                            <li class="text-custom-2 text-justify text-start">
                                Dengan menandatangani Formulir Pembukaan Rekening, Nasabah pemohon fasilitas
                                ProCLICK
                                dengan ini menyatakan bahwa Nasabah mengerti dan menyetujui seluruh isi, syarat
                                dan ketentuan
                                penggunaan Online Trading yang merupakan satu kesatuan yang tidak dapat
                                dipisahkan dari Perjanjian
                                Pembukaan Rekening Efek dan bertanggung jawab atas segala konsekuensi termasuk
                                manfaat, risiko,
                                dan biaya-biaya yang melekat pada fasilitas Online Trading ini.
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
        <footer>
            <div class="appBottomMenu bg-danger">
                <div class="item">
                    <a href="/">
                        <p class="text-white">
                            <i class="fa-solid fa-arrow-left-long"></i>
                            <span>Kembali</span>
                        </p>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
