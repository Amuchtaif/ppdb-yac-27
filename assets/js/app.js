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
            if (typeof lucide !== 'undefined') lucide.createIcons();
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

            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    });


    /**
     * Reusable High-Performance Smooth Zoom & Pan Viewer Controller
     * Provides:
     * - Mouse wheel scroll-to-zoom (cursor-anchored)
     * - Smooth drag-to-pan when zoomed in with boundary constraints
     * - Double-click toggle (zoom to 2.4x / reset to 1x)
     * - Touch swipe & pinch-to-zoom on mobile/tablet
     * - Zoom controls (+, -, reset to 100%, fit screen)
     * - Real-time percentage badge
     */
    function createZoomPanViewer(options) {
        const {
            viewportEl,
            imageEl,
            zoomInBtn,
            zoomOutBtn,
            zoomResetBtn,
            zoomFitBtn,
            percentBadgeEl,
            hintBadgeEl,
            minZoom = 0.6,
            maxZoom = 4.5,
            zoomStep = 1.25,
            onCloseRequest = null
        } = options;

        if (!viewportEl || !imageEl) return null;

        let scale = 1;
        let panX = 0;
        let panY = 0;
        let isDragging = false;
        let startX = 0;
        let startY = 0;
        let hasMoved = false;
        let initialPinchDistance = null;
        let initialScale = 1;
        let hintTimer = null;

        function applyTransform(withTransition = false) {
            if (withTransition) {
                imageEl.style.transition = 'transform 0.22s cubic-bezier(0.16, 1, 0.3, 1)';
            } else {
                imageEl.style.transition = 'none';
            }

            imageEl.style.transform = `translate3d(${panX}px, ${panY}px, 0px) scale(${scale})`;

            // Dynamic cursor styling
            if (scale > 1.05) {
                imageEl.style.cursor = isDragging ? 'grabbing' : 'grab';
                viewportEl.style.cursor = isDragging ? 'grabbing' : 'grab';
            } else {
                imageEl.style.cursor = 'zoom-in';
                viewportEl.style.cursor = 'default';
            }

            // Update percentage badge
            if (percentBadgeEl) {
                percentBadgeEl.textContent = `${Math.round(scale * 100)}%`;
            }
        }

        function getPanBounds(currentScale) {
            if (currentScale <= 1.02) {
                return { minX: 0, maxX: 0, minY: 0, maxY: 0 };
            }
            const vpRect = viewportEl.getBoundingClientRect();
            const imgRect = imageEl.getBoundingClientRect();

            const baseW = imgRect.width / (scale || 1);
            const baseH = imgRect.height / (scale || 1);
            const scaledW = baseW * currentScale;
            const scaledH = baseH * currentScale;

            const maxPanX = Math.max(0, (scaledW - vpRect.width) / 2 + 120);
            const maxPanY = Math.max(0, (scaledH - vpRect.height) / 2 + 120);

            return {
                minX: -maxPanX,
                maxX: maxPanX,
                minY: -maxPanY,
                maxY: maxPanY
            };
        }

        function clampPan(targetX, targetY, currentScale) {
            const bounds = getPanBounds(currentScale);
            return {
                x: Math.min(bounds.maxX, Math.max(bounds.minX, targetX)),
                y: Math.min(bounds.maxY, Math.max(bounds.minY, targetY))
            };
        }

        function zoomTo(targetScale, focalX = 0, focalY = 0, withTransition = true) {
            const clampedScale = Math.min(Math.max(targetScale, minZoom), maxZoom);
            if (Math.abs(clampedScale - scale) < 0.005) return;

            if (clampedScale <= 1.02) {
                scale = 1;
                panX = 0;
                panY = 0;
            } else {
                const ratio = clampedScale / scale;
                const nextX = focalX - (focalX - panX) * ratio;
                const nextY = focalY - (focalY - panY) * ratio;
                const clamped = clampPan(nextX, nextY, clampedScale);
                scale = clampedScale;
                panX = clamped.x;
                panY = clamped.y;
            }

            applyTransform(withTransition);
        }

        function resetZoom(withTransition = true) {
            scale = 1;
            panX = 0;
            panY = 0;
            applyTransform(withTransition);
        }

        function showHint() {
            if (!hintBadgeEl) return;
            hintBadgeEl.classList.remove('opacity-0');
            if (hintTimer) clearTimeout(hintTimer);
            hintTimer = setTimeout(() => {
                if (hintBadgeEl) hintBadgeEl.classList.add('opacity-0');
            }, 3200);
        }

        // --- Event Listeners ---

        // 1. Mouse Wheel Scroll-to-Zoom
        function onWheel(e) {
            e.preventDefault();
            e.stopPropagation();

            const rect = viewportEl.getBoundingClientRect();
            const mouseX = e.clientX - rect.left - rect.width / 2;
            const mouseY = e.clientY - rect.top - rect.height / 2;

            const factor = e.deltaY < 0 ? 1.15 : 0.869;
            zoomTo(scale * factor, mouseX, mouseY, false);
        }

        // 2. Drag & Pan
        function onMouseDown(e) {
            if (e.button !== 0) return; // Left click only
            isDragging = true;
            hasMoved = false;
            startX = e.clientX - panX;
            startY = e.clientY - panY;
            applyTransform(false);
        }

        function onMouseMove(e) {
            if (!isDragging) return;
            const diffX = Math.abs(e.clientX - (startX + panX));
            const diffY = Math.abs(e.clientY - (startY + panY));
            if (diffX > 4 || diffY > 4) {
                hasMoved = true;
            }

            const rawX = e.clientX - startX;
            const rawY = e.clientY - startY;
            const clamped = clampPan(rawX, rawY, scale);
            panX = clamped.x;
            panY = clamped.y;
            applyTransform(false);
        }

        function onMouseUp(e) {
            if (!isDragging) return;
            isDragging = false;
            applyTransform(false);

            // If user clicked viewport backdrop directly without dragging, close modal
            if (!hasMoved && e.target === viewportEl && onCloseRequest) {
                onCloseRequest();
            }
        }

        // 3. Double Click Toggle
        function onDoubleClick(e) {
            e.preventDefault();
            if (scale > 1.15) {
                resetZoom(true);
            } else {
                const rect = viewportEl.getBoundingClientRect();
                const mouseX = e.clientX - rect.left - rect.width / 2;
                const mouseY = e.clientY - rect.top - rect.height / 2;
                zoomTo(2.4, mouseX, mouseY, true);
            }
        }

        // 4. Touch Gestures (Pinch to zoom & single finger pan)
        function onTouchStart(e) {
            if (e.touches.length === 1) {
                isDragging = true;
                hasMoved = false;
                startX = e.touches[0].clientX - panX;
                startY = e.touches[0].clientY - panY;
            } else if (e.touches.length === 2) {
                isDragging = false;
                initialPinchDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                initialScale = scale;
            }
        }

        function onTouchMove(e) {
            if (e.touches.length === 1 && isDragging && scale > 1.05) {
                e.preventDefault();
                hasMoved = true;
                const rawX = e.touches[0].clientX - startX;
                const rawY = e.touches[0].clientY - startY;
                const clamped = clampPan(rawX, rawY, scale);
                panX = clamped.x;
                panY = clamped.y;
                applyTransform(false);
            } else if (e.touches.length === 2 && initialPinchDistance) {
                e.preventDefault();
                const dist = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                const pinchRatio = dist / initialPinchDistance;
                zoomTo(initialScale * pinchRatio, 0, 0, false);
            }
        }

        function onTouchEnd(e) {
            if (e.touches.length === 0) {
                isDragging = false;
                initialPinchDistance = null;
            } else if (e.touches.length === 1) {
                initialPinchDistance = null;
                startX = e.touches[0].clientX - panX;
                startY = e.touches[0].clientY - panY;
            }
        }

        // Bind events
        viewportEl.addEventListener('wheel', onWheel, { passive: false });
        viewportEl.addEventListener('mousedown', onMouseDown);
        window.addEventListener('mousemove', onMouseMove);
        window.addEventListener('mouseup', onMouseUp);
        viewportEl.addEventListener('dblclick', onDoubleClick);
        viewportEl.addEventListener('touchstart', onTouchStart, { passive: false });
        viewportEl.addEventListener('touchmove', onTouchMove, { passive: false });
        viewportEl.addEventListener('touchend', onTouchEnd);

        // Zoom Buttons
        if (zoomInBtn) {
            zoomInBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                zoomTo(scale * zoomStep, 0, 0, true);
            });
        }
        if (zoomOutBtn) {
            zoomOutBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                zoomTo(scale / zoomStep, 0, 0, true);
            });
        }
        if (zoomResetBtn) {
            zoomResetBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                resetZoom(true);
            });
        }
        if (zoomFitBtn) {
            zoomFitBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                resetZoom(true);
            });
        }

        return {
            zoomTo,
            resetZoom,
            zoomIn: () => zoomTo(scale * zoomStep, 0, 0, true),
            zoomOut: () => zoomTo(scale / zoomStep, 0, 0, true),
            getScale: () => scale,
            showHint
        };
    }


    // 3.1 Brochure Preview Modal (Sleek Dark Viewer with Scroll-to-Zoom & Pan)
    const brochureModal = document.getElementById('brochure-modal');
    const brochureModalClose = document.getElementById('brochure-modal-close');
    const brochureModalTitle = document.getElementById('brochure-modal-title');
    const brochureModalImg = document.getElementById('brochure-modal-img');
    const brochureModalDownload = document.getElementById('brochure-modal-download');
    const brochureModalExternal = document.getElementById('brochure-modal-external');
    const previewBrochureBtns = document.querySelectorAll('.btn-preview-brochure');

    const brochureViewer = createZoomPanViewer({
        viewportEl: document.getElementById('brochure-zoom-viewport'),
        imageEl: brochureModalImg,
        zoomInBtn: document.getElementById('brochure-zoom-in'),
        zoomOutBtn: document.getElementById('brochure-zoom-out'),
        zoomResetBtn: document.getElementById('brochure-zoom-reset'),
        zoomFitBtn: document.getElementById('brochure-zoom-fit'),
        percentBadgeEl: document.getElementById('brochure-zoom-percent'),
        hintBadgeEl: document.getElementById('brochure-hint-badge'),
        onCloseRequest: closeBrochureModal
    });

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
            const cleanName = unitName.replace(/[^a-zA-Z0-9]/g, '-').replace(/-+/g, '-');
            brochureModalDownload.setAttribute('download', `Brosur-${cleanName}.jpg`);
            brochureModalDownload.setAttribute('title', `Unduh Brosur ${unitName}`);
        }
        if (brochureModalExternal) {
            brochureModalExternal.href = brochureUrl;
        }

        if (brochureViewer) {
            brochureViewer.resetZoom(false);
            brochureViewer.showHint();
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
        if (brochureViewer) brochureViewer.resetZoom(false);
        if (brochureModalImg) brochureModalImg.src = '';
        document.body.style.overflow = '';
    }

    // Expose globally for inline onclick triggers
    window.openBrochureModal = openBrochureModal;
    window.closeBrochureModal = closeBrochureModal;

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


    // 5. Gallery Category Filter & Facility Lightbox Modal (with Scroll-to-Zoom & Pan)
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightboxModal = document.getElementById('lightbox-modal');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxCategory = document.getElementById('lightbox-category');
    const lightboxCounter = document.getElementById('lightbox-counter');
    const lightboxCounterMobile = document.getElementById('lightbox-counter-mobile');
    const lightboxDownload = document.getElementById('lightbox-download');
    const lightboxExternal = document.getElementById('lightbox-external');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');

    let visibleGalleryItems = [];
    let currentLightboxIndex = 0;

    function closeLightbox() {
        if (!lightboxModal) return;
        lightboxModal.classList.add('hidden');
        if (facilityViewer) facilityViewer.resetZoom(false);
        if (lightboxImg) lightboxImg.src = '';
        document.body.style.overflow = '';
    }

    const facilityViewer = createZoomPanViewer({
        viewportEl: document.getElementById('lightbox-zoom-viewport'),
        imageEl: lightboxImg,
        zoomInBtn: document.getElementById('lightbox-zoom-in'),
        zoomOutBtn: document.getElementById('lightbox-zoom-out'),
        zoomResetBtn: document.getElementById('lightbox-zoom-reset'),
        zoomFitBtn: document.getElementById('lightbox-zoom-fit'),
        percentBadgeEl: document.getElementById('lightbox-zoom-percent'),
        hintBadgeEl: document.getElementById('lightbox-hint-badge'),
        onCloseRequest: closeLightbox
    });

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
        const title = currentItem.getAttribute('data-title') || 'Fasilitas Assunnah';
        const category = currentItem.getAttribute('data-category') || 'Fasilitas';

        if (facilityViewer) {
            facilityViewer.resetZoom(false);
        }

        if (lightboxImg) {
            lightboxImg.src = imgSrc;
            lightboxImg.alt = title;
        }
        if (lightboxTitle) lightboxTitle.textContent = title;
        if (lightboxCategory) lightboxCategory.textContent = category;
        if (lightboxCounter) lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${visibleGalleryItems.length}`;
        if (lightboxCounterMobile) lightboxCounterMobile.textContent = `Foto ${currentLightboxIndex + 1} dari ${visibleGalleryItems.length}`;

        if (lightboxDownload) {
            lightboxDownload.href = imgSrc;
            const cleanTitle = title.replace(/[^a-zA-Z0-9]/g, '-').replace(/-+/g, '-');
            lightboxDownload.setAttribute('download', `Fasilitas-${cleanTitle}.webp`);
            lightboxDownload.setAttribute('title', `Unduh Foto ${title}`);
        }
        if (lightboxExternal) {
            lightboxExternal.href = imgSrc;
        }

        if (facilityViewer) {
            facilityViewer.showHint();
        }

        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
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

        if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
        if (lightboxPrev) lightboxPrev.addEventListener('click', () => showLightboxItem(currentLightboxIndex - 1));
        if (lightboxNext) lightboxNext.addEventListener('click', () => showLightboxItem(currentLightboxIndex + 1));
    }

    // Comprehensive Keyboard Shortcuts for both Modals
    document.addEventListener('keydown', (e) => {
        // 1. Brochure Modal Shortcuts
        if (brochureModal && !brochureModal.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeBrochureModal();
            } else if (e.key === '+' || e.key === '=') {
                if (brochureViewer) brochureViewer.zoomIn();
            } else if (e.key === '-' || e.key === '_') {
                if (brochureViewer) brochureViewer.zoomOut();
            } else if (e.key === '0') {
                if (brochureViewer) brochureViewer.resetZoom(true);
            }
            return;
        }

        // 2. Facility Lightbox Shortcuts
        if (lightboxModal && !lightboxModal.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowLeft') {
                showLightboxItem(currentLightboxIndex - 1);
            } else if (e.key === 'ArrowRight') {
                showLightboxItem(currentLightboxIndex + 1);
            } else if (e.key === '+' || e.key === '=') {
                if (facilityViewer) facilityViewer.zoomIn();
            } else if (e.key === '-' || e.key === '_') {
                if (facilityViewer) facilityViewer.zoomOut();
            } else if (e.key === '0') {
                if (facilityViewer) facilityViewer.resetZoom(true);
            }
        }
    });

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



