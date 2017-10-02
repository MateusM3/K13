<?php
/**
 * Created by PhpStorm.
 * User: Mateus Monteiro
 * Date: 02/10/2017
 * Time: 08:40
 */
?>
<form class="ui form" method="post"action=''>
    <div class="field">
        <label>Nome:</label>
        <input type="text"name="nome"id="nome"value="<?php echo $user->nome; ?>">
        <input type="hidden" name="atualizar">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
    </div>
    <div class="field">
        <label>Cep:</label>
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" value=<?php echo $user->cep; ?> >
    </div>
    <div class="field">
        <label>Rua:</label>
        <input name="rua" type="text" id="rua" size="60"value= <?php echo $user->rua; ?>>
    </div>

    <div class="field">
        <label>Numero:</label>
        <input name="numero" type="text" id="numero"value=<?php echo $user->numero; ?>>
    </div>
    <div class="field">
        <label>Complemento:</label>
        <input name="complemento" type="text" id="complemento"value= <?php echo $user->complemento; ?>>
    </div>
    <div class="field">
        <label>Bairro:</label>
        <input name="bairro" type="text" id="bairro" size="40"value= <?php echo $user->bairro; ?>>
    </div>
    <div class="field">
        <label>Cidade:</label>
        <input name="cidade" type="text" id="cidade" size="40" value=<?php echo $user->cidade; ?>>
    </div>
    <div class="field">
        <label>Estado:</label>
        <input name="uf" type="text" id="uf" size="2" value=<?php echo $user->uf; ?> >
    </div>
    <div class="field">
        <label>Telefone:</label>
        <input type="text" name="telefone"id="telefone"value=<?php echo $user->telefone; ?>>
    </div>
    <div class="field">
        <label>Celular:(opcional)</label>
        <input type="text" name="celular"id="celular"value=<?php echo $user->celular; ?>>
    </div>
    <div style="margin-top: 10px;">
        <button class="ui blue button" type="submit"><i class="check green icon"></i>Atualizar</button>
    </div>


</form>
