<?php

/* O que é uma classe?
 * Uma classe é um molde (ou template) que define as características e comportamentos de um objeto.
 * Ela serve como um modelo para criar objetos específicos, permitindo a reutilização de código e a
 * organização de dados relacionados.
 * */

// Diferença entre classe e objeto:
// - Classe: É a definição ou o molde que descreve as propriedades (atributos/variáveis) e comportamentos (métodos) de um tipo específico de objeto.
// - Objeto: É uma instância concreta de uma classe, que possui valores específicos para suas propriedades e pode executar os métodos definidos na classe.

// Deve ter responsabilidade única (Single Responsibility Principle - SRP)
// Deve ser coesa (Coesão)
// Deve ter Baixo Acoplamento
// Deve ser reutilizável (Reusabilidade)

require_once "Pessoa.php";

//Instanciando a classe (criando um objeto):
$pessoaInstanciada = new Pessoa;
$pessoaInstanciada->idade = 24;
$pessoaInstanciada->nome = "Nicole";
$pessoaInstanciada->email = "email@email.com";

echo $pessoaInstanciada->dados();