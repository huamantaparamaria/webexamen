<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Registros</title>
</head>
<body>
    <header>
        <h1>Registros de contactos</h1>
        <a href="index.htm" class="btn">Regresar al Menú Principal</a>
    </header>
    <main>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Asunto</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include'conexion.php';
                $sql = "SELECT * FROM contactos";
                $result = $conn-$result->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>{$row[´id´]}</td>
                        <td>{$row[´nombre´]}</td>
                        <td>{$row[´apellidos´]}</td>
                        <td>{$row[´asunto´]}</td>
                        <td>{$row[´email´]}</td>
                        <td>{$row[´mensaje´]}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan=´6´>No hay registros disponibles</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>