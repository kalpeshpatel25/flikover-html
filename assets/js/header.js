document.addEventListener('DOMContentLoaded', function() {
    /* === HEADER DRAWER FUNCTIONALITY S === */
    const mobileToggle = document.querySelector('.mobile-toggle');
    const headerNav = document.querySelector('.site-header-2 .header-nav');
    const drawerClose = document.querySelector('.drawer-close');

    if (mobileToggle && headerNav) {
        
        function openDrawer() {
            headerNav.classList.add('active');
            mobileToggle.classList.add('active');
            document.body.style.overflow = 'hidden'; 
        }

        function closeDrawer() {
            headerNav.classList.remove('active');
            mobileToggle.classList.remove('active');
            document.body.style.overflow = ''; 
        }

        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (headerNav.classList.contains('active')) {
                closeDrawer();
            } else {
                openDrawer();
            }
        });

        if (drawerClose) {
            drawerClose.addEventListener('click', function(e) {
                e.stopPropagation();
                closeDrawer();
            });
        }

        document.addEventListener('click', function(e) {
            if (headerNav.classList.contains('active')) {
                if (!headerNav.contains(e.target) && !mobileToggle.contains(e.target)) {
                    closeDrawer();
                }
            }
        });

        headerNav.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
    /* === HEADER DRAWER FUNCTIONALITY E === */
});
