Ol� primeiramente voc� deve baixar : https://github.com/oneclick/rubyinstaller2/releases

E quando tiver isto baixado, instale, para baixar os mangas � o seguinte

Instala��o
Windows
Primeiro voc� precisa ter ruby instalado, voc� pode baixar ruby deste site, basta baixar um dos instaladores que est�o abaixo do titulo 'Downloads', algo com o nome similar a rubyinstaller-2.4.1-1rc3-x86.exe (pode ser uma vers�o superior) para arquitetura 32 bits e rubyinstaller-2.4.1-1rc3-x64.exe para 64.

Com o ruby instalado. Abra o prompt de comando.

No prompt digite:

gem install dmanga

Digite Enter para executar o comando.

Com isso o script/programa ser� instalado.

Voc� pode atualizar o script/programa com:

gem update dmanga

E para remover a vers�o anterior:

gem clean

Atualize sempre para obter melhoras (desempenho ou novas funcionalidades) e corre��es de bugs.

Linux (debian/ubuntu)
Abra o terminal.

Se voc� n�o tem o ruby instalado:

$ sudo apt-get install ruby

Em seguida:

$ gem install dmanga

Pode ser necess�rio usar o sudo.

Voc� pode atualizar o script/programa com:

$ gem update dmanga

E para remover a vers�o anterior:

$ gem clean

Atualize sempre para obter melhoras (desempenho ou novas funcionalidades) e corre��es de bugs.

Obs: Eu n�o cheguei a testar em vers�es do ruby abaixo do 2.4.1, em caso de problema procure na internet como instalar a vers�o do ruby 2.4.1 ou superior.

Uso
dmanga [op��es] <nome do manga>

obs: o script/programa � executado no prompt.

Ex1:

dmanga "one piece"

Ex2:

dmanga tomo-chan

Ex3:

Tamb�m � poss�vel pesquisar o nome do manga em japon�s.

dmanga "???"