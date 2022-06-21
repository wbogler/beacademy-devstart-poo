<?php

    //include 'Aluno.php';
    //include 'Professores.php';
    //include 'Cursos.php';

    include 'vendor/autoload.php';

    //aluno
    $a1 = new Aluno();
    $a1-> nome = "Gustavo";
    $a1 -> cpf = "012.361.058-86";

    //curso
    $cursoJava = new Cursos;

    $cursoJava -> curso = "Java";
    $cursoJava -> descricao = "Introdução à linguagem Java";
    $cursoJava -> cargaHoraria = 40;

    //professor
    $prof = new Professores;

    $prof -> nome = "Carlos Maia";
    $prof -> cpf = "052.658.632-17";
    $prof -> salario = 8400;

    echo"<h2>{$cursoJava -> curso}</h2>";
    echo"<h3>Professor: {$prof -> nome}</h2>";
    echo"<h4>Aluno matriculado: {$a1-> nome}</h2>";





