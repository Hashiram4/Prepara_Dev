  <div class="linhas">
    <!-- Para cada um registro de apostila no banco será criada uma linha -->
    <?php
      echo '<div class="linha ';
      if ($i % 2 == 0) {
        echo 'lightblue';
      }else{
        echo 'blue';
      }
      echo'">';
      $i = $i + 1;
    ?>
    <!-- Parte que mudará, pois é preciso consultar o banco de dados -->
      <div class="nome"><?php echo $linha["nome"];?></div>
      <div class="quantidade"><?php echo $linha["quantidade"];?></div>
    <!-- Parte que mudará, pois é preciso consultar o banco de dados -->
      <div class="linha_botoes"></div>
      <div class="funcoes">
        <div class="funcoes-inner">
          <div>
            <button class="editar type="btn" onclick="<?php echo "editarApostila('".$linha["nome"]."','#window_editar');";?>">Editar</button>
          </div>
          <div class="atalhos">
            <button type="btn" class="funcao" onclick="<?php echo "selecionarApostila('".$linha["nome"]."','#window_adicionar');";?>"><img src="imagens/icone_adicionar.gif" onMouseOver="this.src='imagens/icone_adicionar_selecionado.gif'" onMouseOut="this.src='imagens/icone_adicionar.gif'"></button>
            <button type="btn" class="funcao" onclick="<?php echo "diminuirApostila('".$linha["nome"]."','#window_diminuir');";?>"><img src="imagens/icone_diminuir.gif" onMouseOver="this.src='imagens/icone_diminuir_selecionado.gif'" onMouseOut="this.src='imagens/icone_diminuir.gif'"></button>
            <button type="btn" class="funcao" onclick="<?php echo "selecionarExcluir('".$linha["nome"]."','#window_excluir');";?>"><img src="imagens/icone_excluir.png" onMouseOver="this.src='imagens/icone_excluir_selecionado.png'" onMouseOut="this.src='imagens/icone_excluir.png'"></button>
          </div>
        </div>
      </div>
    </div>
  </div>