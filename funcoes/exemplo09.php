<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio: diretor comercial
            array('nome_cargo'=>'Diretor Comercial',
                  'subordinados'=>array(
                      //inicio gerente de vendas
                      array(
                          'nome_cargo'=>'Gerente de Vendas'
                            //termino gerente de vendas
                      )
                  )    
            ),
            //termino diretor comercial
            //inicio diretor financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //inicio gerente e contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a pagar',
                        'subordinados'=>array(
                            //inicio supervisor
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //termino supervisor de pagamentos
                        )
                    ),
                    //termino gerente contas a pagar
                    //inicio gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //inicio supervisor de suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'Funcionãrio'
                                    )
                                )       
                            )
                        )
                    )
                    //termino gerente de compras
                )
            )
        )
    )
);
function exibe($cargos){
    $html = '<ul>';
    foreach ($cargos as $cargo) {
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }
        $html .= "</li>"; 
    }
    $html .= "</ul>";
    return $html;
}
echo exibe($hierarquia);
?>