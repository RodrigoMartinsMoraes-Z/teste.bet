# Teste prático - Desenvolvedor Donald

[![N|BH Softwares](https://imagedelivery.net/BgH9d8bzsn4n0yijn4h7IQ/de5a05ed-37f0-4eed-22cb-233beb405a00/w=1200)](https://donald.bet.br/)

**Desenvolver uma aplicação simples utilizando [Laravel 11](https://laravel.com/).**
O objetivo desta avaliação é medir o nível de conhecimento do candidato nas áreas em que a vaga será exigida.

# Escopo
Deve-se criar uma aplicação em PHP para resolver o problema descrito abaixo, utilizando framework Laravel 5. Fique a vontade para explorar todo o seu conhecimento em automação de tarefas, CSS e Javascript com JQuery, Vue.JS, e criação de APIs.

# Cenário fictício
Prof. Jubilut está lançando uma nova plataforma de ensino online. Nesta plataforma, desejamos realizar a matrícula de alunos em cursos através de um painel administrativo, bem como os dados cadastrais de cursos, alunos, disciplinas e professores de cada disciplina.

O Aluno Emanuel poderá acessar sua area administrativa para atualizar seu cadastro.

Prof. Jubilut poderá gerar um relatorio que mostrará qual a faixa média de idade em cada curso, bem como o aluno mais novo e o mais velho.

# Requisitos
- Um aluno pode ser matriculado em mais de um curso
- 2 telas de autenticação: uma àrea administrativa para gestão e cadastros e outra para o aluno poder alterar seus dados cadastrais.
- O administrador do sistema que realizará as matrículas.
- A consulta pelo nome e pelo e-mail é requisito obrigatório como filtros na tela de listagem de alunos.


#### CRUD de Áreas de Cursos
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma área de curso (Biologia, Química, Física, por exemplo). 

##### Atributos de um Curso são:
- título (obrigatório)
- descrição 
- Data de início
- Data de fim

#### CRUD de Professores
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma área de Professores. 

##### Atributos de um Curso são:
- nome (obrigatório)
- email

#### CRUD de Disciplinas
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma área de Disciplinas. 

##### Atributos de um Curso são:
- título (obrigatório)
- descrição 
- Curso ( Seleção )
- Professor ( Seleção )

#### CRUD de Alunos
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar um Aluno. 

##### Atributos de um Aluno são:
- nome (obrigatório)
- email (obrigatório)
- data de nascimento

#### CRUD de Matrículas
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma matrícula do aluno nos cursos. 

# Instruções:

- Faça fork desse repositório envie-nos um Pull Request quando estiver pronto.
- Deve ser utilizado o Laravel como framework PHP
- Deve ser utilizado o Composer para gerenciar as dependências da aplicação. 
- Crie um README com orientações para a execução.

# Plus ++ 
- Cubra pelo menos 3 recursos de seu código com testes unitários.
- Utilize as melhores práticas da Orientação a Objetos.
- As tabelas do banco de dados criadas através de migrations.
- Faça o responsivo. 
- Caso queira mostrar ainda mais sua habilidade um gráfico seria diferencial (opcional).


# Observações:

- Atenção aos detalhes do front-end devem ser em VUE.JS e back-end via API do Laravel, serão avaliados.
- Não precisa ser complexo, com varias lib’s e etc. 
- O legal é usar o necessário para ter um código de qualidade e de fácil evolução. 
- Lembrando código de qualidade, você pode e deve fazer o que achar necessário para isso, mesmo que não esteja listado aqui. 

Em caso de dúvidas, envie-nos um e-mail para goc.tech@donald.bet 
