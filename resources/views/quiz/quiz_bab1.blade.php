<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --ungu: #7f3ab7;
            --ungu-gelap: #5e2b97;
            --ungu-muda: #f4ecfb;
        }

        body {
            background: #f8f9fa;
        }

        .card-soal {
            border: 2px solid var(--ungu);
            border-radius: 14px;
            font-size: 1.1rem;
        }

        .card-soal .card-header {
            background: linear-gradient(90deg, var(--ungu), var(--ungu-gelap));
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            padding: 16px 20px;
        }

        .opsi {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 18px 24px;
            margin-bottom: 16px;
            border-radius: 14px;
            border: 1.5px solid #e0d3ef;
            background: white;
            cursor: pointer;
        }

        .opsi:hover {
            background: var(--ungu-muda);
        }

        .opsi input {
            margin: 0;
            transform: scale(1.25);
        }

        .opsi span {
            font-size: 1.1rem;
            width: 100%;
        }

        .btn-nav {
            background: var(--ungu);
            color: white;
            padding: 12px 26px;
            font-size: 1.05rem;
            border-radius: 10px;
        }

        .btn-nav:hover {
            background: var(--ungu-gelap);
            color: white;
        }

        .panel-nomor {
            border: 2px solid var(--ungu);
            border-radius: 16px;
        }

        .panel-nomor .card-header {
            background: var(--ungu);
            color: white;
            font-size: 1.15rem;
            text-align: center;
            padding: 14px;
        }

        .nomor-soal {
            width: 56px;
            height: 56px;
            margin: 8px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 1.1rem;
            border: 2px solid var(--ungu);
        }

        .soal-belum {
            background: #f8d7da;
            border-color: #dc3545;
            color: #dc3545;
        }

        .soal-sudah {
            background: #d1e7dd;
            border-color: #198754;
            color: #198754;
        }

        .soal-aktif {
            background: #0d6efd !important;
            color: white !important;
        }

        .soal-ragu {
            background: #fff3cd;
            border-color: #ffc107;
            color: #856404;
        }

        /* Checkbox ragu-ragu */
        .ragu-container {
            margin-top: 20px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.05rem;
            color: #666;
            cursor: pointer;
        }

        .ragu-container input[type="checkbox"] {
            transform: scale(1.3);
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row g-4">

            <!-- ================= SOAL ================= -->
            <div class="col-lg-8">

                @foreach($soalKuis->take(10) as $index => $soal)
                    <div class="card card-soal soal-blok mb-4" style="display:none;">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <span>Soal {{ $index + 1 }} / 10</span>
                                <span class="ms-3 badge bg-light text-dark">KKM: {{ $kkm ? $kkm->nilai : 'Tidak ada' }}</span>
                            </div>
                            <span class="text-warning fw-bold">⏱ <span class="timer-global">15:00</span></span>
                        </div>

                        <div class="card-body">
                            <p class="fw-semibold mb-4">{{ $soal->pertanyaan }}</p>

                            @foreach(['a', 'b', 'c', 'd'] as $opsi)
                                <label class="opsi">
                                    <input type="radio" name="soal{{ $index + 1 }}" value="{{ strtoupper($opsi) }}"
                                        onclick="updateStatusSoal({{ $index + 1 }})">
                                    <span>{{ strtoupper($opsi) }}. {{ $soal->{'pilihan_' . $opsi} }}</span>
                                </label>
                            @endforeach

                            <label class="ragu-container">
                                <input type="checkbox" id="ragu{{ $index + 1 }}" onclick="toggleRagu({{ $index + 1 }})">
                                Ragu-ragu
                            </label>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-between">
                    <button class="btn btn-nav" id="prevBtn">⬅ Sebelumnya</button>
                    <button class="btn btn-nav" id="nextBtn">Selanjutnya ➡</button>
                </div>

            </div>

            <!-- ================= PANEL NOMOR ================= -->
            <div class="col-lg-4">
                <div class="card panel-nomor">
                    <div class="card-header">Nomor Soal</div>
                    <div class="card-body text-center">

                        @for($i = 1; $i <= 10; $i++)
                            <button type="button" id="btn-soal-{{ $i }}" class="nomor-soal soal-belum"
                                onclick="lompatSoal({{ $i - 1 }})">{{ $i }}</button>
                        @endfor

                        <hr>

                        <div class="text-start px-3 small">
                            <div class="d-flex align-items-center mb-2">
                                <span class="nomor-soal soal-sudah me-2" style="width:20px;height:20px;"></span>
                                <span>Sudah dijawab</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span class="nomor-soal soal-ragu me-2" style="width:20px;height:20px;"></span>
                                <span>Ragu-ragu</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span class="nomor-soal soal-belum me-2" style="width:20px;height:20px;"></span>
                                <span>Belum dijawab</span>
                            </div>
                        </div>

                        <hr>
                        <button class="btn btn-success w-100 py-2 fw-bold" id="finishSidebarBtn" onclick="validasiSelesai()">✅ Selesai Kuis</button>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ================= FORM SUBMIT ================= -->
    <form action="{{ route('simpan-nilai') }}" method="POST" id="form-submit" style="display:none;">
        @csrf
        <input type="text" name="nilai" id="inp-nilai">
        <input type="text" name="total_soal" id="inp-soal">
        <input type="text" name="type" value="Kuis 1">
        <input type="hidden" name="jawaban" id="inp-jawaban">
    </form>

    <script>
        let indexAktif = 0;
        const soal = document.querySelectorAll('.soal-blok');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const finishBtn = document.getElementById('finishBtn');

        /* ============ TAMPIL SOAL ============ */
        function tampilkanSoal(i) {
            soal.forEach((el, idx) => el.style.display = idx === i ? 'block' : 'none');
            document.querySelectorAll('.nomor-soal').forEach(btn => btn.classList.remove('soal-aktif'));
            document.getElementById(`btn-soal-${i + 1}`).classList.add('soal-aktif');
            indexAktif = i;
            prevBtn.style.display = i === 0 ? 'none' : 'inline-block';
            nextBtn.style.display = i === soal.length - 1 ? 'none' : 'inline-block';
        }
        function lompatSoal(i) { tampilkanSoal(i); }
        prevBtn.onclick = () => tampilkanSoal(indexAktif - 1);
        nextBtn.onclick = () => tampilkanSoal(indexAktif + 1);

        /* ============ STATUS NOMOR ============ */
        function updateStatusSoal(no) {
            const btn = document.getElementById(`btn-soal-${no}`);
            const cekRagu = document.getElementById(`ragu${no}`).checked;
            
            if(!cekRagu){
                btn.classList.remove('soal-belum', 'soal-ragu');
                btn.classList.add('soal-sudah');
            }
        }

        function toggleRagu(no) {
            const btn = document.getElementById(`btn-soal-${no}`);
            const isRagu = document.getElementById(`ragu${no}`).checked;
            const isDijawab = document.querySelector(`input[name="soal${no}"]:checked`);

            if(isRagu) {
                btn.classList.remove('soal-belum', 'soal-sudah');
                btn.classList.add('soal-ragu');
            } else {
                btn.classList.remove('soal-ragu');
                if(isDijawab) {
                    btn.classList.add('soal-sudah');
                } else {
                    btn.classList.add('soal-belum');
                }
            }
        }

        /* ============ TIMER GLOBAL ============ */
        let waktu = 15 * 60;
        const timerEls = document.querySelectorAll('.timer-global');

        function startTimer() {
            const interval = setInterval(() => {
                let m = Math.floor(waktu / 60);
                let d = waktu % 60;
                const teks = `${m < 10 ? '0' + m : m}:${d < 10 ? '0' + d : d}`;
                timerEls.forEach(el => el.innerText = teks);
                waktu--;
                if (waktu < 0) {
                    clearInterval(interval);
                    alert("⏰ Waktu habis!");
                    // Kumpulkan semua checkbox ragu lalu uncheck agar bisa submit otomatis
                    document.querySelectorAll('input[type="checkbox"][id^="ragu"]').forEach(cb => cb.checked = false);
                    hitungNilai();
                }
            }, 1000);
        }

        /* ============ VALIDASI SELESAI ============ */
        function validasiSelesai() {
            const raguList = document.querySelectorAll('button.soal-ragu');
            const belumList = document.querySelectorAll('button.soal-belum');

            if (raguList.length > 0 || belumList.length > 0) {
                alert("⚠️ Masih ada soal yang Ragu-ragu atau Belum Dijawab!\nMohon periksa kembali nomor soal Anda di panel kanan.");
                return;
            }
            
            // Tampilkan Modal Konfirmasi Bootstrap
            var myModal = new bootstrap.Modal(document.getElementById('modalKonfirmasiSubmit'));
            myModal.show();
        }

        /* ============ HITUNG NILAI ============ */
        function hitungNilai() {
            let benar = 0, total = 0;
            let detail = [];

            @foreach($soalKuis->take(10) as $index => $soal)
                {
                    const q{{ $index + 1 }} = document.querySelector('input[name="soal{{ $index + 1 }}"]:checked');
                    let userAns = q{{ $index + 1 }} ? q{{ $index + 1 }}.value : "Tidak dijawab";
                    let isBenar = userAns == "{{ $soal->jawaban_benar }}";

                    if (isBenar) benar++;
                    total++;

                    detail.push({
                        no: {{ $index + 1 }},
                        soal: "{!! addslashes($soal->soal) !!}",
                        pilihan: {
                            a: "{!! addslashes($soal->a) !!}",
                            b: "{!! addslashes($soal->b) !!}",
                            c: "{!! addslashes($soal->c) !!}",
                            d: "{!! addslashes($soal->d) !!}"
                        },
                        jawaban_siswa: userAns,
                        jawaban_benar: "{{ $soal->jawaban_benar }}",
                        is_benar: isBenar
                    });
                }
            @endforeach

            document.getElementById('inp-nilai').value = benar;
            document.getElementById('inp-soal').value = total;
            document.getElementById('inp-jawaban').value = JSON.stringify(detail);
            document.getElementById('form-submit').submit();
        }

        tampilkanSoal(0);
        startTimer();
    </script>

    <!-- ================= MODAL KONFIRMASI ================= -->
    <div class="modal fade" id="modalKonfirmasiSubmit" tabindex="-1" aria-labelledby="modalKonfirmasiLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 16px; border: 2px solid var(--ungu);">
          <div class="modal-header" style="background: var(--ungu); color: white; border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <h5 class="modal-title fw-bold" id="modalKonfirmasiLabel">Konfirmasi Penyerahan Kuis</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center py-4">
            <h5 class="mb-3">Selesai Mengerjakan Kuis?</h5>
            <p class="text-muted mb-0">Apakah Anda yakin dengan seluruh jawaban Anda? Hasil yang telah diserahkan tidak dapat diubah kembali.</p>
          </div>
          <div class="modal-footer justify-content-center border-0 pb-4">
            <button type="button" class="btn btn-secondary px-4 fw-bold" data-bs-dismiss="modal" style="border-radius: 10px;">Batal</button>
            <button type="button" class="btn btn-success px-4 fw-bold" onclick="hitungNilai()" style="border-radius: 10px;">Ya, Selesai</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>