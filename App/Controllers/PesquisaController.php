<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Dao\MySQL\mfsdevsystemManagerStore\PesquisaDao;
use App\Models\PesquisaModel;

final class PesquisaController
{ public function getPesquisas(Request $request, Response $response, array $args): Response
    {
       
    
        $pesquisaDao = new PesquisaDao();
        $pesquisas =$pesquisaDao->getAllPesquisas();


        $response = $response->withJson($pesquisas);
        
        return $response;

    }


    public function getById(Request $request, Response $response, array $args): Response
    {
       

        $response = $response->withJson([
            "message" => "Hello Pesquisas!"
        ]);
        return $response;
    }


    public function insertPesquisa(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

       // echo '<pre>';
       // var_dump($data);
       // die;
    
        $pesquisaDAO = new PesquisaDAO();
        $pesquisa = new PesquisaModel();
    
        //echo '<pre>';
        //var_dump($pesquisa);
        //die;

        // Definindo os atributos a partir dos dados da requisição
        $pesquisa->setLojaId($data['lojaId'])
            ->setUsuarioId($data['usuarioId'])
            ->setHasBandaLarga($data['hasBandaLarga'])
            
            ->setBandaLargaFornecedor($data['bandaLargaFornecedor'])
            ->setBandaLargaVelocidade($data['bandaLargaVelocidade'])
            ->setBandaLargaValor($data['bandaLargaValor'])
          
            ->setHasLinkDedicado($data['hasLinkDedicado'])
            ->setLinkDedicadoFornecedor($data['linkDedicadoFornecedor'])
            ->setLinkDedicadoVelocidade($data['linkDedicadoVelocidade'])
            ->setLinkDedicadoValor($data['linkDedicadoValor'])
           
            ->setHasLinhaFixa($data['hasLinhaFixa'])
            ->setLinhaFixaFornecedor($data['linhaFixaFornecedor'])
            ->setLinhaFixaVelocidade($data['linhaFixaVelocidade'])
            ->setLinhaFixaValor($data['linhaFixaValor'])
            ->setHasPabx($data['hasPabx'])
            ->setPabxFornecedor($data['pabxFornecedor'])
            ->setPabxVelocidade($data['pabxVelocidade'])
            ->setPabxValor($data['pabxValor'])
            ->setHasSdwan($data['hasSdwan'])
            ->setSdwanFornecedor($data['sdwanFornecedor'])
            ->setSdwanVelocidade($data['sdwanVelocidade'])
            ->setSdwanValor($data['sdwanValor'])
            ->setHasGestaoTrafego($data['hasGestaoTrafego'])
            ->setGestaoTrafegoFornecedor($data['gestaoTrafegoFornecedor'])
            ->setGestaoTrafegoVelocidade($data['gestaoTrafegoVelocidade'])
            ->setGestaoTrafegoValor($data['gestaoTrafegoValor'])
            ->setHasDesktop($data['hasDesktop'])
            ->setDesktopFornecedor($data['desktopFornecedor'])
            ->setDesktopVelocidade($data['desktopVelocidade'])
            ->setDesktopValor($data['desktopValor'])
            ->setHasNotebook($data['hasNotebook'])
            ->setNotebookFornecedor($data['notebookFornecedor'])
            ->setNotebookVelocidade($data['notebookVelocidade'])
            ->setNotebookValor($data['notebookValor'])
            ->setHasOffice365($data['hasOffice365'])
            ->setOffice365Fornecedor($data['office365Fornecedor'])
            ->setOffice365Velocidade($data['office365Velocidade'])
            ->setOffice365Valor($data['office365Valor'])
            ->setHasGoogleWorkspace($data['hasGoogleWorkspace'])
            ->setGoogleWorkspaceFornecedor($data['googleWorkspaceFornecedor'])
            ->setGoogleWorkspaceVelocidade($data['googleWorkspaceVelocidade'])
            ->setGoogleWorkspaceValor($data['googleWorkspaceValor'])
            ->setHasCloud($data['hasCloud'])
            ->setCloudFornecedor($data['cloudFornecedor'])
            ->setCloudVelocidade($data['cloudVelocidade'])
            ->setCloudValor($data['cloudValor'])
            ->setHasServidor($data['hasServidor'])
            ->setServidorFornecedor($data['servidorFornecedor'])
            ->setServidorVelocidade($data['servidorVelocidade'])
            ->setServidorValor($data['servidorValor'])
            ->setHasSite($data['hasSite'])
            ->setSiteUrl($data['siteUrl'])
            ->setHasInstagram($data['hasInstagram'])
            ->setInstagramUrl($data['instagramUrl'])
            ->setHasLinkedin($data['hasLinkedin'])
            ->setLinkedinUrl($data['linkedinUrl'])
            ->setHasEspecialista($data['hasEspecialista'])
            ->setEspecialista($data['nomeEspecialista'])
            ->setDataAgendamento($data['dataAgendamento'] ?? null)
            ->setValorTotal($data['valorTotal']);

         
        //echo '<pre>';
        //var_dump($pesquisa);
        //die;   

        $pesquisaDAO->insertPesquisa($pesquisa);
    
        $response = $response->withJson([
            "message" => "Pesquisa inserida com sucesso"
        ]);
        
        return $response;
    }
    
