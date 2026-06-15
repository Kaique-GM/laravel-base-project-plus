export function initMenu() {
    // Menu Nav
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('max-h-0');
            menu.classList.toggle('opacity-0');
            menu.classList.toggle('max-h-[500px]');
            menu.classList.toggle('opacity-100');
        });
    }
}