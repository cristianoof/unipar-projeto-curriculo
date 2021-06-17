<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu Currículo Online</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <a href="#"><img id="logo" src="images/logo-branco.png" alt="Logo do gerador de currículos"></a>
            <div class="titulo-principal">
                <h1>Gerador de Currículos</h1>
                <h3>Crie seu Currículo Online agora mesmo, de forma simples e gratuita!</h3>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="conteudo">
            <img src="images/view-desktop.jpg" alt="Acesse pelo celular">
            <p>O Gerador de Currículos Online foi construído para facilitar o processo de criação de um currículo, disponibilizando
                e formatando as informações de forma adequada na página.
                Depois de preencher tudo, você poderá clicar no botão <strong>Gerar meu Currículo</strong> para ser direcionado à uma página com o curriculo
                pronto e disponível para imprimir ou salvar, tudo de forma simples e intuitiva!
            </p>
            <p>As etapas estão divididas em seções em ordem de preenchimento padrão que é utilizado na grande maioria dos currículos atualmente. Em cada seção temos
                um botão de <strong>Ajuda</strong>, ao clicar você verá uma breve orientação de como preencher os campos a seguir. É claro que essa <i>orientação</i>
                é uma sugestão de como preencher, seguindo os padrões atuais, mas fique a vontade no preenchimento.
            </p>
            <p>A maioria dos campos são de preenchimento obrigatório, mas caso esqueça algum para trás, ao clicar no botão para gerar, você será
                avisado em qual campo está faltando a informação.
                Vale ressaltar que quanto mais rico de informações conter em seu curriculo, melhor será recebido pelo recrutador. Isso não quer
                dizer pra encher de informações desencontradas <i>só para fazer volume!</i>
            </p>
            <p>Caso você esteja procurando o primeiro emprego, fique tranquilo, há muitas oportunidades de trabalho para seu perfil. Preencha os
                campos com informações de escolaridade, cursos que tenha feito ou esteja fazendo e principalmente preencha de forma honesta e 
                detalhada o campo <strong>Objetivo</strong> na seção 2. Sem mais delongas, vamos criar seu currículo!
            </p>
        </div>

        <div class="formulario">
            <form action="curriculo.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>
                        <h2>1. Dados Pessoais <button type="button" class="btn-ajuda"
                                onclick="mostraConteudo('[data-ajuda-1]')">Ajuda</button></h2>
                    </legend>
                    <div class="hide" data-ajuda-1>
                        <p class="ajuda">
                            Preencha todos os campos a seguir, exceto <i>telefone de recado</i> caso não tenha. Para o endereço, Digite
                            somente os números de seu CEP que o sistema fará a busca do endereço, cidade e estado, faltando informar 
                            o número da casa.<br>
                            A Foto é opcional, mas é muito importante que seu currículo tenha uma foto. Procure uma que esteja com um sorriso e com
                            fundo neutro, quem tem deve estar em destaque é você!
                        </p>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="nomeCompleto">Nome Completo</label>
                        <input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Digite seu nome..."
                            required>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="nacionalidade">Nacionalidade</label>
                        <input type="text" name="nacionalidade" id="nacionalidade" value="Brasileiro" required>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo" required>
                            <option value=""></option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="idade">Idade</label>
                        <input type="number" name="idade" id="idade" required>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="estadoCivil">Estado Civil</label>
                        <select name="estadoCivil" id="estadoCivil" required>
                            <option value=""></option>
                            <option value="Solteiro(a)">Solteiro(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="União Estável">União Estável</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Viúvo(a)">Viúvo(a)</option>
                        </select>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="filhos">Tem Filho(s)?</label>
                        <select name="filhos" id="filhos" required>
                            <option value=""></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>

                    <div class="formulario-2-colunas">
                        <label for="cep">CEP (Somente Números)</label>
                        <input type="number" name="cep" id="cep">
                    </div>
                    
                    <div class="formulario-2-colunas">
                        <label for="rua">Endereço</label>
                        <input type="text" name="rua" id="rua" required>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" required>
                    </div>
                    
                    <div class="formulario-3-colunas">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" required>
                        </select>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="uf">Estado</label>
                        <input type="text" name="uf" id="uf" required>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="telefone">Telefone Principal (Somente Números)</label>
                        <input type="tel" name="telefone" id="telefone" onblur="validaFone()" placeholder="xx xxxxx xxxx" required>
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="telefoneRecado">Telefone Recado (Opcional)</label>
                        <input type="tel" name="telefoneRecado" id="telefoneRecado">
                    </div>

                    <div class="formulario-3-colunas">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="email@exemplo.com" required>
                    </div>

                    <div class="input-foto">
                        <label for="foto">Adicione sua Foto (Opcional) *Tamanho ideal é quadrado Ex: 500px por 500px</label>
                        <input type="file" name="foto" id="foto" accept='image/*' onchange="previewImage()">
                    </div>
                    <img class="foto-preview" id="foto-preview">
                </fieldset>

                <fieldset>
                    <legend>
                        <h2>2. Objetivo <button type="button" class="btn-ajuda"
                                onclick="mostraConteudo('[data-ajuda-2]')">Ajuda</button></h2>
                    </legend>
                    <div class="hide" data-ajuda-2>
                        <p class="ajuda">
                            O Objetivo é uma seção importantíssima em seu currículo. Fale um pouco sobre você e sua pretensão, se é primeiro
                            emprego, mudança de carreira, progressão na mesma carreira, etc. Tudo de forma objetiva e verdadeira.
                        </p>
                    </div>

                    <div class="formulario-1-coluna">
                        <label for="objetivo">Objetivo</label>
                        <textarea name="objetivo" id="objetivo" cols="10" rows="8"></textarea>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>
                        <h2>3. Formação Acadêmica <button type="button" class="btn-ajuda"
                                onclick="mostraConteudo('[data-ajuda-3]')">Ajuda</button></h2>
                    </legend>
                    <div class="hide" data-ajuda-3>
                        <p class="ajuda">
                            Aqui em suas formações, descreva o Curso e Instituição de forma completa, evite muitas abreviações.<br>
                            Caso não possua ou não esteja cursando uma graduação, coloque seu estudo no colégio mesmo, concluído ou cursando.<br>
                            Ao final dessa seção tem um botão <strong>+ Adicionar Formação</strong>, clique e adicione quantas forem preciso.
                        </p>
                    </div>

                    <div id="formacao">
                        <div id="mais-formacao">
                            <div class="formulario-2-colunas">
                                <label for="curso">Curso</label>
                                <input type="text" name="cursoFormacao[]" id="curso" data-form-input="1"
                                    placeholder="Ex: Bacharel em Administração" required>
                            </div>

                            <div class="formulario-2-colunas">
                                <label for="instituicao">Instituição</label>
                                <input type="text" name="instituicao[]" id="instituicao" data-form-input="2"
                                    placeholder="Ex: Unipar - Universidade Paranaense" required>
                            </div>

                            <div class="formulario-2-colunas">
                                <label for="conclusao">Conclusão | Previsão</label>
                                <select name="conclusao[]" id="conclusao" required>
                                    <option value=""></option>
                                    <option value="Concluído em:">Concluído em</option>
                                    <option value="Previsao de conclusão:">Previsão para concluir em</option>
                                </select>
                            </div>

                            <div class="formulario-2-colunas">
                                <label for="ano">Ano de Conclusão | Previsão</label>
                                <select name="anoFormacao[]" id="ano" data-form-input="3" required>
                                    <option value="" selected></option>
                                    <?php 
                                        $ano = file('res/ano.csv');
                                        foreach($ano as $value){
                                            echo "<option value='$value'>$value</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn-adicionar" onclick="clonar('#mais-formacao', '#formacao')">+
                        Adicionar Formação</button>
                </fieldset>

                <fieldset>
                    <legend>
                        <h2>4. Experiência Profissional <button type="button" class="btn-ajuda"
                                onclick="mostraConteudo('[data-ajuda-4]')">Ajuda</button></h2>
                    </legend>
                    <div class="hide" data-ajuda-4>
                        <p class="ajuda">
                            A seção de Experiência Profissional é indispensável em um currículo. Um campo de muita atenção nessa seção é o de <i>Principais Atividades
                            Desenvolvidas no Cargo</i>. Descreva com detalhes, de forma objetiva e clara, suas atividades no cargo/empresa em questão.<br>
                            Caso não possua experiêcia profissional, marque a caixa de seleção abaixo, é o primeiro item dessa seção.<br>
                            Ao final dessa seção tem um botão <strong>+ Adicionar Experiência</strong>, clique e adicione quantas forem preciso.
                        </p>
                    </div>

                    <div class="primeiro-emprego">
                        <input type="checkbox" name="primeiroEmprego" id="primeiroEmprego">
                        <label for="primeiroEmprego">Marque se for seu primeiro emprego</label>
                    </div>

                    <div id="experiencia">
                        <div id="mais-experiencia">
                            <div class="formulario-2-colunas">
                                <label for="empresa">Empresa</label>
                                <input type="text" name="empresa[]" id="empresa" data-form-input="1" placeholder="">
                            </div>

                            <div class="formulario-2-colunas">
                                <label for="cargo">Cargo</label>
                                <input type="text" name="cargo[]" id="cargo" data-form-input="2"
                                    placeholder="Ex: Analista Financeiro">
                            </div>

                            <div class="formulario-5-colunas">
                                <label for="entradaMes">Mês Entrada</label>
                                <select name="entradaMes[]" id="entradaMes" data-form-input="3">
                                    <option value="" selected></option>
                                    <?php
                                        $ano = file('res/mes.csv');
                                        foreach($ano as $value){
                                            echo "<option value='$value'>$value</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="formulario-5-colunas">
                                <label for="entradaAno">Ano Entrada</label>
                                <select name="entradaAno[]" id="entradaAno" data-form-input="4">
                                    <option value="" selected></option>
                                    <?php 
                                        $ano = file('res/ano.csv');
                                        foreach($ano as $value){
                                            echo "<option value='$value'>$value</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="formulario-5-colunas">
                                <label for="empregoAtual">É seu Emprego Atual?</label>
                                <select name="empregoAtual[]" id="empregoAtual" data-select>
                                    <option value="de " selected>Nâo</option>
                                    <option value="Emprego Atual">Sim</option>
                                </select>
                            </div>

                            <div class="formulario-5-colunas" data-emprego-atual-1>
                                <label for="saidaMes">Mês Saída</label>
                                <select name="saidaMes[]" id="saidaMes" data-form-input="5">
                                    <option value="" selected></option>
                                    <?php 
                                        $ano = file('res/mes.csv');
                                        foreach($ano as $value){
                                            echo "<option value='$value'>$value</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="formulario-5-colunas" data-emprego-atual-2>
                                <label for="saidaAno">Ano Saída</label>
                                <select name="saidaAno[]" id="saidaAno" data-form-input="6">
                                    <option value="" selected></option>
                                    <?php 
                                        $ano = file('res/ano.csv');
                                        foreach($ano as $value){
                                            echo "<option value='$value'>$value</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="formulario-1-coluna">
                                <label for="principaisAtividades">Principais Atividades Deselvolvidas no Cargo</label>
                                <textarea name="atividades[]" id="principaisAtividades" data-form-input="7" cols="10"
                                    rows="8"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn-adicionar" onclick="clonar('#mais-experiencia', '#experiencia')">+
                        Adicionar Experiência</button>
                </fieldset>

                <fieldset>
                    <legend>
                        <h2>5. Outros Cursos e Habilidades <button type="button" class="btn-ajuda"
                                onclick="mostraConteudo('[data-ajuda-5]')">Ajuda</button></h2>
                    </legend>
                    <div class="hide" data-ajuda-5>
                        <p class="ajuda">
                            Essa seção é destinada para você descrever outros cursos que tenha feito. Exemplos: Curso de Digitação. Tenho facilidade e agilidade em digitar;
                            Curso de Excel Avançado. Tabalho com fórmulas complexas, tabelas e gráficos dinâmicos, macros, etc.<br>
                            Para ficar de uma forma mais legível e organizada, informe cada curso e sua breve descrição em um campo. Assim adicione quantos campos precisar. <br>
                            Ao final dessa seção tem um botão <strong>+ Adicionar Curso</strong>, clique e adicione quantas forem preciso.
                        </p>
                    </div>

                    <div class="formulario-1-coluna" id="outros-cursos">
                        <label for="mais-cursos">Descreva aqui outros cursos e habilidades caso possua</label>
                        <input type="text" name="maisCursos[]" id="mais-cursos" data-form-input="1"
                            placeholder="Ex: Curso de Excel, Word, Powerpoit  |  Curso de Digitação  |  Curso de Photoshop etc...">
                    </div>

                    <button type="button" class="btn-adicionar" onclick="clonar('#mais-cursos', '#outros-cursos')">+
                        Adicionar Curso</button>
                </fieldset>
                <input class="btn-salvar" type="submit" value="Gerar meu Currículo">
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="itens-footer">
                <img class="logo-footer" src="images/logo-preto.png" alt="Logo preto do gerador de currículos">
                <p class="copyright">&copy; Copyright Gerador de Currículos by <i>Cristiano Fernandes</i></p>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>