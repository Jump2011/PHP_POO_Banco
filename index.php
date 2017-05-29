<!DOCTYPE html>
 <!-- @Junio -->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <pre>
        <?php
        
        require_once 'ContaBanco.php';
        
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();
        
        $p1->abrirConta("cc");
        $p1->setNumConta(1234);
      $p1->setDono("Junio");
      $p1->depositar(30);
      $p1->fecharConta();
      $p1->sacar(80);
      $p1->fecharConta();
      
        $p2->abrirConta("cp");
              $p2->setNumConta(1235);
      $p2->setDono("Ana");
      $p2->depositar(200);
      $p2->sacar(40);
      $p2->sacar(1000);
      $p2->pagarMensal();
      $p2->fecharConta();
      $p2->sacar(290);
      $p2->fecharConta();
      
        print_r($p1);
        print_r($p2);
        ?>
       </pre>
    </body>
</html>
