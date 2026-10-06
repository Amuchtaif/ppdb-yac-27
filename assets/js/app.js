/**
 * PPDB Assunnah Cirebon 2027/2028 - Master JavaScript
 * Handles Accordions, Tabs, Lightbox, Navigation, & Mobile Drawer
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Mobile Menu Drawer Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileDrawer = document.getElementById('mobile-drawer');
    const mobileBackdrop = document.getElementById('mobile-backdrop');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    function toggleMobileMenu(open) {
        if (!mobileDrawer) return;
        if (open) {
            mobileDrawer.classList.remove('translate-x-full');
            if (mobileBackdrop) mobileBackdrop.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            mobileDrawer.classList.add('translate-x-full');
            if (mobileBackdrop) mobileBackdrop.classList.add('hidden');
            document.body.style.overflow = '';
        }
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => toggleMobileMenu(true));
    }
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', () => toggleMobileMenu(false));
    }
    if (mobileBackdrop) {
        mobileBackdrop.addEventListener('click', () => toggleMobileMenu(false));
    }
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => toggleMobileMenu(false));
    });


    // 2. Sticky Navbar Background & Shadow on Scroll
    const mainNavbar = document.getElementById('main-navbar');
    function updateNavbarOnScroll() {
        if (!mainNavbar) return;
        if (window.scrollY > 20) {
            mainNavbar.classList.add('bg-white/80', 'backdrop-blur-md', 'border-slate-100', 'shadow-xs');
            mainNavbar.classList.remove('bg-transparent', 'border-transparent');
        } else {
            mainNavbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'border-slate-100', 'shadow-xs');
            mainNavbar.classList.add('bg-transparent', 'border-transparent');
        }
    }
    window.addEventListener('scroll', updateNavbarOnScroll);
    updateNavbarOnScroll();


    // 3. Pricing Section Tab Switcher
    const pricingTabBtns = document.querySelectorAll('.pricing-tab-btn');
    const pricingPanes = document.querySelectorAll('.pricing-pane');

    pricingTabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetSlug = btn.getAttribute('data-target');

            // Update Tab Button Active Classes
            pricingTabBtns.forEach(b => {
                b.classList.remove('tab-btn-active', 'bg-[#1E4E8C]', 'text-white', 'border-[#1E4E8C]');
                b.classList.add('bg-white', 'text-[#1E293B]', 'border-slate-200');
            });
            btn.classList.add('tab-btn-active', 'bg-[#1E4E8C]', 'text-white', 'border-[#1E4E8C]');
            btn.classList.remove('bg-white', 'text-[#1E293B]', 'border-slate-200');

            // Update Pricing Content Panes
            pricingPanes.forEach(pane => {
                if (pane.id === `pricing-pane-${targetSlug}`) {
                    pane.classList.remove('hidden');
                } else {
                    pane.classList.add('hidden');
                }
            });
        });
    });


    // 3.1 Brochure Preview Modal (Khusus Unit Baru: I'dad Mahad Aly & Mahad Aly)
    const brochureModal = document.getElementById('brochure-modal');
    const brochureModalClose = document.getElementById('brochure-modal-close');
    const brochureModalTitle = document.getElementById('brochure-modal-title');
    const brochureModalImg = document.getElementById('brochure-modal-img');
    const brochureModalDownload = document.getElementById('brochure-modal-download');
    const brochureModalExternal = document.getElementById('brochure-modal-external');
    const previewBrochureBtns = document.querySelectorAll('.btn-preview-brochure');

    function openBrochureModal(unitName, brochureUrl) {
        if (!brochureModal) return;
        if (brochureModalTitle) {
            brochureModalTitle.textContent = `Preview Brosur - ${unitName}`;
        }
        if (brochureModalImg) {
            brochureModalImg.src = brochureUrl;
            brochureModalImg.alt = `Brosur ${unitName}`;
        }
        if (brochureModalDownload) {
            brochureModalDownload.href = brochureUrl;
            const cleanName = unitName.replace(/[^a-zA-Z0-9]/g, '-');
            brochureModalDownload.setAttribute('download', `Brosur-${cleanName}.jpg`);
        }
        if (brochureModalExternal) {
            brochureModalExternal.href = brochureUrl;
        }

        brochureModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';

        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }

    function closeBrochureModal() {
        if (!brochureModal) return;
        brochureModal.classList.add('hidden');
        if (brochureModalImg) {
            brochureModalImg.src = '';
        }
        document.body.style.overflow = '';
    }

    if (previewBrochureBtns.length > 0) {
        previewBrochureBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const unit = btn.getAttribute('data-unit') || 'PPDB Assunnah';
                const url = btn.getAttribute('data-brochure') || '';
                openBrochureModal(unit, url);
            });
        });
    }

    if (brochureModalClose) {
        brochureModalClose.addEventListener('click', (e) => {
            e.preventDefault();
            closeBrochureModal();
        });
    }

    if (brochureModal) {
        brochureModal.addEventListener('click', (e) => {
            if (e.target === brochureModal) {
                closeBrochureModal();
            }
        });
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && brochureModal && !brochureModal.classList.contains('hidden')) {
            closeBrochureModal();
        }
    });


    // 4. Accordion Toggle (FAQ, Persyaratan, Rincian Biaya)
    const accordionTriggers = document.querySelectorAll('.accordion-trigger');

    accordionTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            const item = trigger.closest('.accordion-item');
            if (!item) return;

            const isAlreadyOpen = item.classList.contains('open');

            // Optional: Close siblings in the same group if needed
            const parentGroup = item.closest('.accordion-group');
            if (parentGroup) {
                parentGroup.querySelectorAll('.accordion-item').forEach(child => {
                    child.classList.remove('open');
                });
            }

            // Toggle current item
            if (!isAlreadyOpen) {
                item.classList.add('open');
            } else {
                item.classList.remove('open');
            }
        });
    });


    // 5. Gallery Category Filter & Lightbox Modal
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightboxModal = document.getElementById('lightbox-modal');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');

    let visibleGalleryItems = [];
    let currentLightboxIndex = 0;

    // Filter Logic
    if (filterBtns.length > 0 && galleryItems.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');

                // Update Active Tab Style
                filterBtns.forEach(b => {
                    b.classList.remove('bg-[#0B192C]', 'text-[#E8D595]', 'shadow-md', 'border-[#0B192C]');
                    b.classList.add('bg-slate-100', 'text-slate-600', 'border-slate-200');
                });
                btn.classList.add('bg-[#0B192C]', 'text-[#E8D595]', 'shadow-md', 'border-[#0B192C]');
                btn.classList.remove('bg-slate-100', 'text-slate-600', 'border-slate-200');

                // Toggle Item Visibility
                galleryItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    if (filter === 'Semua' || category === filter) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    }

    // Lightbox Logic
    function getVisibleItems() {
        return Array.from(galleryItems).filter(item => !item.classList.contains('hidden'));
    }

    function showLightboxItem(index) {
        visibleGalleryItems = getVisibleItems();
        if (visibleGalleryItems.length === 0) return;

        if (index < 0) index = visibleGalleryItems.length - 1;
        if (index >= visibleGalleryItems.length) index = 0;

        currentLightboxIndex = index;
        const currentItem = visibleGalleryItems[currentLightboxIndex];

        const imgSrc = currentItem.getAttribute('data-image');
        const title = currentItem.getAttribute('data-title');
        const category = currentItem.getAttribute('data-category');

        if (lightboxImg) lightboxImg.src = imgSrc;
        if (lightboxCaption) {
            lightboxCaption.innerHTML = `
                <p class="text-xs text-slate-400 mt-2 font-medium">${currentLightboxIndex + 1} / ${visibleGalleryItems.length}</p>
            `;
        }
    }

    if (galleryItems.length > 0 && lightboxModal && lightboxImg) {
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                visibleGalleryItems = getVisibleItems();
                const index = visibleGalleryItems.indexOf(item);
                showLightboxItem(index !== -1 ? index : 0);

                lightboxModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeLightbox() {
            lightboxModal.classList.add('hidden');
            if (lightboxImg) lightboxImg.src = '';
            document.body.style.overflow = '';
        }

        if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
        if (lightboxPrev) lightboxPrev.addEventListener('click', () => showLightboxItem(currentLightboxIndex - 1));
        if (lightboxNext) lightboxNext.addEventListener('click', () => showLightboxItem(currentLightboxIndex + 1));

        lightboxModal.addEventListener('click', (e) => {
            if (e.target === lightboxModal || e.target.classList.contains('lightbox-overlay')) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (!lightboxModal.classList.contains('hidden')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') showLightboxItem(currentLightboxIndex - 1);
                if (e.key === 'ArrowRight') showLightboxItem(currentLightboxIndex + 1);
            }
        });
    }

    // 6. Floating Back to Top Button Visibility & Scroll Action
    const backToTopContainer = document.getElementById('back-to-top');
    const backToTopBtn = document.getElementById('back-to-top-btn');

    function updateBackToTopVisibility() {
        if (!backToTopContainer) return;
        if (window.scrollY > 200) {
            backToTopContainer.classList.remove('opacity-0', 'pointer-events-none');
            backToTopContainer.classList.add('opacity-100', 'pointer-events-auto');
        } else {
            backToTopContainer.classList.add('opacity-0', 'pointer-events-none');
            backToTopContainer.classList.remove('opacity-100', 'pointer-events-auto');
        }
    }

    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    window.addEventListener('scroll', updateBackToTopVisibility);
    updateBackToTopVisibility();

});



