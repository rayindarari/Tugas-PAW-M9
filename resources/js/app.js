import 'bootstrap';

// Script untuk interaksi halaman portfolio
document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const yearElement = document.getElementById('currentYear');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }

    const navbar = document.getElementById('mainNav');
    const backToTop = document.getElementById('backToTop');
    const sectionLinks = navbar ? Array.from(navbar.querySelectorAll('.nav-link[href^="#"]')) : [];
    const trackedSections = sectionLinks
        .map(function (link) {
            const target = link.getAttribute('href');
            return target && target.length > 1 ? document.querySelector(target) : null;
        })
        .filter(Boolean);
    let ticking = false;

    function updateActiveSection(scrollY) {
        if (!trackedSections.length) {
            return;
        }

        let activeId = trackedSections[0].id;
        const marker = scrollY + (navbar ? navbar.offsetHeight : 0) + 32;
        const isAtBottom = scrollY + window.innerHeight >= document.documentElement.scrollHeight - 4;

        if (isAtBottom) {
            activeId = trackedSections[trackedSections.length - 1].id;
        } else {
            trackedSections.forEach(function (section) {
                if (section.offsetTop <= marker) {
                    activeId = section.id;
                }
            });
        }

        sectionLinks.forEach(function (link) {
            const isActive = link.getAttribute('href') === '#' + activeId;
            link.classList.toggle('active', isActive);
            if (isActive) {
                link.setAttribute('aria-current', 'true');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    }

    function updateScrollUI() {
        const scrollY = window.scrollY || window.pageYOffset;

        if (navbar) {
            navbar.classList.toggle('scrolled', scrollY > 20);
        }

        if (backToTop) {
            backToTop.classList.toggle('visible', scrollY > 500);
        }

        updateActiveSection(scrollY);
        ticking = false;
    }

    if (navbar || backToTop || trackedSections.length) {
        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(updateScrollUI);
                ticking = true;
            }
        }, { passive: true });
        updateScrollUI();
    }

    if (backToTop) {
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
        });
    }

    const navMenu = document.getElementById('navMenu');
    if (navMenu && typeof bootstrap !== 'undefined') {
        const navLinks = navMenu.querySelectorAll('.nav-link, .nav-cta');
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (navMenu.classList.contains('show')) {
                    const offcanvas = bootstrap.Offcanvas.getInstance(navMenu);
                    if (offcanvas) {
                        offcanvas.hide();
                    }
                }
            });
        });
    }

    const revealItems = document.querySelectorAll('.reveal');
    if (revealItems.length) {
        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            revealItems.forEach(function (item) { item.classList.add('is-visible'); });
        } else {
            const revealObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { root: null, rootMargin: '0px 0px -8% 0px', threshold: 0.12 });
            revealItems.forEach(function (item) { revealObserver.observe(item); });
        }
    }

    const skillPanels = document.querySelectorAll('.skill-panel');
    function fillSkillBars(panel) {
        panel.querySelectorAll('.progress-bar[data-width]').forEach(function (bar) {
            const width = Number(bar.getAttribute('data-width')) || 0;
            bar.style.width = width + '%';
        });
    }
    if (skillPanels.length) {
        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            skillPanels.forEach(fillSkillBars);
        } else {
            const skillObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        fillSkillBars(entry.target);
                        skillObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.35 });
            skillPanels.forEach(function (panel) { skillObserver.observe(panel); });
        }
    }

    const projectModal = document.getElementById('projectModal');
    if (projectModal) {
        projectModal.addEventListener('show.bs.modal', function (event) {
            const trigger = event.relatedTarget;
            if (!trigger) return;
            const title = trigger.getAttribute('data-title') || 'Detail Proyek';
            const year = trigger.getAttribute('data-year') || '';
            const description = trigger.getAttribute('data-description') || '';
            const image = trigger.getAttribute('data-image') || '';
            const tech = (trigger.getAttribute('data-tech') || '').split(',').map(function (item) { return item.trim(); }).filter(Boolean);
            const titleElement = document.getElementById('projectModalTitle');
            const yearElement = document.getElementById('projectModalYear');
            const descriptionElement = document.getElementById('projectModalDescription');
            const imageElement = document.getElementById('projectModalImage');
            const techElement = document.getElementById('projectModalTech');
            if (titleElement) titleElement.textContent = title;
            if (yearElement) yearElement.textContent = year;
            if (descriptionElement) descriptionElement.textContent = description;
            if (imageElement && image) {
                imageElement.src = image;
                imageElement.alt = 'Preview project ' + title;
            }
            if (techElement) {
                techElement.innerHTML = '';
                tech.forEach(function (item) {
                    const badge = document.createElement('span');
                    badge.textContent = item;
                    techElement.appendChild(badge);
                });
            }
        });
    }

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        const fields = contactForm.querySelectorAll('input[required], textarea[required]');
        const alertBox = document.getElementById('formAlert');
        const emailAddress = contactForm.getAttribute('data-email') || '';
        function showAlert(message, type) {
            if (!alertBox) return;
            alertBox.className = 'alert alert-' + type + ' mb-0';
            alertBox.textContent = message;
        }
        fields.forEach(function (field) {
            field.addEventListener('input', function () {
                if (field.checkValidity()) field.classList.remove('is-invalid');
            });
        });
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();
            event.stopPropagation();
            let isValid = true;
            fields.forEach(function (field) {
                if (!field.checkValidity()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            if (!isValid) {
                const firstInvalid = contactForm.querySelector('.is-invalid');
                if (firstInvalid) firstInvalid.focus();
                showAlert('Mohon lengkapi data yang ditandai sebelum mengirim pesan.', 'danger');
                return;
            }
            const name = document.getElementById('contactName').value.trim();
            const email = document.getElementById('contactEmail').value.trim();
            const subject = document.getElementById('contactSubject').value.trim();
            const message = document.getElementById('contactMessage').value.trim();
            const body = 'Nama: ' + name + '\nEmail: ' + email + '\n\n' + message;
            const mailtoUrl = 'mailto:' + emailAddress + '?subject=' + encodeURIComponent('[Portfolio] ' + subject) + '&body=' + encodeURIComponent(body);
            showAlert('Terima kasih, ' + name + '! Aplikasi email Anda akan terbuka untuk mengirim pesan.', 'success');
            window.location.href = mailtoUrl;
        });
    }
});
