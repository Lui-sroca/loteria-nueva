const boleto1 = document.getElementById("img-boleto1");
const boleto2 = document.getElementById("img-boleto2");

const cargarImagen = (entradas, observador) => {
    entradas.forEach((entrada) => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add('visible');
            console.log('funciono');
        }
    });
};

const observador = new IntersectionObserver(cargarImagen, {
    root: null,
    rootMargin: "0px 0px -50px 0px",
    threshold: 0.1,
});

observador.observe(boleto1);
observador.observe(boleto2);
