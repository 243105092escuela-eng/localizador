function obtenerEstadio(estadio) {
    const estadios = {
        azteca: {
            nombre: "Estadio Azteca",
            lat: 19.3029,
            lng: -99.1505
        },
        bbva: {
            nombre: "Estadio BBVA",
            lat: 25.6692,
            lng: -100.2445
        },
        akron: {
            nombre: "Estadio Akron",
            lat: 20.6828,
            lng: -103.4626
        },
        cu: {
            nombre: "Estadio Olímpico Universitario",
            lat: 19.3322,
            lng: -99.1869
        }
    };

    return estadios[estadio] || null;
}
