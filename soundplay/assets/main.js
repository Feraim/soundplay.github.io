const menuToggle = document.querySelector('.menu-hamburguesa');
const navMenu = document.querySelector('.nav-menu');

menuToggle.addEventListener('click', () => {
  // Intercambiamos las clases 'active' y 'open'
  navMenu.classList.toggle('active');
  menuToggle.classList.toggle('open');
});