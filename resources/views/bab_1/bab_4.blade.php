@extends('layouts.main')

@section('container')

<style>
    /* =========================================================
       KORESPONDENSI SATU-SATU - LAYOUT DISAMAKAN DENGAN RELASI
       Hanya tata letak/kotak/pagination yang diubah.
    ========================================================= */

    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: clip;
        font-family: 'Poppins', sans-serif;
    }

    .korespondensi-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: clip;
    }

    .korespondensi-page.active {
        display: block;
    }

    .korespondensi-page > * {
        max-width: 100%;
        box-sizing: border-box;
    }

    .korespondensi-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
    }

    .korespondensi-page-title {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        text-align: center;
        padding: 16px 22px;
        border-radius: 20px;
        font-weight: 800;
        font-size: 1.25rem;
        margin-bottom: 22px;
        box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
    }

    .korespondensi-card-header {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        border-radius: 18px;
        padding: 14px 18px;
        text-align: center;
        font-size: 1.15rem;
        font-weight: 800;
        margin: 20px 0 18px 0;
        box-shadow: 0 8px 16px rgba(142, 68, 173, 0.14);
    }

    .korespondensi-info-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        margin-bottom: 16px;
        line-height: 1.85;
        color: #333;
        box-sizing: border-box;
    }

    .korespondensi-soft-box {
        background: #FBF7FF;
        border: 2px dashed #CFA7F3;
        border-radius: 18px;
        padding: 16px 18px;
        margin-bottom: 16px;
        color: #4B2673;
        line-height: 1.85;
        box-sizing: border-box;
    }

    .korespondensi-soft-box strong {
        color: #4B2673;
    }

    .korespondensi-question-box {
        width: 100%;
        background: #FBF7FF;
        border: 2px dashed #CFA7F3;
        border-radius: 18px;
        padding: 18px;
        font-weight: 600;
        font-size: 1.02rem;
        color: #4B2673;
        box-sizing: border-box;
        margin-top: 18px;
    }

    .korespondensi-solution-box {
        width: 100%;
        margin-top: 18px;
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        box-sizing: border-box;
        overflow: hidden;
    }

    .korespondensi-solution-title {
        width: 100%;
        padding: 13px 18px;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 800;
        line-height: 1.4;
        box-sizing: border-box;
    }

    .korespondensi-solution-content {
        padding: 18px;
        background: #ffffff;
        box-sizing: border-box;
    }

    .korespondensi-layout-dua {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(280px, 0.85fr);
        gap: 18px;
        align-items: start;
    }

    .korespondensi-table-box,
    .korespondensi-diagram-box {
        background: linear-gradient(180deg, #ffffff 0%, #fdfbff 100%);
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        box-sizing: border-box;
    }

    .korespondensi-table-box table {
        margin-bottom: 0;
        border-color: #E9D5FF !important;
    }

    .korespondensi-table-box thead th {
        background: #F3E8FF !important;
        color: #4B2673 !important;
        border-color: #E9D5FF !important;
        font-weight: 800;
    }

    .korespondensi-table-box tbody td {
        border-color: #E9D5FF !important;
        color: #333;
    }

    .ks-kuis-box {
        background: linear-gradient(180deg, #ffffff 0%, #fdfbff 100%);
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        box-sizing: border-box;
    }

    .ks-soal {
        background: #F6EFFF;
        border-left: 5px solid #8E44AD;
        border-radius: 14px;
        padding: 14px 16px;
        font-size: 1rem;
        font-weight: 800;
        color: #4B2673;
        line-height: 1.7;
        margin-bottom: 14px;
    }

    .ks-petunjuk {
        font-size: 0.95rem;
        color: #6b21a8;
        margin-bottom: 16px;
        line-height: 1.7;
    }

    .ks-opsi {
        display: grid;
        gap: 12px;
    }

    .ks-labelopsi {
        display: flex;
        gap: 13px;
        align-items: center;
        padding: 15px 16px;
        border: 1.5px solid #E9D5FF;
        border-radius: 14px;
        background: #ffffff;
        cursor: pointer;
        transition: 0.2s ease;
        font-size: 0.95rem;
        line-height: 1.55;
        color: #333;
    }

    .ks-labelopsi:hover {
        transform: translateY(-1px);
        border-color: #A855F7;
        background: #FBF7FF;
        box-shadow: 0 8px 18px rgba(124, 58, 237, 0.08);
    }

    .ks-labelopsi input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: #7C3AED;
        cursor: pointer;
        flex-shrink: 0;
    }

    .ks-aksi {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .ks-btn {
        min-width: 150px;
        height: 44px;
        border-radius: 12px;
        font-size: 0.95rem;
        font-weight: 800;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .ks-btn-primary {
        border: 2px solid #15803D;
        background: linear-gradient(135deg, #15803D, #22C55E);
        color: #ffffff;
        box-shadow: 0 8px 16px rgba(21, 128, 61, 0.20);
    }

    .ks-btn-reset {
        background: #ffffff;
        color: #15803D;
        border: 2px solid #15803D;
        box-shadow: 0 6px 12px rgba(21, 128, 61, 0.12);
    }

    .ks-btn:hover {
        transform: translateY(-2px);
    }

    .ks-hasil {
        display: none;
        margin-top: 20px;
        padding: 18px;
        border-radius: 16px;
        font-size: 0.95rem;
        line-height: 1.8;
    }

    .ks-benar {
        background: #ECFDF5;
        border: 2px solid #86EFAC;
        color: #166534;
    }

    .ks-salah {
        background: #FFF7ED;
        border: 2px solid #FDBA74;
        color: #7C2D12;
    }

    .korespondensi-diagram-box strong {
        color: #4B2673;
    }

    .korespondensi-diagram-box p {
        margin-bottom: 0;
        color: #333;
        line-height: 1.85;
    }

    .korespondensi-diagram-box img {
        max-width: 500px;
        width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
        margin: 18px auto 0 auto;
    }

    .korespondensi-definition-box {
        background: linear-gradient(135deg, #F6EFFF, #EFE5FF);
        border: 1px solid #DCC5F1;
        border-left: 5px solid #8E44AD;
        border-radius: 18px;
        padding: 18px;
        line-height: 1.85;
        color: #4B2673;
        margin-top: 18px;
    }

    .korespondensi-definition-box p {
        margin-bottom: 10px;
    }

    .korespondensi-definition-box p:last-child {
        margin-bottom: 0;
    }

    /* =========================================================
       PAGINATION SAMA SEPERTI RELASI
    ========================================================= */

    .korespondensi-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .korespondensi-pagination .pagination {
        gap: 5px;
    }

    .korespondensi-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 700;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .korespondensi-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .korespondensi-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .korespondensi-pagination .page-item.disabled .page-link {
        color: #aaaaaa;
        background-color: #f6f6f6;
        border-color: #eeeeee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 992px) {
        .korespondensi-layout-dua {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }

        .korespondensi-card {
            padding: 16px;
            border-radius: 20px;
        }

        .korespondensi-page-title,
        .korespondensi-card-header {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .korespondensi-info-box,
        .korespondensi-table-box,
        .korespondensi-diagram-box,
        .ks-kuis-box,
        .korespondensi-solution-content {
            padding: 14px;
            border-radius: 15px;
        }

        .korespondensi-question-box {
            padding: 14px;
            border-radius: 15px;
            font-size: 0.95rem;
        }

        .ks-btn {
            width: 100%;
        }

        .korespondensi-pagination .page-link {
            font-size: 0.82rem;
            padding: 7px 9px;
        }
    }
</style>

<div class="content-gap" data-materi="materi_4" data-sub-page="pengertian" data-total-pages="1">

    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="korespondensi-page active" id="korespondensiPage1">

        <div class="korespondensi-card">
            <div class="korespondensi-page-title">
                Korespondensi Satu-satu
            </div>

            <div class="korespondensi-info-box">
    <strong>Tujuan Pembelajaran</strong>

    <ol>
        <li>
            Peserta didik mampu menjelaskan konsep korespondensi satu-satu.
        </li>
        <li>
            Peserta didik mampu menganalisis syarat dan ciri-ciri korespondensi satu-satu.
        </li>
        <li>
            Peserta didik mampu menyajikan korespondensi satu-satu dalam bentuk diagram panah.
        </li>
    </ol>
</div>
            <div class="korespondensi-card-header">
                Perhatikan situasi berikut!
            </div>

            <div class="korespondensi-info-box">
                <p>
                    Keluarga Ibu Rahmah pergi berbelanja di Pasar Wadai Ramadhan.
                    Setiap anggota keluarga membeli satu jenis wadai yang paling disukainya.
                </p>

                <p>
                    Data berikut menunjukkan jenis wadai yang dibeli oleh setiap anggota keluarga.
                </p>

                <div class="korespondensi-table-box">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle">
                            <thead>
                                <tr>
                                    <th>Anggota Keluarga</th>
                                    <th>Wadai yang Dibeli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ibu Rahmah</td>
                                    <td>Bingka</td>
                                </tr>
                                <tr>
                                    <td>Bapak Zain</td>
                                    <td>Ipau</td>
                                </tr>
                                <tr>
                                    <td>Nisa</td>
                                    <td>Wadai Cincin</td>
                                </tr>
                                <tr>
                                    <td>Rafi</td>
                                    <td>Putri Selat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="korespondensi-question-box">
                    <ol style="margin:0; padding-left:20px;">
                        <li>
                            Bagaimana hubungan antara anggota keluarga dan
                            wadai yang dibeli dapat disebut sebagai korespondensi satu-satu?
                        </li>
                        <li>
                            Bagaimana cara menyajikan hubungan tersebut dalam bentuk diagram panah?
                        </li>
                    </ol>
                </div>

                <div class="korespondensi-solution-box">
                    <div class="korespondensi-solution-title">
                        Penyelesaian
                    </div>

                    <div class="korespondensi-solution-content">
                        <div class="korespondensi-layout-dua">
                            <div class="ks-kuis-box">
                                <div class="ks-soal">
                                    Centang pernyataan yang benar agar hubungan anggota keluarga
                                    dan wadai termasuk korespondensi satu-satu.
                                </div>

                                <div class="ks-petunjuk">
                                    Pilih semua pernyataan yang sesuai.
                                </div>

                                <div class="ks-opsi">
                                    <label class="ks-labelopsi">
                                        <input type="checkbox" id="ks_a">
                                        <span>Setiap anggota keluarga berpasangan tepat dengan satu jenis wadai.</span>
                                    </label>

                                    <label class="ks-labelopsi">
                                        <input type="checkbox" id="ks_b">
                                        <span>Satu orang boleh membeli semua jenis wadai.</span>
                                    </label>

                                    <label class="ks-labelopsi">
                                        <input type="checkbox" id="ks_c">
                                        <span>Tidak ada anggota keluarga yang membeli lebih dari satu wadai.</span>
                                    </label>

                                    <label class="ks-labelopsi">
                                        <input type="checkbox" id="ks_d">
                                        <span>Beberapa anggota keluarga boleh membeli wadai yang sama.</span>
                                    </label>

                                    <label class="ks-labelopsi">
                                        <input type="checkbox" id="ks_e">
                                        <span>Tidak ada wadai yang dibeli oleh dua orang berbeda.</span>
                                    </label>
                                </div>

                                <div class="ks-aksi">
                                    <button type="button" class="ks-btn ks-btn-primary" onclick="cekJawabanKorespondensi()">
                                        Periksa Jawaban
                                    </button>
                                    <button type="button" class="ks-btn ks-btn-reset" onclick="ulangKorespondensi()">
                                        Ulangi
                                    </button>
                                </div>

                                <div id="ks_hasil" class="ks-hasil" data-exercise="korespondensi"></div>
                            </div>

                            <div class="korespondensi-diagram-box">
                                <strong>Menyajikan dalam bentuk diagram panah</strong>

                                <p class="mt-2">
                                    Diagram panah menggambarkan hubungan dari
                                    <strong>anggota keluarga (himpunan A)</strong> ke
                                    <strong>wadai yang dibeli (himpunan B)</strong>.
                                </p>

                                <img src="/images/diagram-korespondensi-wadai.png"
                                     alt="Diagram Panah Korespondensi Satu-satu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="korespondensi-card-header">
                Berdasarkan masalah di atas, apakah kamu bisa memahami apa itu korespondensi satu-satu?
            </div>

            <div class="korespondensi-definition-box">
                <p>
                    <strong>Korespondensi satu-satu</strong> adalah fungsi khusus yang memasangkan
                    tepat satu anggota daerah asal dengan tepat satu anggota daerah kawan.
                </p>

                <p>
                    Dengan kata lain, setiap anggota dari daerah asal maupun daerah kawan
                    hanya mempunyai satu pasangan.
                </p>
            </div>
        </div>

    </div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="korespondensi-pagination">
        <nav aria-label="Pagination Materi Korespondensi Satu-satu">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item disabled" id="korespondensiPrevItem">
                    <button type="button"
                            class="page-link"
                            onclick="changeKorespondensiPage(currentKorespondensiPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="korespondensiPageItem1">
                    <button type="button" class="page-link" onclick="changeKorespondensiPage(1)">1</button>
                </li>

                <li class="page-item" id="korespondensiNextItem">
                    <button type="button"
                            class="page-link"
                            onclick="nextKorespondensiPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>
    /* =========================================================
       PAGINATION
    ========================================================= */

    let currentKorespondensiPage = 1;
    const totalKorespondensiPage = 1;

    function changeKorespondensiPage(page) {
        if (page < 1 || page > totalKorespondensiPage) {
            return;
        }

        if (page > currentKorespondensiPage) {
            var prevEl = document.getElementById('korespondensiPage' + currentKorespondensiPage);
            if (prevEl) {
                var exs = prevEl.querySelectorAll('[data-exercise]');
                for (var i = 0; i < exs.length; i++) {
                    if (exs[i].getAttribute('data-correct') !== 'true') {
                        ProgressManager.showAlert('Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!');
                        return;
                    }
                }
            }
        }

        currentKorespondensiPage = page;

        for (let i = 1; i <= totalKorespondensiPage; i++) {
            const pageElement = document.getElementById("korespondensiPage" + i);
            const pageItem = document.getElementById("korespondensiPageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("korespondensiPrevItem");

        if (prevItem) {
            prevItem.classList.toggle("disabled", page === 1);
        }

        const target = document.querySelector(".content-gap");

        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    function nextKorespondensiPage() {
        var curEl = document.getElementById('korespondensiPage' + currentKorespondensiPage);
        if (curEl) {
            var exs = curEl.querySelectorAll('[data-exercise]');
            for (var i = 0; i < exs.length; i++) {
                if (exs[i].getAttribute('data-correct') !== 'true') {
                    ProgressManager.showAlert('Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!');
                    return;
                }
            }
        }

        if (currentKorespondensiPage < totalKorespondensiPage) {
            changeKorespondensiPage(currentKorespondensiPage + 1);
        } else {
            ProgressManager.markSubPageDone('materi_4', 'pengertian');
            window.location.href = "/bab_1/lanjut_4";
        }
    }

    /* =========================================================
       AKTIVITAS KORESPONDENSI SATU-SATU
    ========================================================= */

    function cekJawabanKorespondensi(){
        let a = document.getElementById("ks_a").checked;
        let b = document.getElementById("ks_b").checked;
        let c = document.getElementById("ks_c").checked;
        let d = document.getElementById("ks_d").checked;
        let e = document.getElementById("ks_e").checked;

        let hasil = document.getElementById("ks_hasil");

        if(a && !b && c && !d && e){
            hasil.style.display = "block";
            hasil.className = "ks-hasil ks-benar";
            hasil.setAttribute('data-correct', 'true');
            hasil.innerHTML = `
                <strong>Jawaban Benar!</strong><br><br>
                Hubungan anggota keluarga dan wadai termasuk korespondensi satu-satu
                karena setiap anggota keluarga membeli tepat satu wadai, dan setiap
                jenis wadai hanya dibeli oleh satu orang.
            `;
        }else{
            hasil.style.display = "block";
            hasil.className = "ks-hasil ks-salah";
            hasil.innerHTML = `
                <strong>Jawaban Belum Tepat.</strong><br><br>

                Korespondensi satu-satu berarti setiap anggota di himpunan pertama
                harus memiliki tepat satu pasangan di himpunan kedua, dan setiap
                anggota di himpunan kedua juga hanya boleh dipasangkan dengan satu
                anggota dari himpunan pertama.<br><br>

                Jadi, pernyataan yang benar adalah:<br>
                <strong>✔ Setiap anggota keluarga berpasangan tepat dengan satu jenis wadai.</strong><br>
                Ini benar karena setiap orang hanya memiliki satu pasangan wadai.<br><br>

                <strong>✔ Tidak ada anggota keluarga yang membeli lebih dari satu wadai.</strong><br>
                Ini benar karena satu anggota keluarga tidak boleh memiliki dua pasangan.<br><br>

                <strong>✔ Tidak ada wadai yang dibeli oleh dua orang berbeda.</strong><br>
                Ini benar karena satu wadai hanya boleh dimiliki satu orang.<br><br>

                Pernyataan <strong>“satu orang boleh membeli semua jenis wadai”</strong>
                dan <strong>“beberapa anggota keluarga boleh membeli wadai yang sama”</strong>
                tidak sesuai dengan korespondensi satu-satu.
            `;
        }
    }

    function ulangKorespondensi(){
        document.querySelectorAll('#ks_a, #ks_b, #ks_c, #ks_d, #ks_e')
            .forEach(function(input){
                input.checked = false;
            });

        document.getElementById("ks_hasil").style.display = "none";
    }

    document.addEventListener("DOMContentLoaded", function () {
        changeKorespondensiPage(1);
    });
</script>

@endsection
