Olá primeiramente você deve baixar : https://github.com/oneclick/rubyinstaller2/releases

E quando tiver isto baixado, instale, para baixar os mangas é o seguinte

Instalação
Windows
Primeiro você precisa ter ruby instalado, você pode baixar ruby deste site, basta baixar um dos instaladores que estão abaixo do titulo 'Downloads', algo com o nome similar a rubyinstaller-2.4.1-1rc3-x86.exe (pode ser uma versão superior) para arquitetura 32 bits e rubyinstaller-2.4.1-1rc3-x64.exe para 64.

Com o ruby instalado. Abra o prompt de comando.

No prompt digite:

gem install dmanga

Digite Enter para executar o comando.

Com isso o script/programa será instalado.

Você pode atualizar o script/programa com:

gem update dmanga

E para remover a versão anterior:

gem clean

Atualize sempre para obter melhoras (desempenho ou novas funcionalidades) e correções de bugs.

Linux (debian/ubuntu)
Abra o terminal.

Se você não tem o ruby instalado:

$ sudo apt-get install ruby

Em seguida:

$ gem install dmanga

Pode ser necessário usar o sudo.

Você pode atualizar o script/programa com:

$ gem update dmanga

E para remover a versão anterior:

$ gem clean

Atualize sempre para obter melhoras (desempenho ou novas funcionalidades) e correções de bugs.

Obs: Eu não cheguei a testar em versões do ruby abaixo do 2.4.1, em caso de problema procure na internet como instalar a versão do ruby 2.4.1 ou superior.

Uso
dmanga [opções] <nome do manga>

obs: o script/programa é executado no prompt.

Ex1:

dmanga "one piece"

Ex2:

dmanga tomo-chan

Ex3:

Também é possível pesquisar o nome do manga em japonês.

dmanga "???"