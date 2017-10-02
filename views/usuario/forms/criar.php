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
                     <label>Nome:*</label>
                     <input type="text"name="nome"id="nome"required>
                  <input type="hidden" name="cadastrar">
                </div>
                <div class="field">
                      <label>Cep:*</label>
                      <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" required>
                </div>
                <div class="field">
                    <label>Rua:*</label>
                    <input name="rua" type="text" id="rua" size="60" required>
                </div>

                <div class="field">
                    <label>Numero:*</label>
                    <input name="numero" type="text" id="numero"required>
                </div>
                <div class="field">
                    <label>Complemento:*</label>
                    <input name="complemento" type="text" id="complemento" required>
                </div>
                <div class="field">
                     <label>Bairro:*</label>
                      <input name="bairro" type="text" id="bairro" size="40" required>
                </div>
                <div class="field">
                      <label>Cidade:*</label>
                      <input name="cidade" type="text" id="cidade" size="40"required>
                </div>
                <div class="field">
                      <label>Estado:*</label>
                     <input name="uf" type="text" id="uf" size="2" required>
                </div>
                <div class="field">
                      <label>Telefone:*</label>
                       <input type="text" name="telefone"id="telefone"required>
                </div>
                <div class="field">
                    <label>Celular:(opcional)</label>
                    <input type="text" name="celular"id="celular">
                </div>
                <div style="margin-top: 10px;">
                    <button class="ui blue button" type="submit"><i class="check green icon"></i>Cadastrar</button>
                </div>


            </form>