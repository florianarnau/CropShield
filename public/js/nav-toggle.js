document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('nav ul li span');

    navItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.stopPropagation();
            const parentLi = this.parentElement;
            const submenu = parentLi.querySelector('.submenu');

            if (submenu) {
                const isVisible = submenu.style.maxHeight !== '0px' && submenu.style.maxHeight !== '';

                // Close all submenus at the same level
                parentLi.parentElement.querySelectorAll('.submenu').forEach(menu => {
                    if (menu !== submenu) {
                        menu.style.opacity = 0;
                        menu.style.maxHeight = 0;
                        setTimeout(() => {
                            menu.style.display = 'none';
                        }, 300); // Match the duration of your transition
                    }
                });

                // Toggle the clicked submenu
                if (!isVisible) {
                    submenu.style.display = 'block';
                    setTimeout(() => {
                        submenu.style.opacity = 1;
                        submenu.style.maxHeight = '500px'; // Adjust according to your submenu content
                    }, 10);
                } else {
                    submenu.style.opacity = 0;
                    submenu.style.maxHeight = 0;
                    setTimeout(() => {
                        submenu.style.display = 'none';
                    }, 300); // Match the duration of your transition
                }
            }
        });
    });
});
