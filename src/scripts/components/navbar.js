
document.addEventListener('DOMContentLoaded', () => {
  const openIcon = document.querySelector('.nav-icons .open');
  const closeIcon = document.querySelector('.nav-icons .close');
  const navLinks = document.querySelector('.nav-left .nav-links');

  if (!openIcon || !closeIcon || !navLinks) return;

  // Toggle main menu
  openIcon.addEventListener('click', () => {
    navLinks.classList.add('active');
    openIcon.style.display = 'none';
    closeIcon.style.display = 'block';
  });

  closeIcon.addEventListener('click', () => {
    navLinks.classList.remove('active');
    openIcon.style.display = 'block';
    closeIcon.style.display = 'none';
  });

  // Toggle submenus (accordion)
  const submenuParents = document.querySelectorAll('.nav-links li:has(.submenu-list)');

  submenuParents.forEach(parent => {
    const link = parent.querySelector('a');

    link.addEventListener('click', (e) => {
      e.preventDefault(); // prevent navigation

      // close other submenus if you want accordion behavior
      submenuParents.forEach(item => {
        if (item !== parent) {
          item.classList.remove('submenu-active');
        }
      });

      parent.classList.toggle('submenu-active'); // toggle this submenu
    });
  });
});