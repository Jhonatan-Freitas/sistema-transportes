<br>
<h3 class="text-center">Lista de Cliente</h3>
<table style="text-align: center;" class="table table-dark">
	<tr>
		<th>ID</th>
		<th>Nome:</th>
		<th>CPF:</th>
		<th>Telefone:</th>
		<th>Email:</th>
		
		<th colspan="2">Opções</th>
	</tr>
	<?php foreach($cliente as $c):?>
	<tr>
		<td><?php echo $c->getId(); ?></td>
        <td><?php echo $c->getNome(); ?></td>
        <td><?php echo $c->getCpf(); ?></td>
        <td><?php echo $c->getTelefone(); ?></td>
        <td><?php echo $c->getEmail(); ?></td>
		<td><a href="#">Editar</a></td>
		<td><a href="removerCliente.php?id=<?php echo $c->getId()?>">Remover</a></td>
	</tr>
	<?php	endforeach;	?>
</table>