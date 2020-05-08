<table class="table table-hover table-dark">
    <thead class="thead-dark">
        <tr>
            <th>Primeiro Nome</th>
            <th>Último Nome</th>
            <th>Ano de Nascimento</th>
            <th>Eliminar</th>
            <th>Alterar</th>
        </tr>
    </thead>
    <?php if($listaPessoas->num_rows>0){
        while ($row = $listaPessoas->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['primeiroNome']; ?></td>
                <td><?php echo $row['ultimoNome']; ?></td>
                <td><?php echo $row['anoNascimento']; ?></td>
                <td><a href="view.php?eliminarID=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></a></td>
                <td><a href="view.php?alterarID=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
            </tr>
        <?php }
        $listaPessoas->free();
    } ?>
</table>