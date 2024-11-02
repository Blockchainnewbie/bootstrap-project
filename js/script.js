// Warte bis das Dokument geladen ist
document.addEventListener('DOMContentLoaded', function() {
    // Aktiviere alle Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Aktives Menü-Item markieren
    const currentLocation = window.location.pathname;
    const menuItems = document.querySelectorAll('.nav-link');
    menuItems.forEach(item => {
        if (item.getAttribute('href') === currentLocation) {
            item.classList.add('active');
            item.setAttribute('aria-current', 'page');
        }
    });
});
