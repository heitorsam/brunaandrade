<h11><i class="far fa-bookmark" aria-hidden="true"></i> Galeria</h11>
<div class="div_br"></div>
<div class="div_br"></div>


<div class="row justify-content-md-center">

    <?php
    
    //CONTADOR
    $contador = 1;

    //BUSCANDO ARQUIVOS DE IMAGENS
    $types = array( 'png', 'jpg', 'jpeg', 'gif', 'webp');
    $path = 'img/galeria';


    $dir = new DirectoryIterator($path);
    foreach ($dir as $fileInfo) {
        if (!$fileInfo->isDot()) {
            /* we need to clone a fileInfo object into array, not just assign it */
            $allFilesInfo[] = clone $fileInfo;
        }

    }

    function cmp($a, $b)
    {
        return strcmp($a->getFilename(), $b->getFilename());
    }    

    /* Alphabetically sorting the array with DirectoryIterator objects, by filename */
    usort($allFilesInfo, 'cmp');

    foreach ($allFilesInfo as $fileInfo) {

        $ext = strtolower( $fileInfo->getExtension() );

        if(strlen($ext) > 1) {
            $imagem = $path . '/' . $fileInfo->getFilename();
            
    ?>

            <div class="col-6 col-md-3 col-lg-2 col-sm-6" style="background-color: #f9f9f9 !important;">

                <!--IMAGEM 01-->
                <a style="height: 30px !important; padding: 0px 6px 0px 6px;" 
                data-toggle="modal" data-target="#detalhejust<?php echo $contador;?>">

                    <img src="<?php echo $imagem;?>" alt="Feng Shui" class="img_foto_pequena">  

                </a>

                <div class="modal" tabindex="-1" role="dialog" id="detalhejust<?php echo $contador;?>">
                    <div class="modal-dialog" role="document" style="margin: 0 auto !important;">
                        <div class="modal-content" 
                        style="padding: 0 !important; margin:0 !important; background-color: rgb(0, 0, 0, 0); border: none;">
                                
                            <div class="modal-body" style="text-align: center !important">                         

                                <div>
                                    <div style='margin: 0 auto; width: 100%; height: 86vh; 
                                    background-repeat: no-repeat; background-size:contain; 
                                    background-position:center top;
                                    background-image: url("<?php echo $imagem;?>")'>

                                        <div style="margin: 0 auto; width: 100%; line-heigth: 20px;">

                                            <a style="text-decoration: none;" class="botoes_modal anterior<?php echo $contador;?>"> 
                                                <i class="fas fa-angle-left"></i> Anterior</i>
                                            <a>

                                            <a style="text-decoration: none;" class="botoes_modal fechar<?php echo $contador;?>">
                                                <i class="far fa-times-circle"></i>
                                            </a>

                                            <a style="text-decoration: none;" class="botoes_modal proximo<?php echo $contador;?> "> 
                                                Próximo <i class="fas fa-angle-right"></i></i>
                                            </a>  

                                        </div>

                                    </div>
                                </div>                                                 

                            </div>
                                                                        
                        </div>

                    </div>
                            
                </div>

            </div>

            <script>

            $(function () {
                $(".fechar<?php echo $contador;?>").on('click', function() {
                    $('#detalhejust<?php echo $contador;?>').modal('hide');
                });
            });

            $(function () {
                $(".anterior<?php echo $contador;?>").on('click', function() {
                    $('#detalhejust<?php echo $contador - 1;?>').modal('show');
                    $('#detalhejust<?php echo $contador;?>').modal('hide');
                });
            });

            $(function () {
                $(".proximo<?php echo $contador;?>").on('click', function() {
                    $('#detalhejust<?php echo $contador + 1;?>').modal('show');
                    $('#detalhejust<?php echo $contador;?>').modal('hide');
                });
            });

            </script>

    <?php $contador = $contador + 1; } } ?>

</div>