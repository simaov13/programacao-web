<tr>
    <td>Primeiro Nome</td>
    <td>Último Nome</td>
    <td>Ano de Nascimento</td>
    <td>Eliminar</td>
    <td>Alterar</td>
</tr>
<?php if($listaPessoas->num_rows>0){
    while ($row = $listaPessoas->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['primeiroNome']; ?></td>
            <td><?php echo $row['ultimoNome']; ?></td>
            <td><?php echo $row['anoNascimento']; ?></td>
            <td><a href="view.php?eliminarID=<?php echo $row['id']; ?>">Eliminar</a></td>
            <td><a href="view.php?alterarID=<?php echo $row['id']; ?>">Alterar</a></td>
        </tr>
    <?php }
    $listaPessoas->free();
} ?>