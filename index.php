$sql = "SELECT * FROM Alumno";
$result = $conn->query($sql);

// Mostrar datos
echo "<h2>Lista de Alumnos</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Nombres</th><th>Apellidos</th><th>Edad</th><th>Teléfono</th><th>Correo</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["nombres"]."</td>
        <td>".$row["apellidos"]."</td>
        <td>".$row["edad"]."</td>
        <td>".$row["telefono"]."</td>
        <td>".$row["correo"]."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No hay datos</td></tr>";
}

echo "</table>";

// Cerrar conexión
$conn->close();
?>
