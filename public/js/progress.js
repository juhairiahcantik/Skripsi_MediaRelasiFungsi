var ProgressManager = {
    STORAGE_KEY: "skripsi_progress",

    MATERI: {
        materi_1: {
            name: "Himpunan",
            subOrder: ["pengertian", "penyajian", "latihan", "kuis"],
        },
        materi_2: {
            name: "Relasi",
            subOrder: ["pengertian", "penyajian", "latihan", "kuis"],
        },
        materi_3: {
            name: "Fungsi",
            subOrder: ["pengertian", "penyajian", "latihan", "kuis"],
        },
        materi_4: {
            name: "Korespondensi",
            subOrder: ["pengertian", "penyajian", "latihan", "kuis"],
        },
        evaluasi: { name: "Evaluasi", subOrder: ["evaluasi"] },
    },

    ROUTES: {
        materi_1: {
            pengertian: "/bab_1/bab_1",
            penyajian: "/bab_1/lanjut_1",
            latihan: "/bab_1/latihan1",
            kuis: "/petunjuk/petunjuk_bab1",
        },
        materi_2: {
            pengertian: "/bab_1/bab_2",
            penyajian: "/bab_1/lanjut_2",
            latihan: "/bab_1/latihan2",
            kuis: "/petunjuk/petunjuk_bab2",
        },
        materi_3: {
            pengertian: "/bab_1/bab_3",
            penyajian: "/bab_1/lanjut_3_1",
            latihan: "/bab_1/latihan3",
            kuis: "/petunjuk/petunjuk_bab3",
        },
        materi_4: {
            pengertian: "/bab_1/bab_4",
            penyajian: "/bab_1/lanjut_4",
            latihan: "/bab_1/latihan4",
            kuis: "/petunjuk/petunjuk_bab4",
        },
        evaluasi: {
            evaluasi: "/petunjuk/petunjuk_evaluasi",
        },
    },

    _defaultProgress: function () {
        var p = {};
        for (var m in this.MATERI) {
            p[m] = { sub: {}, pages: {} };
            var order = this.MATERI[m].subOrder;
            for (var i = 0; i < order.length; i++) {
                p[m].sub[order[i]] = false;
            }
            if (m !== "evaluasi") {
                p[m].pages = { pengertian: 1, latihan: 1 };
            }
        }
        return p;
    },

    _getStore: function () {
        var raw = localStorage.getItem(this.STORAGE_KEY);
        if (!raw) return null;
        try {
            return JSON.parse(raw);
        } catch (e) {
            return null;
        }
    },

    _setStore: function (data) {
        localStorage.setItem(this.STORAGE_KEY, JSON.stringify(data));
    },

    init: function () {
        var data = this._getStore();
        if (!data) {
            data = this._defaultProgress();
            this._setStore(data);
        }
        for (var m in this.MATERI) {
            if (!data[m]) {
                data[m] = this._defaultProgress()[m];
            }
            var order = this.MATERI[m].subOrder;
            if (!data[m].sub) data[m].sub = {};
            for (var i = 0; i < order.length; i++) {
                if (data[m].sub[order[i]] === undefined)
                    data[m].sub[order[i]] = false;
            }
            if (!data[m].pages) data[m].pages = {};
            if (m !== "evaluasi") {
                if (data[m].pages["pengertian"] === undefined)
                    data[m].pages["pengertian"] = 1;
                if (data[m].pages["latihan"] === undefined)
                    data[m].pages["latihan"] = 1;
            }
        }
        this._setStore(data);
    },

    getProgress: function () {
        this.init();
        return this._getStore();
    },

    isSubPageUnlocked: function (materiId, subPage) {
        this.init();
        var data = this._getStore();
        if (!data[materiId]) return false;
        var order = this.MATERI[materiId].subOrder;
        var idx = order.indexOf(subPage);
        if (idx === 0) return true;
        var prevSub = order[idx - 1];
        return data[materiId].sub[prevSub] === true;
    },

    getCurrentPage: function (materiId, subPage) {
        this.init();
        var data = this._getStore();
        if (!data[materiId] || !data[materiId].pages) return 1;
        return data[materiId].pages[subPage] || 1;
    },

    markPageDone: function (materiId, subPage, pageNum) {
        this.init();
        var data = this._getStore();
        if (!data[materiId]) return;
        if (data[materiId].pages[subPage] === undefined)
            data[materiId].pages[subPage] = 1;
        if (pageNum > data[materiId].pages[subPage]) {
            data[materiId].pages[subPage] = pageNum;
        }
        this._setStore(data);
    },

    markSubPageDone: function (materiId, subPage) {
        this.init();
        var data = this._getStore();
        if (!data[materiId]) return;
        data[materiId].sub[subPage] = true;
        if (subPage === "pengertian" || subPage === "latihan") {
            data[materiId].pages[subPage] = 999;
        }
        this._setStore(data);
    },

    isMateriCompleted: function (materiId) {
        this.init();
        var data = this._getStore();
        if (!data[materiId]) return false;
        var order = this.MATERI[materiId].subOrder;
        for (var i = 0; i < order.length; i++) {
            if (!data[materiId].sub[order[i]]) return false;
        }
        return true;
    },

    getNextSubPage: function (materiId, currentSub) {
        var order = this.MATERI[materiId].subOrder;
        var idx = order.indexOf(currentSub);
        if (idx === -1 || idx >= order.length - 1) return null;
        return order[idx + 1];
    },

    redirectToNext: function (materiId, currentSub) {
        var nextSub = this.getNextSubPage(materiId, currentSub);
        if (
            nextSub &&
            this.ROUTES[materiId] &&
            this.ROUTES[materiId][nextSub]
        ) {
            window.location.href = this.ROUTES[materiId][nextSub];
        }
    },

    enforcePageLock: function () {
        var el = document.querySelector("[data-materi][data-sub-page]");
        if (!el) return;
        var materiId = el.getAttribute("data-materi");
        var subPage = el.getAttribute("data-sub-page");

        // Check server-side materi-level lock
        var lockEl = document.getElementById("materi-lock-data");
        var materiUnlocked = {};
        if (lockEl) {
            try {
                materiUnlocked = JSON.parse(lockEl.getAttribute("data-locks"));
            } catch (e) {}
        }
        var isMateriUnlocked = materiUnlocked[materiId] === true;

       if (!this.isSubPageUnlocked(materiId, subPage)) {
            var overlay = document.getElementById("lock-overlay");
            if (!overlay) {
                overlay = document.createElement("div");
                overlay.id = "lock-overlay";
                overlay.style.cssText =
                    "position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(30,30,30,0.85);z-index:99999;display:flex;flex-direction:column;align-items:center;justify-content:center;font-family:sans-serif;";

                var backUrl = "/bab_1/peta_konsep";
                if (isMateriUnlocked && !this.isSubPageUnlocked(materiId, subPage)) {
                    backUrl = (this.ROUTES[materiId] &&
                        this.ROUTES[materiId][this.MATERI[materiId].subOrder[0]]) ||
                        "/dashboard";
                }

                overlay.innerHTML =
                    '<div style="background:#fff;border-radius:24px;padding:48px 40px;max-width:460px;text-align:center;box-shadow:0 20px 60px rgba(0,0,0,0.3);">' +
                    '<div style="font-size:72px;margin-bottom:16px;">🔒</div>' +
                    '<h2 style="margin:0 0 8px;color:#4B2673;">Halaman Terkunci</h2>' +
                    '<p style="color:#666;font-size:16px;line-height:1.7;margin:0 0 24px;">Selesaikan halaman sebelumnya terlebih dahulu untuk membuka halaman ini.</p>' +
                    '<a href="' + backUrl +
                    '" style="display:inline-block;padding:12px 28px;background:linear-gradient(135deg,#8E44AD,#B57EDC);color:#fff;text-decoration:none;border-radius:14px;font-weight:700;font-size:16px;">Kembali ke Halaman Awal</a>' +
                    "</div>";
                document.body.appendChild(overlay);
            }
            document.body.style.overflow = "hidden";
        }
    },

    updateSidebar: function (materiUnlocked) {
        if (typeof materiUnlocked === "undefined") {
            var el = document.getElementById("materi-lock-data");
            if (el) {
                try {
                    materiUnlocked = JSON.parse(el.getAttribute("data-locks"));
                } catch (e) {
                    return;
                }
            } else {
                return;
            }
        }
        var data = this._getStore();
        for (var materiId in this.MATERI) {
            if (materiId === "evaluasi") continue;
            var submenu = document.getElementById(
                "sub" + materiId.replace("materi_", ""),
            );
            var isUnlocked = materiUnlocked[materiId] === true;

            if (!submenu) continue;

            var subLinks = submenu.querySelectorAll("[data-sidebar-sub]");
            for (var j = 0; j < subLinks.length; j++) {
                var sl = subLinks[j];
                var subId = sl.getAttribute("data-sidebar-sub");
                var done =
                    data &&
                    data[materiId] &&
                    data[materiId].sub &&
                    data[materiId].sub[subId] === true;
                var pageUnlocked = isUnlocked;
                if (subId && isUnlocked) {
                    pageUnlocked = this.isSubPageUnlocked(materiId, subId);
                }
                var label = sl.getAttribute("data-sidebar-label");
                if (!label)
                    label = sl.textContent.replace(/^[✅➡🔒]\s*/, "").trim();
                if (done) {
                    sl.innerHTML = "✅ " + label;
                    sl.style.color = "#16A34A";
                    sl.style.pointerEvents = "auto";
                    sl.style.cursor = "pointer";
                } else if (pageUnlocked) {
                    sl.innerHTML = "➡ " + label;
                    sl.style.color = "";
                    sl.style.pointerEvents = "auto";
                    sl.style.cursor = "pointer";
                } else {
                    sl.innerHTML = "🔒 " + label;
                    sl.style.color = "#ccc";
                    sl.style.pointerEvents = "none";
                    sl.style.cursor = "default";
                }
            }
        }

        // Handle evaluasi link (flat link, not a dropdown)
        var evalLink = document.querySelector(
            '[data-sidebar-materi="evaluasi"] [data-sidebar-sub="evaluasi"]',
        );
        if (evalLink) {
            var evalUnlocked =
                materiUnlocked && materiUnlocked["evaluasi"] === true;
            var evalDone =
                data &&
                data["evaluasi"] &&
                data["evaluasi"].sub &&
                data["evaluasi"].sub["evaluasi"] === true;
            var evalLabel =
                evalLink.getAttribute("data-sidebar-label") || "Evaluasi";
            if (evalDone) {
                evalLink.innerHTML = "✅ " + evalLabel;
                evalLink.style.color = "#16A34A";
                evalLink.style.pointerEvents = "auto";
                evalLink.style.cursor = "pointer";
            } else if (evalUnlocked) {
                evalLink.innerHTML = "➡ " + evalLabel;
                evalLink.style.color = "";
                evalLink.style.pointerEvents = "auto";
                evalLink.style.cursor = "pointer";
            } else {
                evalLink.innerHTML = "🔒 " + evalLabel;
                evalLink.style.color = "#ccc";
                evalLink.style.pointerEvents = "none";
                evalLink.style.cursor = "default";
            }
        }
    },

    showAlert: function (message) {
        var existing = document.getElementById("pg-alert-modal");
        if (existing) existing.remove();

        var overlay = document.createElement("div");
        overlay.id = "pg-alert-modal";
        overlay.style.cssText =
            "position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(20,10,30,0.6);z-index:99999;display:flex;align-items:center;justify-content:center;font-family:sans-serif;opacity:0;transition:opacity 0.25s;";

        var box = document.createElement("div");
        box.style.cssText =
            "background:#fff;border-radius:20px;padding:40px 36px 28px;max-width:420px;width:90%;text-align:center;box-shadow:0 20px 60px rgba(0,0,0,0.3);transform:scale(0.85);transition:transform 0.25s;";

        box.innerHTML =
            '<div style="font-size:64px;line-height:1;margin-bottom:8px;">⚠️</div>' +
            '<p style="color:#555;font-size:16px;line-height:1.7;margin:12px 0 28px;" id="pg-alert-msg"></p>' +
            '<button id="pg-alert-btn" style="padding:12px 36px;background:linear-gradient(135deg,#8E44AD,#B57EDC);color:#fff;border:none;border-radius:14px;font-weight:700;font-size:15px;cursor:pointer;transition:opacity 0.2s;" onmouseover="this.style.opacity=\'0.85\'" onmouseout="this.style.opacity=\'1\'">OK, Saya Mengerti</button>';

        overlay.appendChild(box);
        document.body.appendChild(overlay);

        document.getElementById("pg-alert-msg").textContent = message;

        requestAnimationFrame(function () {
            overlay.style.opacity = "1";
            box.style.transform = "scale(1)";
        });

        document.getElementById("pg-alert-btn").onclick = function () {
            overlay.remove();
        };
        overlay.addEventListener("click", function (e) {
            if (e.target === overlay) overlay.remove();
        });
    },
};

(function () {
    ProgressManager.init();
    if (document.querySelector("[data-materi][data-sub-page]")) {
        ProgressManager.enforcePageLock();
    }
    if (document.querySelector("[data-sidebar-materi]")) {
        ProgressManager.updateSidebar();
    }
    var pageContainer = document.querySelector("[data-materi][data-sub-page]");
    if (pageContainer) {
        var materiId = pageContainer.getAttribute("data-materi");
        var subPage = pageContainer.getAttribute("data-sub-page");
        if (materiId && subPage) {
            ProgressManager.markPageDone(materiId, subPage, 1);
        }
    }
})();
