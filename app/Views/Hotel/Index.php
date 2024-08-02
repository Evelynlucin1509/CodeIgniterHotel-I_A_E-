<!DOCTYPE html>
<html>
<head>
    <title>Lista de Hoteles</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .success-message {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Lista de Hoteles</h1>

    <!-- Mostrar mensaje de éxito -->
    <?php if (!empty($message)): ?>
        <p class="success-message"><?= esc($message) ?></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
        </tr>
        <?php foreach ($hotel as $hotel): ?>
        <tr>
            <td><?= esc($hotel['nombre']); ?></td>
            <td><?= esc($hotel['categoria']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>INTEGRANTES:</h3>
    <h3>NOMBRE: PEDRO ANTONIO CEVALLOS ORTIZ</h3>
    <h3>NOMBRE: EVELYN JANINA LUCIN YAGUAL</h3>
</body>
</html>

