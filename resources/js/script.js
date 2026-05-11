const toggler = document.querySelector(".btn");
const sidebar = document.querySelector("#sidebar");

// CEK STATUS SIDEBAR SAAT HALAMAN DIBUKA
if (localStorage.getItem("sidebar-collapsed") === "true") {
    sidebar.classList.add("collapsed");
}

// SAAT TOMBOL TOGGLE DIKLIK
if (toggler) {
    toggler.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");

        // SIMPAN STATUS SIDEBAR
        localStorage.setItem(
            "sidebar-collapsed",
            sidebar.classList.contains("collapsed")
        );
    });
}

document.addEventListener("DOMContentLoaded", function () {

    // ==============================
    // AMBIL SEMUA TOGGLE DROPDOWN
    // ==============================
    const menuToggles = document.querySelectorAll(".menu-toggle");

    // ==============================
    // BUKA DROPDOWN TERAKHIR
    // ==============================
    const activeMenu = localStorage.getItem("activeMenu");
    if (activeMenu) {
        const target = document.querySelector(activeMenu);
        if (target) {
            target.classList.add("show");
        }
    }

    // ==============================
    // SIMPAN DROPDOWN SAAT DIKLIK
    // ==============================
    menuToggles.forEach(toggle => {
        toggle.addEventListener("click", function () {
            const targetId = this.getAttribute("data-bs-target");

            // Jika dropdown sedang dibuka → simpan
            if (!document.querySelector(targetId).classList.contains("show")) {
                localStorage.setItem("activeMenu", targetId);
            } else {
                // Jika ditutup → hapus
                localStorage.removeItem("activeMenu");
            }
        });
    });

});
