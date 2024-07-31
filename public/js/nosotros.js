function fetchContent(option) {
    if (option) {
        fetch(`Nosotrosget/${option}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('contenido').innerHTML = data.content;
            })
            .catch(error => console.error('Error:', error));
    } else {
        document.getElementById('contenido').innerHTML = 'Selecciona una opción para ver el contenido';
    }
}