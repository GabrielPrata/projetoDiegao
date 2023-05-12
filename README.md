# Atividade para nota MA2
<p>
Para poder trabalhar e rodar o projeto, você irá precisar do Git instalado em sua máquina, do XAMPP (pois o PHP foi utilizado para a "componentização" de algumas partes do projeto) e de um editor de texto (Recomendo o Visual Code por conta de sua fácil integração com o Git)

Se você chegou até aqui, parabéns você não é um imbecil e esta lendo a documentação (Continue assim) 👍

Então vamos lá...
</p>

<h1 align="center">Sessão 1: Pré requisitos: ✔</h1>
<p>
Irei dividir esta sessão em alguns tópicos, são eles:
</p>
<ol>
  <li>Instalar o Visual Code;</li>
  <li>Instalar o Git;</li>
  <li>Instalar o XAMPP;</li>
  <li>Clonar o projeto;</li>
</ol>

<hr>

<h3>Tópico 1: Instalar o Visual Code</h3>
<p>
  Se nesta altura do campeonato você ainda não instalou o Visual Code na sua máquina, eu desejo do fundo do meu coração que você se foda!
  <br>
  Caso você seja um primata e ainda não tenha instalado, <a href="https://code.visualstudio.com/download" target="_blank">então clica aqui pra baixar essa porra</a> e sugiro que você reveja a aula 02 do Diegão para aprender a configurar o ambiente para que você possa programar de forma mais "confortável", o PDF está <a href="https://classroom.google.com/u/0/c/NTQyNjM0MDExNTU1/m/NTQyODQzODU2ODE3/details?hl=pt-BR" target="_blank">AQUI</a>.

<hr>

<h3>Tópico 2: Instalar o Git</h3>
<p>
  Basta clicar <a href="https://git-scm.com/downloads" target="_blank">AQUI</a> e você será redirecionado para a páginas de downloads do git. A instalação não tem segredos, só ir clicando em "next"...
</p>

<hr>

<h3>Tópico 3: Instalar o XAMPP</h3>
<p>
  Só efetuar o download do <a href="https://www.apachefriends.org/pt_br/index.html" target="_blank">instalador</a> e ir clicando em "next", não tem mistério.
</p>

<hr>

<h3>Tópico 4: Clonar o projeto</h3>
<p>
  <b>*PRESTE MUITA ATENÇÃO AQUI, SEU ANIMAL*</b>
  <br>
  Você vai precisar clonar o projeto dentro do Apache do XAMPP para rodar a aplicação, pois como já dito anteriomente está sendo utilizado o PHP em algumas partes do código.
  <br>
  <blockquote><em>"ain mas como eu vou saber qual é a pasta do XAMPP?"</em></blockquote>
  <br>
  Bom, se você não foi um cabaço e não alterou o local de instalação padrão do XAMPP, basta copiar a linha abaixo:
  <br>
  <!--sec data-title="Prompt: Windows" data-id="windows_prompt2" data-collapse=true ces-->

    C:\xampp\htdocs

  <!--endsec-->
  <br>
  Caso você tenha alterado, (novamente eu desejo que você se foda) basta localizar onde o XAMPP está instalado e navegar até a pasta <b><em>htdocs</em></b>.
  <br>
  Após estar dentro da pasta <b><em>htdocs</em></b>, clique em qualquer lugar com o botão direito do mouse e procure a seguinte opção <em>Git Bash Here</em> conforme a imagem abaixo:
 <br>
 
 ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/673ffd50-c2cb-4068-870b-d7f20c919504)
 
 <br>
 Logo depois de clicar nessa opção, o terminal do git será aberto, conforme a imagem abaixo:
 <br>
 
 ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/96cccf12-d75a-4bdf-afaa-364d0e432927)

 <br>
 Bom, depois disso basta colar este comando abaixo:
 
  <!--sec data-title="Prompt: Windows" data-id="windows_prompt2" data-collapse=true ces-->

     git clone https://github.com/GabrielPrata/projetoDiegao.git

  <!--endsec-->
 
 Caso o você esteja usando o Git na sua máquina pela primeira vez e o comando não funcione, pode ser que você tenha que inserir seu e-mail para poder começar a usasr a ferramenta. Caso isso realmente aconteça pesquise no Google como fazer isso, pois eu estou com preguiça de ensinar um marmanjo com 20 anos nas costas no segundo ano de sistemas a como configurar o Git 👍
  
  <br>
  
  E pronto pequeno imbecil, agora basta abrir a pasta do projeto no Visual Code e ser feliz! 🥰😄
  <br>
 <hr>
