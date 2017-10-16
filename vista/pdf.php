<?php 
 
                        // Instanciation of inherited class
                        $pdf = new PDF();
                        $pdf->AliasNbPages();
                        $pdf->AddPage();
                        $pdf->SetFont("Times", "", 12);


                        $pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
                        $pdf->Ln(10);
                        //********************
                        $pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

                         $pdf->Cell($w * 1, $h, _tr("id_autor"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("tipo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("titulo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("contenido"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("url"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./contenido/modelos/pdf.php";
                while ($contenido = mysql_fetch_array($sql)) {
                    include "./contenido/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $contenido_id_autor, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $contenido_tipo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $contenido_titulo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $contenido_contenido, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $contenido_url, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $contenido_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
