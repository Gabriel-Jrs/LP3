
    <?php
    require_once "Livro.php";

    $l1 = new Livro();

    $l1->titulo = "Biologia";
    $l1->autor = "Biologo";
    $l1->qtdePags = 44;
    $l1->qtdeExemplares = 12;

    $l1->emprestarLivro();
    $l1->devolverLivro();
    $l1->verificarDisponibilidade();
    $l1->alterarQuantidadePaginas(34);
    $l1->exibirInformacoes();
    $l1->compararPaginas(45);


    $l2 = new Livro();
    $l2->titulo = "Historia";
    $l2->autor = "Professor";
    $l2->qtdePags = 45;
    $l2->qtdeExemplares = 10;

    $l2->emprestarLivro();
    $l2->devolverLivro();
    $l2->verificarDisponibilidade();
    $l2->alterarQuantidadePaginas(12);
    $l2->exibirInformacoes();
    $l2->compararPaginas(23);


    $l3 = new Livro();
    $l3->titulo = "Geografia";
    $l3->autor = "Professora";
    $l3->qtdePags = 23;
    $l3->qtdeExemplares = 120;

    $l3->emprestarLivro();
    $l3->devolverLivro();
    $l3->verificarDisponibilidade();
    $l3->alterarQuantidadePaginas(789);
    $l3->exibirInformacoes();
    $l3->compararPaginas(44);


    //echo "<pre>";
    //print_r($g1);
    //print_r($g2);
    //print_r($g3);
 
