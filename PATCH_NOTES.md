### Patch Notes

## [Versão 1.1.2] - 2024-08-27

## Adicionado

- **Popup de saída para a página Home**: Criado uma função que ativa o popup de saída, juntamente com o estilo desse popup;
- **Seção antecedente a Hero**: Criado a seção que antecede a hero dos posts.

### Removido

- **Códigos repetidos**: Removido o template-parts do conteúdo da newsletter e movido para o componente do `footer.php`.

### Alterado

- **Logo**: Alterado a logo tanto no `header.php` quanto no `footer.php` para a logo com a tag do Blog.

### Patch Notes

## [Versão 1.1.1] - 2024-07-22

## Adicionado

- **Formulário do Mautic**: Inserido o shortcode da newsletter da Rankdone.
- **Estilização do formulário do Mautic**: Estilizado o formulário do mautic para seguir com o layout desenvolvido.

### Removido

- **Código CSS anterior**: Removido linhas de CSS que estilizavam o formulário estático.

## [Versão 1.1.0] - 2024-07-05

### Adicionado

- **Sticky Post na Hero do Index**: Agora é possível adicionar um post destacado na seção hero da página inicial.

### Removido

- **Linhas sobre o uso do ACF na seção Hero**: As referências ao ACF foram removidas do container direito na seção hero, bem como a mensagem no `functions.php` que requeria o ACF.

### Alterado

- **Logo da Rankdone como SVG**: A logo da Rankdone agora é exibida como SVG e o upload de outros formatos não é permitido.
- **Regra do Loop de Posts no Index**: O loop de posts na página inicial foi ajustado para exibir apenas 9 posts, mesmo quando há um sticky post ativo.
- **Ordem dos Scripts do Swiper JS**: A ordem de criação dos scripts do Swiper JS foi alterada para corrigir problemas iniciais de quebra de código.
- **JS do Conteúdo do Post**: Ajustes foram feitos no JavaScript para remover espaços em branco indesejados no conteúdo dos posts.
- **Ano do Post**: Agora o ano de publicação dos posts é exibido.
- **Next Page Numbers na Pesquisa**: A navegação da pesquisa foi alterada para exibir `>>` ao invés de `Próximo`.
- **Seção Estática do Index**: A seção estática do index foi configurada para não utilizar o theme customizer.
- **CSS das Categorias com Texto Extenso**: Ajustes no CSS foram feitos para corrigir problemas de filtragem em categorias com textos mais longos.
- **Classe para Conteúdo de Posts Altos**: Foi adicionada uma classe para ativar uma barra de rolagem vertical quando o conteúdo do post exceder a altura da janela.
- **Página do Autor**: Uma verificação foi criada para excluir elementos `<p>` vazios e a `div.title` foi configurada com `flex: 1`.
- **Ícones de Data e Leitura na Hero**: Correções foram feitas nos ícones de data e leitura que estavam quebrados.
- **Remoção do Sticky Post dos Loops**: O sticky post foi removido dos loops de postagens.
- **Fallback para Widgets do Rodapé**: Implementada verificação para criação de um fallback para os widgets do rodapé.
