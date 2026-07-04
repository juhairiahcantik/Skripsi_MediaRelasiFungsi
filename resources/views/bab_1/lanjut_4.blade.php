@extends('layouts.main')

@section('container')

<style>

    /* =========================================================
       KORESPONDENSI SATU-SATU - LAYOUT SEPERTI RELASI
    ========================================================= */

    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: clip;
        font-family: 'Poppins', sans-serif;
    }

    .kores-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: clip;
    }

    .kores-page.active {
        display: block;
    }

    .kores-page > * {
        max-width: 100%;
        box-sizing: border-box;
    }

    .kores-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
        overflow: hidden;
    }

    .kores-page-title {
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

    .kores-body {
        background: #ffffff;
        color: #333;
        line-height: 1.8;
        box-sizing: border-box;
    }

    .label-box {
        display: inline-block;
        padding: 8px 16px;
        background: #FBF7FF;
        color: #4B2673;
        font-weight: 800;
        border-radius: 12px;
        border: 1px solid #E9D5FF;
        border-left: 5px solid #A855F7;
        margin: 18px 0 10px;
        font-size: 0.95rem;
        box-shadow: 0 4px 10px rgba(91, 44, 111, 0.04);
    }

    .purple-divider {
        margin: 25px 0;
        border: 0;
        border-top: 2px dashed #CFA7F3;
        opacity: 1;
    }

    .table-responsive {
        width: 100%;
    }

    .purple-table {
        margin-bottom: 0;
        background: #ffffff;
        border-color: #E9D5FF !important;
        overflow: hidden;
    }

    .purple-table thead {
        background: #F3E8FF;
        color: #4B2673;
    }

    .purple-table th,
    .purple-table td {
        border: 1px solid #E9D5FF !important;
        vertical-align: middle !important;
        padding: 12px !important;
    }

    .purple-table tbody tr:nth-child(even) {
        background: #FBF7FF;
    }

    /* =========================================================
       PAGINATION
    ========================================================= */

    .kores-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .kores-pagination .pagination {
        gap: 5px;
    }

    .kores-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 700;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .kores-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .kores-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .kores-pagination .page-item.disabled .page-link {
        color: #aaaaaa;
        background-color: #f6f6f6;
        border-color: #eeeeee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }

        .kores-card {
            padding: 16px;
            border-radius: 20px;
        }

        .kores-page-title {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .kores-pagination .page-link {
            font-size: 0.82rem;
            padding: 7px 9px;
        }
    }

</style>

<div class="content-gap" data-materi="materi_4" data-sub-page="penyajian" data-total-pages="4">

    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="kores-page active" id="koresPage1">
        <div class="kores-card">
            <div class="kores-page-title">
                Contoh 4.1
            </div>

            <div class="kores-body">
<p style="font-size:1rem; line-height:1.8;">
                Seperti yang ada di permasalahan sebelumnya,
                diperoleh data berikut.
            </p>
<div class="table-responsive my-3">
<table class="table table-bordered text-center align-middle purple-table" style="max-width:450px;">
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
<p style="font-size:1rem; line-height:1.8;">
                Hubungan antara anggota keluarga dan wadai yang dibeli
                merupakan <strong>korespondensi satu-satu</strong>, karena:
            </p>
<ul style="font-size:1rem; line-height:1.8;">
<li>Setiap anggota keluarga membeli satu jenis wadai yang berbeda.</li>
<li>Setiap jenis wadai hanya dibeli oleh satu orang.</li>
</ul>
<p style="font-size:1rem; line-height:1.8; margin-top:15px;">
<strong>Banyak Korespondensi Satu-satu</strong>
</p>
<p style="font-size:1rem; line-height:1.8;">
                Banyaknya cara berbeda untuk memasangkan anggota keluarga
                dengan wadai khas dapat dihitung menggunakan faktorial (<em>n!</em>).
            </p>
<p style="font-size:1rem; font-weight:600;">
                Banyak korespondensi satu-satu = n!
            </p>
<p style="font-size:1rem;">
                4! = 4 × 3 × 2 × 1 = 24
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Artinya, terdapat <strong>24 cara berbeda</strong> untuk
                memasangkan anggota keluarga dengan jenis wadai yang dibeli.
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Namun, hanya satu susunan yang benar-benar terjadi sesuai
                selera masing-masing anggota keluarga, seperti pada tabel di atas.
            </p>
            </div>
        </div>
    </div>
    <!-- ====================== HALAMAN 2 ====================== -->
    <div class="kores-page" id="koresPage2">
        <div class="kores-card">
            <div class="kores-page-title">
                Ciri-Ciri Korespondensi Satu-Satu
            </div>

            <div class="kores-body">
<ol style="font-size:1rem; line-height:1.8; margin-left:15px;">
<li>Setiap anggota himpunan A berpasangan tepat dengan satu anggota himpunan B.</li>
<li>Setiap anggota himpunan B berpasangan tepat dengan satu anggota himpunan A.</li>
<li>Banyak anggota himpunan A dan B harus sama (<strong>n(A) = n(B)</strong>).</li>
<li>Tidak ada anggota yang berpasangan ganda atau tidak memiliki pasangan.</li>
</ol>
            </div>
        </div>
    </div>
    <!-- ====================== HALAMAN 3 ====================== -->
    <div class="kores-page" id="koresPage3">
        <div class="kores-card">
            <div class="kores-page-title">
                Contoh 4.2
            </div>

            <div class="kores-body">
<div class="label-box">Diketahui</div>
<p style="font-size:1rem; line-height:1.8;">
                Himpunan K = {Ibu Rahmah, Bapak Zain, Nisa, Rafi, Umi, Ahmad}
                <br/>
                Himpunan L = {Bingka, Ipau, Wadai Cincin, Putri Selat, Amparan Tatak, Cucur}
            </p>
<div class="label-box">Ditanya</div>
<p style="font-size:1rem; line-height:1.8;">
                Berapakah banyaknya korespondensi satu-satu yang mungkin
                dari himpunan K ke himpunan L?
            </p>
<hr class="purple-divider"/>
<div class="label-box">Alternatif Penyelesaian</div>
<p style="font-size:1rem; line-height:1.8;">
                Banyak anggota masing-masing himpunan adalah:
            </p>
<p style="font-size:1rem;">
                n(K) = 6 dan n(L) = 6
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Karena banyak anggota kedua himpunan sama, maka
                banyaknya korespondensi satu-satu dapat dihitung
                menggunakan faktorial:
            </p>
<p style="font-size:1rem; font-weight:600;">
                n(K)! = n(L)! = 6! = 6 × 5 × 4 × 3 × 2 × 1 = 720
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Jadi, terdapat <strong>720 cara berbeda</strong> untuk
                memasangkan setiap anggota keluarga dengan jenis wadai
                yang mungkin mereka beli.
            </p>
            </div>
        </div>
    </div>
    <!-- ====================== HALAMAN 4 ====================== -->
    <div class="kores-page" id="koresPage4">
        <div class="kores-card">
            <div class="kores-page-title">
                Contoh 4.3
            </div>

            <div class="kores-body">
<div class="label-box">Diketahui</div>
<p style="font-size:1rem; line-height:1.8;">
                Himpunan P = {Rawa, Sungai, Danau, Gambut, Pesisir}
                <br/>
                Himpunan Q = {Purun, Nipah, Teratai, Jelutung, Bakau}
            </p>
<div class="label-box">Ditanya</div>
<p style="font-size:1rem; line-height:1.8;">
                Berapakah banyaknya korespondensi satu-satu yang mungkin
                dari himpunan P ke himpunan Q?
            </p>
<hr class="purple-divider"/>
<div class="label-box">Alternatif Penyelesaian</div>
<p style="font-size:1rem; line-height:1.8;">
                Banyak anggota masing-masing himpunan adalah:
            </p>
<p style="font-size:1rem;">
                n(P) = 5 dan n(Q) = 5
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Karena banyak anggota kedua himpunan sama, maka
                banyaknya korespondensi satu-satu dapat dihitung
                menggunakan faktorial:
            </p>
<p style="font-size:1rem; font-weight:600;">
                n(P)! = n(Q)! = 5! = 5 × 4 × 3 × 2 × 1 = 120
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Jadi, terdapat <strong>120 cara berbeda</strong> untuk
                memasangkan jenis lahan basah dengan tumbuhan khasnya
                jika seluruh pasangan memungkinkan untuk diubah-ubah.
            </p>
            </div>
        </div>
    </div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="kores-pagination">
        <nav aria-label="Pagination Materi Korespondensi Satu-satu">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item disabled" id="koresPrevItem">
                    <button type="button"
                            class="page-link"
                            onclick="changeKoresPage(currentKoresPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="koresPageItem1">
                    <button type="button" class="page-link" onclick="changeKoresPage(1)">1</button>
                </li>
                <li class="page-item" id="koresPageItem2">
                    <button type="button" class="page-link" onclick="changeKoresPage(2)">2</button>
                </li>
                <li class="page-item" id="koresPageItem3">
                    <button type="button" class="page-link" onclick="changeKoresPage(3)">3</button>
                </li>
                <li class="page-item" id="koresPageItem4">
                    <button type="button" class="page-link" onclick="changeKoresPage(4)">4</button>
                </li>

                <li class="page-item" id="koresNextItem">
                    <button type="button"
                            class="page-link"
                            onclick="nextKoresPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>

    /* =========================================================
       PAGINATION KORESPONDENSI SATU-SATU
    ========================================================= */

    let currentKoresPage = 1;
    const totalKoresPage = 4;

    function changeKoresPage(page) {
        if (page < 1 || page > totalKoresPage) {
            return;
        }

        currentKoresPage = page;

        for (let i = 1; i <= totalKoresPage; i++) {
            const pageElement = document.getElementById("koresPage" + i);
            const pageItem = document.getElementById("koresPageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("koresPrevItem");

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

    function nextKoresPage() {
        if (currentKoresPage < totalKoresPage) {
            ProgressManager.markPageDone('materi_4', 'penyajian', currentKoresPage);
            changeKoresPage(currentKoresPage + 1);
        } else {
            ProgressManager.markSubPageDone('materi_4', 'penyajian');
            window.location.href = "/bab_1/latihan4";
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        changeKoresPage(1);
    });

</script>

@endsection
