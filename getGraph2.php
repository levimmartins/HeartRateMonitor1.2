<?php
    session_start(); 
    include("connection/connection.php");
    
    require_once 'phplot620/phplot.php';
    
    $idUser =  $_SESSION['idUser'];
    $querySelecao = "SELECT taxaHRM, dataRegistro FROM hrm WHERE  user_idUser = ".$idUser." ";
    $resultado = mysqli_query($conn, $querySelecao); 

    $data = array();
    $index = 0;
    //$desc = ['Compartilhamento','Leituras','Monitoramento BPM',''];
    while($registros = mysqli_fetch_object($resultado)){      
             array_push($data, array($registros->dataRegistro, (float)$registros->taxaHRM)); 
             $index++;
    }
    
  //  print_r($data);
   
    $plot = new PHPlot(960 , 550); 
    
    // Organiza Gráfico -----------------------------
    $plot->SetTitle('Taxas de batimentos cardiacos por minutos Registradas');
    # Precisão de uma casa decimal
    $plot->SetPrecisionY(0);
    # tipo de Gráfico em barras (poderia ser linepoints por exemplo)
   // $plot->SetPlotType("bars");
    # Tipo de dados que preencherão o Gráfico text(label dos anos) e data (valores de porcentagem)
    $plot->SetDataType("text-data");
    # Adiciona ao gráfico os valores do array
    $plot->SetDataValues($data);
    // -----------------------------------------------
    
    
    // Organiza eixo X ------------------------------
    # Seta os traços (grid) do eixo X para invisível
    $plot->SetXTickPos('none');
    # Texto abaixo do eixo X
    $plot->SetXLabel("Descricao: Taxas registradas diariamente");
    # Tamanho da fonte que varia de 1-5
    $plot->SetXLabelFontSize(4);
    $plot->SetAxisFontSize(2);
    // -----------------------------------------------

    
    
    // Organiza eixo Y -------------------------------
    # Coloca nos pontos os valores de Y
    $plot->SetYDataLabelPos('plotin');
    
    
     
    // Desenha o Gráfico -----------------------------
    $plot->DrawGraph();
?>