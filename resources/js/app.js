import "./bootstrap";

// =======================================================
// A. UTILITAS UMUM
// =======================================================

/**
 * Fungsi Debounce: Menunda eksekusi fungsi hingga jeda waktu tertentu
 * tanpa input baru. Penting untuk Search/Filter agar tidak terlalu sering memproses.
 * @param {Function} func - Fungsi yang akan dieksekusi.
 * @param {number} delay - Jeda waktu (ms).
 */
const debounce = (func, delay = 300) => {
    let timeoutId;
    return (...args) => {
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        timeoutId = setTimeout(() => {
            func.apply(this, args);
        }, delay);
    };
};


// =======================================================
// B. FUNGSI UTAMA WEBSITE (NAVIGASI & AKORDION)
// =======================================================
document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.getElementById("hamburger-menu");
    const mobileMenu = document.getElementById("mobile-menu");
    const accordions = document.querySelectorAll(".unicef-accordion");

    // 1. Mobile Menu / Hamburger Toggle
    if (hamburger && mobileMenu) {
        const toggleMobileMenu = () => {
            hamburger.classList.toggle("is-active");
            mobileMenu.classList.toggle("is-active");
            // Mengelola scroll body saat menu terbuka
            document.body.style.overflow = mobileMenu.classList.contains("is-active") ? "hidden" : "auto";
        };

        hamburger.addEventListener("click", toggleMobileMenu);

        // Tutup menu saat klik link di dalamnya
        mobileMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", toggleMobileMenu);
        });
    }

    // 2. Akordion di Halaman Kluster Hak Anak
    accordions.forEach((accordion) => {
        const button = accordion.querySelector(".unicef-accordion-button");
        if (!button) return;

        button.addEventListener("click", () => {
            const isActive = accordion.classList.contains("active");

            // Tutup semua akordion lain (Single Open)
            document.querySelectorAll(".unicef-accordion.active").forEach((item) => {
                if (item !== accordion) {
                    item.classList.remove("active");
                    item.querySelector(".unicef-accordion-button").setAttribute("aria-expanded", "false");
                }
            });

            // Buka/Tutup akordion yang diklik
            if (isActive) {
                accordion.classList.remove("active");
                button.setAttribute("aria-expanded", "false");
            } else {
                accordion.classList.add("active");
                button.setAttribute("aria-expanded", "true");
            }
        });
    });

    // 3. Fungsionalitas Admin (Placeholder)
    console.log("Main script loaded.");
});


