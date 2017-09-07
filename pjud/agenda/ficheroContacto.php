<?php
 include ('conexion.php');
 mysql_select_db ("agenda", $link);    
 $sql = "SELECT nombre,telefono,correo,contacto,direccion,observaciones FROM agenda ORDER BY nombre ASC";
 $resultado = mysql_query ($sql, $link) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);
  
 if ($registros > 0) {
   require_once 'lib/PHPExcel/PHPExcel.php';
   $objPHPExcel = new PHPExcel();
    
   //Informacion del excel
   // Se crea el objeto PHPExcel
        $objPHPExcel = new PHPExcel();

        // Se asignan las propiedades del libro
        $objPHPExcel->getProperties()->setCreator("Unidad de Sala") //Autor
                             ->setLastModifiedBy("Unidad de Sala") //Ultimo usuario que lo modificó
                             ->setTitle("Agenda Telefonica")
                             ->setSubject("Agenda Telefonica")
                             ->setDescription("Agenda Telefonica")
                             ->setKeywords("Agenda Telefonica")
                             ->setCategory("Reporte excel");

        $tituloReporte = "Agenda Telefonica";
 
         $titulosColumnas = array('Nombre','Telefono','Correo','Contacto','Direccion','Observaciones');
        $objPHPExcel->setActiveSheetIndex(0) 
                  ->mergeCells('A1:D1');
                        
        // Se agregan los titulos del reporte
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1',$tituloReporte)
                    ->setCellValue('A3',  $titulosColumnas[0])
                    ->setCellValue('B3',  $titulosColumnas[1])
                    ->setCellValue('C3',  $titulosColumnas[2])
                    ->setCellValue('D3',  $titulosColumnas[3])
                    ->setCellValue('E3',  $titulosColumnas[4])
                    ->setCellValue('F3',  $titulosColumnas[5]);
        
        
        //Se agregan los datos
        $i = 4;
        while ($fila  = mysql_fetch_array($resultado) )  {
            $objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A'.$i,  $fila['nombre'])
                            ->setCellValue('B'.$i,  $fila['telefono'])
                            ->setCellValue('C'.$i,  $fila['correo']) 
                             ->setCellValue('D'.$i,  $fila['contacto'])  
                            ->setCellValue('E'.$i,  $fila['direccion'])
                             ->setCellValue('F'.$i,  $fila['observaciones']) ;
                    $i++;
        }
                
$estiloTituloReporte = array(
    'font' => array(
        'name'      => 'Verdana',
  //      'bold'      => true,
        'italic'    => false,
        'strike'    => false,
        'size' =>17,
        'color'     => array(
        'rgb' => '000000'
        )
    ),
 //   'fill' => array(
 //       'type'  => PHPExcel_Style_Fill::FILL_SOLID,
//      'color' => array(
 //           'rgb' => '1F4089')
 //   ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_NONE
        )
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'rotation' => 0,
        'wrap' => TRUE
    )
);
 
$estiloTituloColumnas = array(
        'font' => array(
        'name'  => 'Verdana',
        'size' =>11,
       // 'bold'  => true,
        'color' => array(
        'rgb' => 'ffffff'
        )
    ),
    'fill' => array(
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
        'rotation'   => 90,
        'startcolor' => array(
            'rgb' => '3D81C4'
        ),
        'endcolor' => array(
            'argb' => '072B55'
        )
    ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    ),
   
    'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
    )
);
 
$estiloInformacion = new PHPExcel_Style();
$estiloInformacion->applyFromArray( array(
    'font' => array(
                 'name'  => 'Arial',
                 'size' =>10,
                 'color' => array(
                 'rgb' => '000000'
                    )
    ),
    'fill' => array(
    'type'  => PHPExcel_Style_Fill::FILL_SOLID,
    'color' => array(
    'rgb' => 'ffffff')
    ),
    'borders' => array(
    'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN ,'color' => array('rgb' => '000000')),
    'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN ,'color' => array('rgb' => '000000')),
    'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN ,'color' => array('rgb' => '000000'))
                    ),
    'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => FALSE,
         
    )
  
));
//COLOR FONDO EXCEL
$objPHPExcel->getDefaultStyle()->applyFromArray(
    array(
        'fill' => array(
            'type'  => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'FFFFFF')
        ),
    )
);
 
$objPHPExcel->getActiveSheet()->getStyle('A1:F1')->applyFromArray($estiloTituloReporte);
$objPHPExcel->getActiveSheet()->getStyle('A3:F3')->applyFromArray($estiloTituloColumnas);
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:F".($i-1));  
 
        for($i = 'A'; $i <= 'F'; $i++){
            $objPHPExcel->setActiveSheetIndex(0)            
                ->getColumnDimension($i)->setAutoSize(true);
        } 
                
               //  $objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);       
              //   $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
         
                                    
     
        // Se asigna el nombre a la hoja
        $objPHPExcel->getActiveSheet()->setTitle('Agenda');

        // Se activa la hoja para que sea la que se muestre cuando el archivo se abre
        $objPHPExcel->setActiveSheetIndex(0);
        // Inmovilizar paneles 
        //$objPHPExcel->getActiveSheet(0)->freezePane('A4');
        $objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

        // Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Agenda.xlsx"');   
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
        
    }
    else{
        print_r('No hay resultados para mostrar');
    }
 

?>