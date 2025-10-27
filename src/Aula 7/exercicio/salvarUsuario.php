<?php
    // Adicione o topo para carregar o CSS
    include_once ("topo.html");
    // Adicione o menu para manter a navegação
    include_once ("menu.php");

    $arquivo_json = 'usuarios.json';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome']; 
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        if (file_exists($arquivo_json) && filesize($arquivo_json) > 0){ 
            $conteudo_json = file_get_contents($arquivo_json); 
            $usuarios = json_decode($conteudo_json, true);

            if ($usuarios === null || !is_array($usuarios)){  
                $usuarios = [];
            }

        } else {
            $usuarios = [];
        }

        $novo_id = count($usuarios) + 1;
        $novo_usuario = [
            'id' => $novo_id,
            'nome' => $nome, 
            'email' => $email,
            'senha' => $senha
        ];
        $usuarios[] = $novo_usuario; 

        $novo_conteudo_json = json_encode($usuarios, JSON_PRETTY_PRINT); 

        if (file_put_contents($arquivo_json, $novo_conteudo_json)){ 
            echo "Usuário cadastrado com Sucesso!<br><br>";
            // A lista de clientes agora aparecerá dentro do layout
            include_once ("clientes.php"); 
        } else{
            echo "Erro ao salvar usuário.";
        }
    
    } else { 
        echo "metodo de requisicao inválido.";
    }

    // Adicione o rodapé para fechar as tags HTML
    include_once ("rodape.php");
?>