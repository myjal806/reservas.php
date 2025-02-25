<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>HOSTAL MIRADOR ALBORADA</title>
</head>

<body>
    <nav><b>Navbar</b></nav>

    <main><b>
            <h1>BIENVENIDO AL <h1 class="text1">HOSTAL MIRADOR-PISCO</h1>
            </h1>
            <div class="container"><img src="imagenes/nosotros.jpg" alt="">
                <h4>Descubre comodidad y experiencias<br>inolvidables</h4>
                <p>Bienvenidos a nuestro hotel en Pisco, donde el lujo y la comodidad se unen.
                    Relájate en nuestras elegantes habitaciones y disfruta de una experiencia única con nuestros
                    servicios de primera clase.</p>
            </div>
            <div class="horizontal-line"></div>
            <div class="container1"> <img class="mision" src="imagenes/mision.jpg" alt="">
                <h5>Nuestra <span class="text2">misión</span></h5>
                <p1>En este Hostal Mirador - Pisco, nos dedicamos a ofrecer una experiencia única de alojamiento y
                    gastronomía, donde la comodidad, la hospitalidad cálida y la excelencia culinaria se encuentran en
                    armonía. Nuestra misión es brindar a cada huésped un servicio personalizado en un entorno que
                    refleja la belleza de Pisco, utilizando ingredientes frescos y locales en nuestra cocina para crear
                    momentos inolvidables.</p1>
                    <div class="horizontal-line2"></div>
                <div class="cuadrado"></div>

            </div>
            <div class="container2"><img class="vision" src="imagenes/nosotros.jpg" alt="">
                <h3>Nuestra<span class="text3">visión</span></h3>
                <p2>Ser reconocidos como el destino preferido en la región de Pisco, ofreciendo una combinación
                    inigualable de alojamiento cómodo y gastronomía auténtica. En el Hostal Mirador-Pisco, aspiramos
                    a destacarnos por nuestro compromiso con la calidad, la atención al detalle y el turismo
                    sostenible, posicionándonos como un referente tanto para viajeros como para amantes de la buena
                    cocina.
                </p2>
                <div class="horizontal-line1"></div>
                <div class="cuadrado1"></div>

            </div>



        </b></main>
        <h2>Nuestros valores</h2>
    <div class="extravagant-accordion-container">
        <div class="extravagant-accordion">
            <div class="acordion-item">
                <button class="accordion-button fancy-button">Compromiso</button>
                <div class="acordion-content" id="content1">Comprometidos de satisfacer y exceder todas las expectativas de nuestros huéspedes y clientes.</div>
            </div>
            <div class="acordion-item">
                <button class="accordion-button fancy-button">Trabajo en Equipo</button>
                <div class="acordion-content" id="content2">La clave de nuestro éxito es el capital humano, un equipo que trabaja conjuntamente para lograr la satisfacción del cliente.</div>
            </div>
            <div class="acordion-item">
                <button class="accordion-button fancy-button">Sencillez</button>
                <div class="acordion-content" id="content3">Ser sencillo no significa ser menos competitivo, es simplemente apostar por objetivos alcanzables y poco a poco incorporar de nuevos.
                </div>
            </div>
            <div class="acordion-item">
                <button class="accordion-button fancy-button">Honestidad</button>
                <div class="acordion-content" id="content3">En cada una de nuestras acciones, enfrentando todas las situaciones con honestidad, honradez y rectitud.</div>
            </div>
            <div class="acordion-item">
                <button class="accordion-button fancy-button">Servicio Personalizado</button>
                <div class="acordion-content" id="content3">Buscamos dar un excelente servicio al cliente, con la idea inicial de sus fundadores: “buen servicio y buena comida al precio justo” cuidamos cada detalle para la satisfacción del cliente.</div>
            </div>
            <div class="acordion-item">
                <button class="accordion-button fancy-button">Hospitalidad</button>
                <div class="acordion-content" id="content3">Nos esforzamos por crear un ambiente familiar donde cada huésped se sienta como en casa.</div>
            </div>
        </div>
        <div class="extravagant-text" id="textDisplay"></div>
    </div>
    <script>
 
        const buttons = document.querySelectorAll('.accordion-button');
        const textDisplay = document.getElementById('textDisplay');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;

                // Si el texto ya está en el contenedor, lo ocultamos
                if (textDisplay.innerText === content.innerText) {
                    textDisplay.innerText = ""; // Ocultar texto
                } else {
                    // Mostrar el contenido en el contenedor de texto a la derecha
                    textDisplay.innerText = content.innerText;
                }
            });
        });

    </script>
<h2 class="preguntas">Preguntas Frecuentes</h2>
    <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿Cuáles son los horarios de check-in y check-out?</div>
                    <svg class="chevron-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 15l-6-6-6 6"></path>
                    </svg>
                </div>
            </button>
            <div class="accordion-content">
                <p class="lib">
                    El check-in es a partir de las 2:00 p.m., y el check-out debe realizarse antes de las 12:00 p.m. Si
                    necesitas horarios especiales, por favor contáctanos y trataremos de acomodarte según
                    disponibilidad.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿El restaurante está abierto al público en general o solo a los huéspedes del
                        hostal?</div>
                    <svg class="chevron-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 15l-6-6-6 6"></path>
                    </svg>
                </div>
            </button>
            <div class="accordion-content">
                <p class="lib">
                    Nuestro restaurante está abierto tanto para los huéspedes del hostal como para el público en
                    general. Ofrecemos un menú variado con platos locales.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa"> ¿Aceptan mascotas?</div>
                    <svg class="chevron-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 15l-6-6-6 6"></path>
                    </svg>
                </div>
            </button>
            <div class="accordion-content">
                <p class="lib">
                    Lamentablemente, no aceptamos mascotas en el hostal por el momento.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿Cuál es el horario del restaurante?</div>
                    <svg class="chevron-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 15l-6-6-6 6"></path>
                    </svg>
                </div>
            </button>
            <div class="accordion-content">
                <p class="lib">
                    El restaurante está abierto todos los días de 8:00 a.m. a 10:00 p.m. Sirviendo desayunos, almuerzos,
                    y cenas. También contamos con servicio a la habitación para los huéspedes.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿Cómo puedo hacer una reserva?</div>
                    <svg class="chevron-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 15l-6-6-6 6"></path>
                    </svg>
                </div>
            </button>
            <div class="accordion-content">
                <p class="lib">
                    Puedes hacer tu reserva directamente a través de nuestro sitio web, por teléfono o enviándonos un
                    correo electrónico. Te recomendamos reservar con antelación para asegurar disponibilidad.
                </p>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const triggers = document.querySelectorAll(".accordion-trigger");
            triggers.forEach(trigger => {
                trigger.addEventListener("click", function () {
                    const content = this.nextElementSibling;
                    const chevron = this.querySelector(".chevron-up");
                    const isActive = this.classList.contains("active");

                    if (isActive) {
                        content.style.maxHeight = null;
                        this.classList.remove("active");
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px"; // Establece la altura máxima dinámica
                        this.classList.add("active");
                    }
                    chevron.classList.toggle("active");
                });
            });
        });

    </script>
    <footer><b>Footer</b></footer>

</body>

</html>