<h1>Reporte de ventas desde la vista</h1>
<p>Este reporte tiene [pagetotal] paginas</p>
<table class="simple-table">
    <thead>
        <tr>
            <th>NO.</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ventas as $key => $venta): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $venta['nombre'] ?> </td>
                <td><?= $venta['precio'] ?> </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
