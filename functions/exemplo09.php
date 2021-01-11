<?php 

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinado'=>array(
            //Inicio Diteroes
            array(
                'nome_cargo'=>'Diretor Comercial',                
                'subordinado'=>array( 
                     //Inicio Gerentes   
                    array(               
                        'nome_cargo'=>'Gerente de Vendas',
                        'subordinado'=>array(
                            //Inicio Supervisor
                            array(
                                'nome_cargo'=>'Supervisor de Vendas'
                            )
                            //Terminio Supervisor
                        )
                    )
                )
                //Terminio Gerente
            ),
            //Terminio Diretor
            //Inicio Diretor
            array(
                'nome_cargo'=>'Diretor Fiananceiro',
                'subordinado'=>array(
                    //Inicio Gerente
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinado'=>array(
                            //Inicio Supervisor
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Terminio Supervisor
                        )
                    ),
                    //Terminio Gerente
                    //Inicio Gerente
                    array(                    
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinado'=>array(
                            //Inicio Supervisor
                            array(
                                'nome_cargo'=>'Supervisor de Suprementos',
                                'subordinado'=>array(
                                    array(
                                        'nome_cargo'=>'Compradores'
                                    )
                                )
                            )
                            //Terminio Supervisor
                        )                        
                    )
                    //Terminio Gerente
                )
            )
            //Terminio Diretor
        )        
    )
);

function exibe($cargos){

    $html = "<ul>";

    foreach ($cargos as $cargo){

        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinado']) && count($cargo['subordinado']) > 0){
            $html .= exibe($cargo['subordinado']);
        }

        $html .= "</li>";

    } 

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);

?>