   /*
    public function updatePesquisa(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Put! updatePesquisa"
        ]);

        return $response;
    }
*/

public function updatePesquisa(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $id = $args['id']; 
        
        //echo '<pre>';
        //var_dump($data);
        //die;
    
        $pesquisaDAO = new PesquisaDAO();
        $pesquisa = new PesquisaModel();
    
        //echo '<pre>';
        //var_dump($pesquisa);
        //die;

        // Definindo os atributos a partir dos dados da requisição
        $pesquisa->setId($id)  
            ->setLojaId($data['lojaId'])
            ->setUsuarioId($data['usuarioId'])
            ->setHasBandaLarga($data['hasBandaLarga'])   
            ->setBandaLargaFornecedor($data['bandaLargaFornecedor'])
            ->setBandaLargaVelocidade($data['bandaLargaVelocidade'])
            ->setBandaLargaValor($data['bandaLargaValor'])
            ->setHasLinkDedicado($data['hasLinkDedicado'])
            ->setLinkDedicadoFornecedor($data['linkDedicadoFornecedor'])
            ->setLinkDedicadoVelocidade($data['linkDedicadoVelocidade'])
            ->setLinkDedicadoValor($data['linkDedicadoValor'])          
            ->setHasLinhaFixa($data['hasLinhaFixa'])
            ->setLinhaFixaFornecedor($data['linhaFixaFornecedor'])
            ->setLinhaFixaVelocidade($data['linhaFixaVelocidade'])
            ->setLinhaFixaValor($data['linhaFixaValor'])
            ->setHasPabx($data['hasPabx'])
            ->setPabxFornecedor($data['pabxFornecedor'])
            ->setPabxVelocidade($data['pabxVelocidade'])
            ->setPabxValor($data['pabxValor'])
            ->setHasSdwan($data['hasSdwan'])
            ->setSdwanFornecedor($data['sdwanFornecedor'])
            ->setSdwanVelocidade($data['sdwanVelocidade'])
            ->setSdwanValor($data['sdwanValor'])
            ->setHasGestaoTrafego($data['hasGestaoTrafego'])
            ->setGestaoTrafegoFornecedor($data['gestaoTrafegoFornecedor'])
            ->setGestaoTrafegoVelocidade($data['gestaoTrafegoVelocidade'])
            ->setGestaoTrafegoValor($data['gestaoTrafegoValor'])
            ->setHasDesktop($data['hasDesktop'])
            ->setDesktopFornecedor($data['desktopFornecedor'])
            ->setDesktopVelocidade($data['desktopVelocidade'])
            ->setDesktopValor($data['desktopValor'])
            ->setHasNotebook($data['hasNotebook'])
            ->setNotebookFornecedor($data['notebookFornecedor'])
            ->setNotebookVelocidade($data['notebookVelocidade'])
            ->setNotebookValor($data['notebookValor'])
            ->setHasOffice365($data['hasOffice365'])
            ->setOffice365Fornecedor($data['office365Fornecedor'])
            ->setOffice365Velocidade($data['office365Velocidade'])
            ->setOffice365Valor($data['office365Valor'])
            ->setHasGoogleWorkspace($data['hasGoogleWorkspace'])
            ->setGoogleWorkspaceFornecedor($data['googleWorkspaceFornecedor'])
            ->setGoogleWorkspaceVelocidade($data['googleWorkspaceVelocidade'])
            ->setGoogleWorkspaceValor($data['googleWorkspaceValor'])
            ->setHasCloud($data['hasCloud'])
            ->setCloudFornecedor($data['cloudFornecedor'])
            ->setCloudVelocidade($data['cloudVelocidade'])
            ->setCloudValor($data['cloudValor'])
            ->setHasServidor($data['hasServidor'])
            ->setServidorFornecedor($data['servidorFornecedor'])
            ->setServidorVelocidade($data['servidorVelocidade'])
            ->setServidorValor($data['servidorValor'])
            ->setHasSite($data['hasSite'])
            ->setSiteUrl($data['siteUrl'])
            ->setHasInstagram($data['hasInstagram'])
            ->setInstagramUrl($data['instagramUrl'])
            ->setHasLinkedin($data['hasLinkedin'])
            ->setLinkedinUrl($data['linkedinUrl'])
            ->setHasEspecialista($data['hasEspecialista'])
            ->setEspecialista($data['especialista'])
            ->setDataAgendamento($data['dataAgendamento'])
            ->setValorTotal($data['valorTotal']);

         
        //echo '<pre>';
        //var_dump($pesquisa);
        //die;   

        $pesquisaDAO->updatePesquisa($pesquisa);
    
        $response = $response->withJson([
            "message" => "Pesquisa foi Alterada com sucesso"
        ]);
        
        return $response;
    }
    public function deletePesquisa(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Delete! Delete Pesquisa."
        ]);

        return $response;
    }
}