// =======================================================
// C. FUNGSI CARI RPTRA (Filtering & Modal)
// =======================================================
document.addEventListener("DOMContentLoaded", () => {
    // Pastikan rptraData tersedia dari Blade/JSON
    const rptraData = window.rptraData || [];

    const rptraList = document.getElementById("rptraList");
    const searchInput = document.getElementById("searchRptra");
    const filterButtons = document.querySelectorAll(".filter-btn");
    const rptraModal = document.getElementById("rptraModal");
    const modalContent = rptraModal?.querySelector(".modal-content");
    const modalClose = rptraModal?.querySelector(".modal-close");

    if (!rptraList) return; // Keluar jika ini bukan halaman Cari RPTRA

    const wilayahMap = {
        jakpus: "Jakarta Pusat",
        jakut: "Jakarta Utara",
        jakbar: "Jakarta Barat",
        jaksel: "Jakarta Selatan",
        jaktim: "Jakarta Timur",
        "kepulauan-seribu": "Kepulauan Seribu",
    };

    /**
     * Menampilkan/Menyembunyikan Modal RPTRA.
     * @param {Object|null} rptra - Data RPTRA atau null untuk menutup.
     */
    const showRptraModal = (rptra) => {
        if (!rptraModal) return;

        if (rptra) {
            // Isi Konten
            rptraModal.querySelector("#modalRptraName").textContent = rptra.name;
            rptraModal.querySelector("#modalRptraAddress").textContent = rptra.address;
            rptraModal.querySelector("#modalRptraFacilities").textContent = rptra.fasilitas;
            rptraModal.querySelector("#modalRptraOperationalHours").textContent = rptra.jam;
            rptraModal.querySelector("#modalRptraContact").textContent = rptra.kontak;
            rptraModal.querySelector("#modalRptraImage").src = rptra.image;
            rptraModal.querySelector("#modalRptraImage").alt = `Foto RPTRA ${rptra.name}`;

            // Tampilkan Modal
            rptraModal.style.display = "flex";
            document.body.style.overflow = "hidden"; // Nonaktifkan scroll body
        } else {
            // Sembunyikan Modal
            rptraModal.style.display = "none";
            document.body.style.overflow = "auto";
        }
    };

    // Event Listener: Tutup Modal
    if (modalClose) {
        modalClose.addEventListener("click", () => showRptraModal(null));
    }
    // Tutup modal jika klik di luar modal-content
    if (rptraModal) {
        rptraModal.addEventListener('click', (e) => {
            // Cek apakah yang diklik adalah backdrop (bukan modal-content)
            if (e.target === rptraModal) {
                showRptraModal(null);
            }
        });
    }

    /**
     * Memfilter dan me-render ulang kartu RPTRA.
     */
    const renderRptras = (filter = "semua", query = "") => {
        rptraList.innerHTML = "";
        const lowerCaseQuery = query.toLowerCase().trim();

        const filteredData = rptraData.filter((rptra) => {
            const filterWilayah = wilayahMap[filter] || "";

            // 1. Filter Wilayah
            const matchesFilter =
                filter === "semua" ||
                (rptra.address && rptra.address.toLowerCase().includes(filterWilayah.toLowerCase()));

            // 2. Filter Pencarian (Cari di semua properti string)
            const matchesSearch = Object.values(rptra).some(
                (val) =>
                    typeof val === "string" &&
                    val.toLowerCase().includes(lowerCaseQuery)
            );

            return matchesFilter && matchesSearch;
        });

        if (filteredData.length === 0) {
            rptraList.innerHTML = `<p class="empty-state">😔 Tidak ada RPTRA yang ditemukan untuk kriteria ini.</p>`;
        } else {
            filteredData.forEach((rptra) => {
                const card = document.createElement("a");
                card.classList.add("rptra-card");
                card.href = "#";
                card.setAttribute('aria-label', `Lihat detail RPTRA ${rptra.name}`);
                card.innerHTML = `
                    <img src="${rptra.image}" alt="RPTRA ${rptra.name}" class="rptra-image" loading="lazy">
                    <div class="rptra-info">
                        <h3>${rptra.name}</h3>
                        <p class="rptra-location"><i class="fas fa-map-marker-alt"></i> ${rptra.address.split(',')[0]}</p>
                    </div>
                `;
                card.addEventListener("click", (e) => {
                    e.preventDefault();
                    showRptraModal(rptra);
                });
                rptraList.appendChild(card);
            });
        }
    };

    // Event Listener: Filter Buttons
    if (filterButtons.length > 0) {
        filterButtons.forEach((button) => {
            button.addEventListener("click", () => {
                filterButtons.forEach((btn) => btn.classList.remove("active"));
                button.classList.add("active");
                renderRptras(button.dataset.filter, searchInput?.value);
            });
        });
    }

    // Event Listener: Search Input (Menggunakan Debounce)
    if (searchInput) {
        const debouncedRender = debounce(() => {
            const activeFilter =
                document.querySelector(".filter-btn.active")?.dataset.filter || "semua";
            renderRptras(activeFilter, searchInput.value);
        }, 400); // Jeda 400ms

        searchInput.addEventListener("input", debouncedRender);
    }

    // Inisialisasi: Render pertama kali saat data ada
    if (rptraData.length > 0) {
        renderRptras();
    }
});