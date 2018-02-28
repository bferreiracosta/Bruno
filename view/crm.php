<?php include_once("header.php");?>
    <section>
        <h3>Contato: </h3>
        <form method="post" action="#">
            <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="nome" id="nome" value="" placeholder="Nome" />
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
                <div class="12u$">
                    <div class="select-wrapper">
                        <select name="assunto" id="assunto">
                            <option id="null" value="">- Assunto -</option>
                            <option id="duvidas" value="duvidas">Duvidas</option>
                            <option id="sugestoes"value="sugestoes">Sugestões</option>
                            <option id="agendamentos"value="agendamentos">Agendamentos</option>
                            <option id="outros" value="outros">Outros</option>
                        </select>
                    </div>
                </div>
                <div class="4u 12u$(medium)">
                    <input type="radio" id="priority-low" name="priority" checked>
                    <label for="priority-low">Baixa prioridade</label>
                </div>
                <div class="4u 12u$(medium)">
                    <input type="radio" id="priority-normal" name="priority">
                    <label for="priority-normal">Prioridade normal</label>
                </div>
                <div class="4u$ 12u$(medium)">
                    <input type="radio" id="priority-high" name="priority">
                    <label for="priority-high">Alta prioridade</label>
                </div>
                <div class="6u 12u$(medium)">
                    <input type="checkbox" id="copy" name="copy">
                    <label for="copy">Deseja receber uma copia deste e-mail ?</label> <br>
                </div>
                </div>
                <div class="12u$">
                    <textarea name="message" id="message" placeholder="Digite sua mensagem" rows="6"></textarea> <br>
                </div>
                <div class="12u$">
                    <ul class="actions">
                        <li><input type="submit" value="Enviar" class="special" /></li>
                        <li><input type="reset" value="Limpar" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
<?php include_once("footer.php");?>