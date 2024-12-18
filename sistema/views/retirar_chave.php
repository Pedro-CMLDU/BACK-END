<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keybox -Retirar Chave</title>
    <link rel="stylesheet" href="../css/estilo-chave.css"> <!-- Referência ao arquivo CSS externo -->
</head>
<body>
    <div class="retangulo-superior">
        <div class="keybox">
         <img src="../imagem/logo.png" alt="keybox">
        </div>
        <div class="imglogosenac">
         <img src="../imagem/logosenac.png" alt="logosenac" class="img_senac_logo">
     </div>
     </div>
    <nav class="breadcrumb">
        <a href="../index_menu.html">Início > Retirar </a> 
    
    </nav>


    <div class="container">
        <!-- Breadcrumb de navegação -->
        <!-- Formulário de adição de nova chave -->
        <div class="form-container">
            <h2>Retirar   Chave</h2>
            <form class="formulario">
                <div class="form-inputs">
                    <div class="quem-retirou">
                        <label for="descricao" class="custom-label">Quem retirou:</label>
                        <input type="text" id="descricao" name="Pesquise por : Nome, Cargo, Contato" placeholder="Pesquise por : Nome, Cargo, Contato">
                    </div>
                    <div class="data-hora">
                        <div class="data">
                            <label for="sala" class="custom-label">Data:</label>
                        <input class="data-horainput" type="text" id="06/08/2024" name="06/08/2024" placeholder="06/08/2024">
                        </div>
                        <div class="hora">
                            <label for="localizacao" class="custom-label">Hora:</label>
                        <input class="data-horainput" type="text" id="08:17" name="08:17" placeholder="08:17">
                        </div>
                        
                        
                    </div>
                    <div class="chave">
                        <label for="Chave" class="custom-label">Chave:</label>
                        <input type="text" id="sala 07" name="sala 07" placeholder="sala 07">
                    </div>                    
                </div>
                <div class="form-botoes">
                    <button type="submit" class="butao">Salvar</button>
                    
                    <button type="submit" class="butao">Cancelar</button>
                   
                </div>

               
            </form>
        </div>
    </div>
</body>
</html>

