document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.getElementById('mobile-menu-btn');
    const closeBtn = document.getElementById('mobile-close-btn');
    const sidebar = document.getElementById('mobile-sidebar'); 
           const overlay = document.getElementById('mobile-overlay');
    if (!sidebar) return; // nothing to do if sidebar missing

    const showSidebar = () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        openBtn?.setAttribute('aria-expanded', 'true');
    };

    const hideSidebar = () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
        openBtn?.setAttribute('aria-expanded', 'false');
    };

    openBtn?.addEventListener('click', (e) => {
        e.preventDefault();
        showSidebar();
    });

    closeBtn?.addEventListener('click', (e) => {
        e.preventDefault();
        hideSidebar();
    });

    overlay?.addEventListener('click', hideSidebar);

        // close on Escape key for accessibility
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') hideSidebar();
    });
});