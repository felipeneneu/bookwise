<?php

$books = [
  [
    'id' => 1,
    'title' => 'Harry Potter e a Pedra Filosofal',
    'author' => 'J.K. Rowling',
    'descricao' => 'Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. ',
    'capa' => './assets/img/81ibfYk4qmL._AC_UF1000,1000_QL80_.jpg'
  ],
  [
    "id" => 2,
    "title" => "1984",
    "author" => "George Orwell",
    "descricao" => "Uma distopia que explora o totalitarismo, a vigilância e a repressão do pensamento.",
    "capa" => "https://example.com/capas/1984.jpg"
  ],
  [
    "id" => 3,
    "title" => "O Pequeno Príncipe",
    "author" => "Antoine de Saint-Exupéry",
    "descricao" => "Uma fábula poética sobre o valor da amizade, do amor e da imaginação.",
    "capa" => "https://example.com/capas/pequeno-principe.jpg"
  ],
  [
    "id" => 4,
    "title" => "Orgulho e Preconceito",
    "author" => "Jane Austen",
    "descricao" => "Um romance que explora o amor e as convenções sociais da Inglaterra do século XIX.",
    "capa" => "https://example.com/capas/orgulho-preconceito.jpg"
  ],
  [
    "id" => 5,
    "title" => "O Hobbit",
    "author" => "J.R.R. Tolkien",
    "descricao" => "A jornada de Bilbo Bolseiro, que descobre coragem e amizade em uma aventura inesperada.",
    "capa" => "https://example.com/capas/o-hobbit.jpg"
  ],
  [
    "id" => 6,
    "title" => "A Revolução dos Bichos",
    "author" => "George Orwell",
    "descricao" => "Uma alegoria política sobre os perigos da tirania e corrupção.",
    "capa" => "https://example.com/capas/revolucao-bichos.jpg"
  ],
  [
    "id" => 7,
    "title" => "Dom Casmurro",
    "author" => "Machado de Assis",
    "descricao" => "Uma história intrigante de ciúme e dúvida, envolvendo o famoso triângulo amoroso de Bentinho, Capitu e Escobar.",
    "capa" => "https://example.com/capas/dom-casmurro.jpg"
  ],
  [
    "id" => 8,
    "title" => "O Apanhador no Campo de Centeio",
    "author" => "J.D. Salinger",
    "descricao" => "As aventuras e reflexões de Holden Caulfield sobre a juventude e o amadurecimento.",
    "capa" => "https://example.com/capas/apanhador-centeio.jpg"
  ],
  [
    "id" => 9,
    "title" => "Moby Dick",
    "author" => "Herman Melville",
    "descricao" => "Uma épica busca pela baleia branca, explorando a obsessão e a natureza humana.",
    "capa" => "https://example.com/capas/moby-dick.jpg"
  ]
];

insert into books (title, autor, descricao) values ('Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. ');

insert into books (title, autor, descricao) values ('1984', 'George Orwell', 'Uma distopia que explora o totalitarismo, a vigilância e a repressão do pensamento.');
insert into books (title, autor, descricao) values
('Admirável Mundo Novo', 'Aldous Huxley', 'Uma sociedade futurista que explora temas de controle social e condicionamento.'),
('Fahrenheit 451', 'Ray Bradbury', 'Em um mundo onde os livros são proibidos, a história explora a censura e a ignorância.'),
('Laranja Mecânica', 'Anthony Burgess', 'A história de um jovem envolvido em crimes violentos em uma sociedade distópica.'),
('A Revolução dos Bichos', 'George Orwell', 'Uma sátira sobre a corrupção e a tirania disfarçadas de utopia.'),
('Neuromancer', 'William Gibson', 'Um clássico da ficção científica que introduz o conceito de cyberpunk e a realidade virtual.'),
('O Conto da Aia', 'Margaret Atwood', 'Em uma sociedade totalitária, mulheres são subjugadas e têm direitos restritos.'),
('O Senhor das Moscas', 'William Golding', 'A história explora a degradação moral em um grupo de crianças isoladas em uma ilha.'),
('Jogador Número 1', 'Ernest Cline', 'Um mundo futurista em que a realidade virtual é o centro da vida social e econômica.'),
('O Homem Invisível', 'H.G. Wells', 'Uma história de ficção científica sobre um cientista que descobre o segredo da invisibilidade.'),
('Duna', 'Frank Herbert', 'Em um planeta desértico, disputas de poder e sobrevivência se desenrolam em uma saga épica.'); 



