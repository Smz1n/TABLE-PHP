<table border="1">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>
                    <td> Chiquim {$i}</td>
                    <td> Chiquim {$i}@email.com</td>
                    <td> Cidade {$i}</td>
                    <td> <button onclick='excluir()'>
                </tr>";
            }
            ?>
    </tbody>
</table>