</p>

<h1>Sessão 2: Como subir um Commit pelo Visual Code: 💻</h1>
<p>
  Se você não foi um arrombado e seguiu os passos anteriores, toda vez que você fizer uma alteração no projeto, o visual code irá exibir para você quais foram os arquivos que foram alterados e quais foram as alterações feitas. Para ver as alterações, basta procurar por este ícone no menu esquerdo do seu Visual Code:
  
  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/5df5229c-8a31-40d2-9ff6-0bb52cd61681)

  <em>No meu caso está com 22 alterações pois usei como exemplo um projeto do meu trampo...</em>
  <br>
  <br>
  Após clicar no ícone, serão exibidos todos os arquivos alterados e o que foi alterado em cada um deles, conforme o exemplo: (áreas circuladas em vermelho)
  
  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/bd6d215f-55d1-4585-aee1-66fa65d48a54)

  <br>
  <br>
  <blockquote><em>Ain Prata mas como eu faço o Commit com as alterações?</em></blockquote>
  <br>
  
  Calma sua anomalia, antes por questões de padronização há alguns prefixos utilizados para saber o que foi feito no preto. Irei citar apenas alguns que são os mais utilizados e que provavelmente serão utilizados apenas eles em cada projeto. São eles:
  <ol>
    <li>[wip] --> Utilizado quando uma funcionalidade ainda não concluída.</li>
    <li>[fix] --> Utilizado para a correção de bugs e quando finalizamos alguma funcionalidade</li>
    <li>[style] --> Utilizado quando apenas o estilo da aplicação foi alterada</li>
  </ol>
  Caso você tenha se interessado por essas semânticas de Commits, basta pesquisar no Google mais informações (Ou pergunta pro GPT mesmo, foda-se). Mas esses serão os mais utilizados nesse projeto.
  <br>
  Agora sim você esta apto a subir um commit para o projeto, jovem primata 🎉🐵
  <br>
  Para subir um commit com o Visual Code é simples, após clicar no simbolo já mostrado acima uma caixa de texto será aberta e abaixo dela um botão esctrito "Commit".
  <br>
  Basta escrever com a respectiva semântica o que foi feito e enviar o commit, conforme a imagem abaixo: (Novamente, irei usar um exemplo do meu trampo rs)
  
  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/780cf57b-63ea-4064-a31d-090edd447863)

<br>
<br>
Após escrever o que foi feito, basta clicar no botão de Commit e você irá perceber que os arquivos alterados irão sumir da fila. Em seguida clique em <b>Sync Changes</b> para sincronizar a sua máquina com o repositório aqui do GitHub.

![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/b661d016-0d1d-4565-a16c-756a60f39362)

E pronto, as alterações foram salvas!

