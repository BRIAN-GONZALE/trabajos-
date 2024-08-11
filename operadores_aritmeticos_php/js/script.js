// script.js

document.getElementById('searchInput').addEventListener('keyup', function() {
    var input = this.value.toLowerCase();
    var table = document.getElementById('dataTable');
    var rows = table.getElementsByTagName('tr');
    for (var i = 1; i < rows.length; i++) { // Comenzamos desde 1 para saltar la fila del encabezado
        var cells = rows[i].getElementsByTagName('td');
        var rowContainsSearchTerm = false;
        for (var j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(input)) {
                rowContainsSearchTerm = true;
                break;
            }
        }
        if (rowContainsSearchTerm || input === "") {
            rows[i].style.display = ""; // Muestra la fila si coincide o si el input está vacío
        } else {
            rows[i].style.display = "none"; // Oculta la fila si no coincide
        }
    }
});
