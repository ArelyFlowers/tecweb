var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
};

function buscarID(e) {
    e.preventDefault();
    var search = document.getElementById('search').value;

    var client = getXMLHttpRequest();
    client.open('POST', './backend/read.php', true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    client.onreadystatechange = function () {
        if (client.readyState == 4 && client.status == 200) {
            console.log('[CLIENTE]\n' + client.responseText);

            let data = JSON.parse(client.responseText);

            if (data.products && data.products.length > 0) {
                let productos = data.products;
                let template = '';

                productos.forEach(function (producto) {
                    let descripcion = '';
                    descripcion += '<li>precio: ' + producto.precio + '</li>';
                    descripcion += '<li>unidades: ' + producto.unidades + '</li>';
                    descripcion += '<li>modelo: ' + producto.modelo + '</li>';
                    descripcion += '<li>marca: ' + producto.marca + '</li>';
                    descripcion += '<li>detalles: ' + producto.detalles + '</li>';

                    template += `
                        <tr>
                            <td>${producto.id}</td>
                            <td>${producto.nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                        </tr>
                    `;
                });

                document.getElementById("productos").innerHTML = template;
            } else {
                document.getElementById("productos").innerHTML = 'No se encontraron productos.';
            }
        }
    };

    client.send("search=" + search);
}

function agregarProducto(e) {
    e.preventDefault();

    var nombre = document.getElementById('name').value;
    var detalles = document.getElementById('detalles').value;

    if (nombre.length === 0) {
        alert('El nombre es requerido.');
        return;
    }

    if (detalles.length === 0) {
        alert('Los detalles son requeridos.');
        return;
    }

    var producto = {
        "nombre": nombre,
        "detalles": detalles
    };

    var client = getXMLHttpRequest();
    client.open('POST', './backend/create.php', true);
    client.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
    client.onreadystatechange = function () {
        if (client.readyState == 4 && client.status == 200) {
            alert('[SERVIDOR] ' + client.responseText);
        }
    };
    client.send(JSON.stringify(producto));
}

function getXMLHttpRequest() {
    var objetoAjax;

    try {
        objetoAjax = new XMLHttpRequest();
    } catch (err1) {
        try {
            objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (err2) {
            try {
                objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (err3) {
                objetoAjax = false;
            }
        }
    }
    return objetoAjax;
}

// Llama a la función init cuando la página se carga
function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;
}