</p>
<hr>
<h1>Sessão 3: Como utlizar o Materialize, atualizar o projeto e reaproveitar funcionalidades já implementadas ⚙</h1>
<p>
  Bom, para facilitar a vida miserável de vocês irei deixar aqui alguns macetes do Materialize (Framework CSS utilizado no desenvolvimento).
  Minha primeira dica é: <h3><b>LEIAM A DOCUMENTAÇÃO DOS CARAS</b></h3>
  
  Uma das grandes vantagens do Materialize é a caralhada de coisas já prontas que eles oferecem na documentação deles. Então <b>LEIAM A <a href="https://materializecss.com" target="_blank">DOCUMENTAÇÃO!</b>
  <br>
  Formulários, Corrséis, Collapsibles, Modals, Botões, tabela de cores, exemplos do sistema de grid, já esta TUDO pronto.
  <br>
  Então vamos aprender a como criar uma nova página para o projeto...
  <hr>
  <h3 align="center">COMO CRIAR UMA NOVA PÁGINA</h3>
  Antes de mais nada, sempre utilize como padrão a página Home, busque todas as referências nela.
  <br>
  Sempre crie seus arquivos como <b>.php</b>, para poder incluir a navbar e o rodape em sua página (estes que já estão prontos).
  <blockquote><em>Hurdur como faço para incluir a navbar e o rodapé????</em></blockquote>
  <br>
  Bom, seu acéfalo eu já falei para você usar a página home como referência, basta inserir estas linhas no seu HTML:
 
  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/1436f621-1d37-47a2-9d1f-ff709eec4b00)
  
  <em>O exemplo refere-se a navbar, para o rodapé basta você fazer este include no final da página (sempre dentro da tag "body")</em>
  <br>
  
  Para que o Materialize seja chamado na sua página, você precisa incluir o arquivo .css, o arquivo .js e também chamar o JQuery para a página, segue o exemplo abaixo:
  
  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/011c9a71-3025-40a5-999c-f00830ec56b9)

  Os arquivos de importação usados são:
  <ul>
    <li>materialize.css</li>
    <li>materialize.min.js</li>
    <li>https://code.jquery.com/jquery-3.7.0.min.js</li>
  </ul>
  
  Crie uma folha de estilo (um arquivo .css, animal) para a página que você fazer, por questões de otimização e organização (e também porque eu não quero nenhum arrombado zaralhando meu css).
  <br>
  Agora iremos abordar o <b>init.js</b>, tenha muito cuidado ao mexer nele, seu fodido!
  <hr>
  <h3>ADICIONANDO ELEMENTOS E FUNCIONALIDADES DO MATERIALIZE NA SUA PÁGINA</h3>
  Caso você precise adicionar um novo elemento a uma página que utlize de JQuery, basta chamá-lo no arquivo <b><em>init.js</em></b> localizado dentro do diretório <b><em>js</em></b>:

  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/ac996957-53eb-420d-a3e8-f8c49e0f6d6c)
  <em>Localização do arquivo</em>
  
  <br>
  
  <blockquote><em>Ain Prata mas como que eu faço pra adicionar um novo elemento nesse arquivo?</em></blockquote>
  <br>
  Bom, filhote de cruz credo, sempre que tu for pegar alguma coisa dentro do Materialize, na página do elemento procure por essa sessão:

  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/774cb6d7-8ab9-4154-bc45-c362ed8761b7)
  
  Normalmente, os elementos que utlizam o JQuery estão dentro da aba de JavaScript. (Não me lembro se há um ou outro perdido, então presta atenção pra depois não vir falar "ain não ta funcionando tal coisa").

  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/cfcdc8b2-c2c8-4ed8-ac97-b63bcde07faa)

  <em>Normalmente estão dentro dessa sessão</em>
  
  Bom, o que isso quer dizer? Isso quer dizer seu jumento que você precisa incluir a chamada da função JQuery para que a funcionalidade funcione conforme o esperado.
  Voltando para a sessão <em>Initialization</em>, você vai incluir a linha em destaque dentro do arquivo <b>init.js</b>.
  
  ![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/cba84eaa-4b16-4e3d-9eb9-ae3202c266e9)

![image](https://github.com/GabrielPrata/projetoDiegao/assets/49907324/12519d0e-1670-499b-adfb-cb3207fd3fe0)

  <br>
  E pronto! A função JQuery foi chamada para o elemento "modal" no exemplo acima. Novamente <b>TENHA CUIDADO AO MEXER NESSA PORRA DESSE ARQUIVO</b> pois ele é utilizado em todo o projeto, se você fizer merda nele, você vai enfiar o projeto todo no cu!
  <br>
  Para pegar o corpo do elemento, basta olhar a documentação pois nela há muitos exemplos de como implementar cada funcionalidade (é só dar CRTL + C/ CTRL + V, burro) no HTML e colar na sua página. Vale lembrar que todo esse lance do <b>init.js</b> é apenas para elementos que utilizem o JQuery, para os que não usam bastam apenas adicionar os elementos HTML como os inputs, por exemplo, que eles já puxam toda a formatação sozinhos ou adicionar as classes CSS, como nos botões. Agora iremos abordar essas classses CSS...
  
</p>

# Banco de Imagens PoliGrill
[Clique Aqui](https://drive.google.com/drive/folders/1C3AnX5FMFl0c0Wq3pSCnvCgcP5QLV3vr?usp=sharing)
