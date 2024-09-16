document.addEventListener('DOMContentLoaded', (event) => {
    // Agregar un efecto de desplazamiento suave al hacer clic en los enlaces de navegación
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Mostrar una alerta al hacer clic en el botón de contacto
    const contactButton = document.querySelector('form[action="user/contact.php"] button');
    if (contactButton) {
        contactButton.addEventListener('click', () => {
            alert('¡Gracias por tu mensaje!');
        });
    }

    // Añadir un efecto de desplazamiento a la página
    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const header = document.querySelector('header');
        if (header) {
            header.style.backgroundColor = scrollTop > 50 ? '#111' : '#333';
        }
    });
});
