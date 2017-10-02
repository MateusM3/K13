<?php
/**
 * Created by PhpStorm.
 * User: Mateus Monteiro
 * Date: 02/10/2017
 * Time: 08:46
 */
?>
<table width="50%" class="ui table">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Cep</th>
        <th>Rua</th>
        <th>Numero</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Telefones</th>
        <th>Ações</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($usuario->findAll() as $key =>$value):?>
        <tr>
            <td><?php echo $value->nome?></td>
            <td><?php echo $value->cep?></td>
            <td><?php echo $value->rua?></td>
            <td><?php echo $value->numero?></td>
            <td><?php echo $value->complemento?></td>
            <td><?php echo $value->bairro?></td>
            <td><?php echo $value->cidade?></td>
            <td><?php echo $value->telefone."<BR>".$value->celular?></td>
            <td><?php echo "<a href='index.php?acao=editar&id=".$value->id."'class=\"button success\">Editar</a>"?>
                <?php echo "<a href='index.php?acao=deletar&id=".$value->id."'class=\"button  secondary\"onclick='return confirm(\"Deseja realmente excluir??\")'>Excluir</a>"?></td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>
