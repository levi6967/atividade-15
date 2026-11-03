# atividade-15

Sistema de Login e Perfil em PHP 🐘

Este é um projeto simples de sistema de login e personalização de perfil desenvolvido em PHP e HTML. Ele exemplifica a manipulação de requisições POST, validação de dados de formulário, prevenção contra ataques XSS e controle de acesso básico.

🚀 Funcionalidades

Controle de Acesso: Redirecionamento automático para a tela de login (15d_login.php) caso o usuário tente acessar a página de perfil sem informar o nome.

Personalização de Tema: Permite definir a cor de fundo do perfil (lightgray, lightblue, lightgreen) via parâmetro POST.

Segurança Básica:

Sanitização de entrada de texto utilizando htmlspecialchars() para prevenção contra XSS.

Validação da cor selecionada através de uma lista de valores permitidos (whitelist).

Logout: Página simples de encerramento de sessão.

📁 Estrutura do Projeto

.
├── 15d_login.php    # Formulário de autenticação e seleção de cor (não incluído neste trecho)
├── 15d_perfil.php   # Validação dos dados do usuário e exibição do perfil personalizado
└── 15d_logout.php   # Confirmação de desconexão e redirecionamento


🛠️ Tecnologias Utilizadas

PHP (versão 7.0 ou superior)

HTML5

📋 Como Executar o Projeto

Pré-requisitos:
Certifique-se de ter um ambiente de servidor local instalado, como:

XAMPP

WampServer

Ou o próprio servidor embutido do PHP.

Passos:

Clone este repositório para o diretório raiz do seu servidor web (ex: htdocs no XAMPP):

git clone https://github.com/seu-usuario/seu-repositorio.git


Inicie o servidor PHP. Se estiver usando o servidor embutido do PHP, execute no terminal dentro da pasta do projeto:

php -S localhost:8000


Acesse a aplicação através do navegador em:

http://localhost:8000/15d_login.php


🔒 Segurança Aplicada

Validação de Entrada (POST): Uso do operador null coalesce (??) para evitar erros de índice indefinido (Undefined Index).

Proteção contra Cross-Site Scripting (XSS):

htmlspecialchars($usuario ?? '', ENT_QUOTES, 'UTF-8');


Validação por Whitelist:

$coresPermitidas = ['lightgray', 'lightblue', 'lightgreen'];
if (!in_array($cor, $coresPermitidas)) {
    $cor = 'lightgray';
}


📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
