<?php

declare(strict_types=1);

namespace App\Models;

use DateTime;

/**
 * Pesquisa Atendimento class
 * 54 vars 
 * backend-frontend-database-postman(test)-
 * 
 */
final class PesquisaModel
{
    /**
     * Identificador
     *
     * @var int
     */
    private int $id;
    /**
     * Identificação da loja
     *
     * @var int
     */
    private int $lojaId;

    /**
     * Identificação do Usuario
     * @var int
    */
    private int $usuarioId;

    /*
    * Questão: 1. Qual o custo atual da solução de INTERNET da sua empresa? 
    *********************************************************************** */

    /**
     * Empresa possui banda larga?
     * @var bool
    */
    private bool $hasBandaLarga;

    /**
     * Bandalarga Fornecedor varchar(100)
     * @var string
    */
    private ?string $bandaLargaFornecedor ;
    
    /**
    * Bandalarga velocidade  varchar(60)
    * @var string
    */
    private ?string $bandaLargaVelocidade;
    
    /**
    * Bandalarga velocidade decimal(10,2)
    * @var  float
    */
    private float $bandaLargaValor;
    
    /*
    * 1.1 Link Dedicado?
    ************************************************************* */

    /**
     * hasLinkDedicado Sim/Não
     * @var bool
    */
    private bool $hasLinkDedicado;

    /**
    * linkDedicado Fornecedor varchar(100)
    * @var string
    */
    private ?string $linkDedicadoFornecedor ;
    
    /**
    * linkDedicado velocidade  varchar(60)
    * @var string
    */
    private ?string $linkDedicadoVelocidade;
    
    /**
    * linkDedicado valor decimal(10,2)
    * @var float
    */
    private float $linkDedicadoValor;
    
    /* 
     * End questão 1.
     ************************************************** */

    /*
     * Questão: 2. Qual o custo atual da solução de VOZ da sua empresa?
     ****************************************************************** */

    /*
    * 2.1 Linha Fixa?
    ******************************************************************* */ 
    /**
    * @var bool
    */
    private bool $hasLinhaFixa;

    /**
    * Linha Fixa ? varchar(100)
    * @var string
    */
    private ?string $linhaFixaFornecedor ;
    
    /**
    * Linha Fixa velocidade  varchar(60)
    * @var string
    */
    private ?string $linhaFixaVelocidade;
    
    /**
    * Linha Fixa Valor(10,2)
    * @var float
    */
    private float $linhaFixaValor;
    
    /**
    * 2.2 PABX?
    * 
    * @var bool
    */
    private bool $hasPabx ;

    /**
    * Pabx Fornecedor ? varchar(100)
    * @var string
    */

    private ?string $pabxFornecedor;

    
    /**
    * Pabx velocidade  varchar(60)
    * @var string
    */
    private ?string $pabxVelocidade;
    
    /**
    * pabx Valor(10,2)
    * @var float
    */
    private float $pabxValor;

    /* 
     * end questão 2.
     ******************************************************* */
    
     /*
     * 3) Possui algum serviço de SEGURANÇA/GESTÃO de rede de dados?
     *************************************************************** */

    /*
    * 3.1 SDWAN?
    ***************************************************************** */

    /**
     * hasSdwan  sim/não  
    * @var bool
    */
    private bool $hasSdwan ;

    /**
    * Sdwan Fornecedor ? varchar(100)
    * @var string
    */
    private ?string $sdwanFornecedor ;
    
    /**
    * Sdwan velocidade  varchar(60)
    * @var string
    */
    private ?string $sdwanVelocidade;
    
    /**
    * Sdwan Valor(10,2)
    * @var float
    */
    private float $sdwanValor;
    
    /*
     * 3.2 Gestão de Tráfego?
     **************************************************************** */

    /**
     * hasGestaoTrafego sim/não
     * @var bool
    */
    private bool $hasGestaoTrafego ;

    /**
    * gestaoTrafegoFornecedor 
    *
    * @var string
    */
    private ?string $gestaoTrafegoFornecedor ;
    
    /**
    * gestaoTrafegoVelocidade  varchar(60)
    * @var string
    */
    private ?string $gestaoTrafegoVelocidade;
    
    /**
    * gestaoTrafegoValor (10,2)
    * @var float
    */
    private float $gestaoTrafegoValor;
    /***********************************************************************
    *  End question 3.                                                     *
    ************************************************************************ */

    /*
     * Question: 4. Possui necessidade de locação de maquinas: NOTES, PC, TABLETS
     *************************************************************************** */
    /*
     * 4.1 Desktop?
     **************************************************************** */

    /**
     * hasDesktop sim/não
     * @var bool
    */
    private bool $hasDesktop ;

    /**
    * desktopFornecedor ? varchar(100)
    * @var string
    */
    private ?string $desktopFornecedor ;
    
    /**
    * desktopVelocidade  varchar(60)
    * @var string
    */
    private ?string $desktopVelocidade;
    
    /**
    * desktopValor (10,2)
    * @var float
    */
    private float $desktopValor;

    /****************************************************************
     * 4.2 Notebook?
     **************************************************************** */

      /**
     * hasNotebook sim/não
     * @var bool
    */
    private bool $hasNotebook ;

    /**
    * notebookFornecedor ? varchar(100)
    * @var string
    */
    private ?string $notebookFornecedor ;
    
    /**
    * notebookVelocidade  varchar(60)
    * @var string
    */
    private ?string $notebookVelocidade;
    
    /**
    * desktopValor (10,2)
    * @var float
    */
    private float $notebookValor;

    /****************************************************************
     * End Question 4.
     **************************************************************** */

    /*
     * Question: 5. Utiliza Office365 ou Google
     *************************************************************************** */
    /*
     * 5.1 Office365?
     **************************************************************** */

    /**
     * hasOffice365 sim/não
     * @var bool
    */
    private bool $hasOffice365 ;

    /**
    * desktopFornecedor ? varchar(100)
    * @var string
    */
    private ?string $office365Fornecedor ;
    
    /**
    * office365Velocidade  varchar(60)
    * @var string
    */
    private ?string $office365Velocidade;
    
    /**
    * office365Valor (10,2)
    * @var float
    */
    private float $office365Valor;

    /****************************************************************
     * 5.2 Google Workspace?
    **************************************************************** */

    /**
    * hasGoogleWorkspace sim/não
    * @var bool
    */
    private bool $hasGoogleWorkspace ;

    /**
    * googleWorkspaceFornecedor ? varchar(100)
    * @var string
    */
    private ?string $googleWorkspaceFornecedor ;
    
    /**
    * googleWorkspaceVelocidade  varchar(60)
    * @var string
    */
    private ?string $googleWorkspaceVelocidade;
    
    /**
    * googleWorkspaceValor (10,2)
    * @var float
    */
    private float $googleWorkspaceValor;
    /****************************************************************
     * End Question 5.
     **************************************************************** */

    /*
     * Question: 6. Onde armazena os dados na sua empresa em nuvem ou servidor local 
     *************************************************************************** */
    /*
     * 6.1 Nuvem (cloud)
     **************************************************************** */

    /**
     * hasCloud sim/não
     * @var bool
    */
    private bool $hasCloud ;

    /**
    * cloudFornecedor ? varchar(100)
    * @var string
    */
    private ?string $cloudFornecedor ;
    
    /**
    * cloudVelocidade  varchar(60)
    * @var string
    */
    private ?string $cloudVelocidade;
    
    /**
    * cloudValor (10,2)
    * @var float
    */
    private float $cloudValor;
    /****************************************************************
     * 6.2 Servidor?
    **************************************************************** */

    /**
    * hasServidor sim/não
    * @var bool
    */
    private bool $hasServidor ;

    /**
    * servidorFornecedor ? varchar(100)
    * @var string
    */
    private ?string $servidorFornecedor ;
    
    /**
    * servidorVelocidade  varchar(60)
    * @var string
    */
    private ?string $servidorVelocidade;
    
    /**
    * servidorValor (10,2)
    * @var float
    */
    private float $servidorValor;
    /****************************************************************
     * End Question 6.
     **************************************************************** */
    /*
     * Question: 7. Possui site ou rede Social? Site, Instagram e Linkedin,  
     *************************************************************************** */
    /*
     * 7.1 Site
     **************************************************************** */

    /**
     * hasSite sim/não
     * @var bool
    */
    private bool $hasSite ;

    /**
    * siteUrl ? varchar(100)
    * @var string
    */
    private ?string $siteUrl;
    
    /*
     * 7.2 Instagram
     **************************************************************** */

    /**
     * hasInstagram sim/não
     * @var bool
    */
    private bool $hasInstagram ;

    /**
    * instagramUrl ? varchar(100)
    * @var string
    */
    private ?string $instagramUrl;
    
    /*
     * 7.3 Linkedin
     **************************************************************** */

    /**
     * hasLinkedin sim/não
     * @var bool
    */
    private bool $hasLinkedin ;

    /**
    * linkedinUrl ? varchar(100)
    * @var string
    */
    private ?string $linkedinUrl;

     /****************************************************************
     * End Question 7.
     **************************************************************** */
    
    /*
     * Question: 8. Deseja agendar uma video/reunião com o nosso especialista 
     * avançado em serviços de TI.  
     *************************************************************************** */

    /**
     * hasEspecialista sim/não
     * @var bool
    */
    private bool $hasEspecialista ;
 
    /**
    * nomeEspecialista ? varchar(50)
    * @var string
    */
    private ?string $nomeEspecialista;

    /**
    * dataAgendamento ? date
    * @var datetime
    */
    private ?DateTime $dataAgendamento;
 
   /****************************************************************
    * End Question 8.
    **************************************************************** */
    /**
     *  Atributos de auditoria
     * 
     */
    
    /**
    * @var bool Indica se o registro foi excluído logicamente
    */
    private bool $isDeleted = false;

    /**
     * @var DateTime Data de criação do registro
     */
    private DateTime $created_at;

    /**
     * @var DateTime Data da última atualização do registro
     */
    private DateTime $updated_at;
     
    /**
     * Método construtor
     * Inicializa a data de criação e atualização
     */
    public function __construct()
    {
        $this->id = 0;
        $this->lojaId = 0;
        $this->usuarioId = 0;

        $this->hasBandaLarga = false;
        $this->bandaLargaFornecedor = null;
        $this->bandaLargaVelocidade = null;
        $this->bandaLargaValor = 0.0;

        $this->hasLinkDedicado = false;
        $this->linkDedicadoFornecedor = null;
        $this->linkDedicadoVelocidade = null;
        $this->linkDedicadoValor = 0.0;

        $this->hasLinhaFixa = false;
        $this->linhaFixaFornecedor = null;
        $this->linhaFixaVelocidade = null;
        $this->linhaFixaValor = 0.0;

        $this->hasPabx = false;
        $this->pabxFornecedor = null;
        $this->pabxVelocidade = null;
        $this->pabxValor = 0.0;

        $this->hasSdwan = false;
        $this->sdwanFornecedor = null;
        $this->sdwanVelocidade = null;
        $this->sdwanValor = 0.0;

        $this->hasGestaoTrafego = false;
        $this->gestaoTrafegoFornecedor = null;
        $this->gestaoTrafegoVelocidade = null;
        $this->gestaoTrafegoValor = 0.0;

        $this->hasDesktop = false;
        $this->desktopFornecedor = null;
        $this->desktopVelocidade = null;
        $this->desktopValor = 0.0;

        $this->hasNotebook = false;
        $this->notebookFornecedor = null;
        $this->notebookVelocidade = null;
        $this->notebookValor = 0.0;

        $this->hasOffice365 = false;
        $this->office365Fornecedor = null;
        $this->office365Velocidade = null;
        $this->office365Valor = 0.0;

        $this->hasGoogleWorkspace = false;
        $this->googleWorkspaceFornecedor = null;
        $this->googleWorkspaceVelocidade = null;
        $this->googleWorkspaceValor = 0.0;

        $this->hasCloud = false;
        $this->cloudFornecedor = null;
        $this->cloudVelocidade = null;
        $this->cloudValor = 0.0;

        $this->hasServidor = false;
        $this->servidorFornecedor = null;
        $this->servidorVelocidade = null;
        $this->servidorValor = 0.0;

        $this->hasSite = false;
        $this->siteUrl = null;
        $this->hasInstagram = false;
        $this->instagramUrl = null;
        $this->hasLinkedin = false;
        $this->linkedinUrl = null;

        $this->hasEspecialista = false;
        $this->nomeEspecialista = null;
 
        $this->dataAgendamento = null;

        $this->valorTotal = 0.0;

        // Inicialização dos atributos de auditoria
        $this->isDeleted = false;

        $this->created_at = new DateTime();
        $this->updated_at = new DateTime();
    }
     
    /**
    * ValorTotal
    * @var float
    */
    private float $valorTotal;
   
/**
     * Getter para ValorTotal
     *
     * @return float
     */
    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    /**
     * @param float $valorTotal
     * @return PesquisaModel
    */
    public function setValorTotal(float $valorTotal): PesquisaModel
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }


    /**
     * @return int
     */
    public function getId():int
    {
        return $this->id;
    }
    /**
     * @param int $id
     * @return PesquisaModel
    */
    public function setId(int $id): PesquisaModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getLojaId():int
    {
        return $this->lojaId;
    }

    /**
     * @param string $lojaId
     * @return PesquisaModel
     */
    public function setLojaId(int $lojaId): PesquisaModel
    {
        $this->lojaId = $lojaId;
        return $this;
    }

    /**
     * @param int $usuarioId
     * @return int
     */
    public function getUsuarioId():int
    {
        return $this->usuarioId;
    }

    /**
     * 
     * @param int $usuarioId
     * @return PesquisaModel
     */
    public function setUsuarioId(int $usuarioId): PesquisaModel
    {
        $this->usuarioId = $usuarioId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasBandaLarga(): bool
    {
        return $this->hasBandaLarga;
    }
    /**
     * @param bool $hasBandaLarga
     * @return PesquisaModel
     */
    public function setHasBandaLarga(bool $hasBandaLarga): PesquisaModel
    {
        $this->hasBandaLarga = $hasBandaLarga;
        return $this;
    }
    // BandaLargaFornecedor
    /**
     * @return string | null
     */
    public function getBandaLargaFornecedor(): ?string
    {
        return $this->bandaLargaFornecedor;
    }
    /**
     * @param string $bandaLargaFornecedor
     * @return PesquisaModel
     */
    public function setBandaLargaFornecedor(string $bandaLargaFornecedor): PesquisaModel
    {
        $this->bandaLargaFornecedor = $bandaLargaFornecedor;
        return $this;
    }
    // BandaLargaVelocidade
    /**
     * @return string | null
     */
    public function getBandaLargaVelocidade(): ?string
    {
        return $this->bandaLargaVelocidade;
    }
    /**
     * @param string $bandaLargaVelocidade
     * @return PesquisaModel
     */
    public function setBandaLargaVelocidade(string $bandaLargaVelocidade): PesquisaModel
    {
        $this->bandaLargaVelocidade = $bandaLargaVelocidade;
        return $this;
    }
    //BandaLargaValor
    /**
    * @return float
    */
    public function getBandaLargaValor(): float
    {
        return $this->bandaLargaValor;
    }
    /**
     * @param float $bandaLargaValor
     * @return PesquisaModel
     */
    public function setBandaLargaValor(float $bandaLargaValor): PesquisaModel
    {
        $this->bandaLargaValor = $bandaLargaValor;
        return $this;
    }
    
    
    // hasLinkDedicado
    /**
     * Getter para hasLinkDedicado
     *
     * @return bool
     */
    public function getHasLinkDedicado(): bool
    {
        return $this->hasLinkDedicado;
    }

    /**
     * Setter para hasLinkDedicado
     *
     * @param bool $hasLinkDedicado
     * @return PesquisaModel
     */
    public function setHasLinkDedicado(bool $hasLinkDedicado): PesquisaModel
    {
        $this->hasLinkDedicado = $hasLinkDedicado;
        return $this;
    }

    /**
     * Getter para linkDedicadoFornecedor
     *
     * @return string | null
     */
    public function getLinkDedicadoFornecedor(): ?string
    {
        return $this->linkDedicadoFornecedor;
    }

    /**
     * Setter para linkDedicadoFornecedor
     *
     * @param string $linkDedicadoFornecedor
     * @return PesquisaModel
     */
    public function setLinkDedicadoFornecedor(string $linkDedicadoFornecedor): PesquisaModel
    {
        $this->linkDedicadoFornecedor = $linkDedicadoFornecedor;
        return $this;
    }

    /**
     * Getter para linkDedicadoVelocidade
     *
     * @return string | null
     */
    public function getLinkDedicadoVelocidade(): ?string 
    {
        return $this->linkDedicadoVelocidade;
    }

    /**
     * Setter para linkDedicadoVelocidade
     *
     * @param string $linkDedicadoVelocidade
     * @return PesquisaModel
     */
    public function setLinkDedicadoVelocidade(string $linkDedicadoVelocidade): PesquisaModel
    {
        $this->linkDedicadoVelocidade = $linkDedicadoVelocidade;
        return $this;
    }

    /**
     * Getter para linkDedicadoValor
     *
     * @return float
     */
    public function getLinkDedicadoValor(): float
    {
        return $this->linkDedicadoValor;
    }

    /**
     * Setter para linkDedicadoValor
     *
     * @param float $linkDedicadoValor
     * @return PesquisaModel
     */
    public function setLinkDedicadoValor(float $linkDedicadoValor): PesquisaModel
    {
        $this->linkDedicadoValor = $linkDedicadoValor;
        return $this;
    }
    // hasLinhaFixa
    /**
     * Getter para hasLinhaFixa
     *
     * @return bool
     */
    public function getHasLinhaFixa(): bool
    {
        return $this->hasLinhaFixa;
    }

    /**
     * Setter para hasLinhaFixa
     *
     * @param bool $hasLinhaFixa
     * @return PesquisaModel
     */
    public function setHasLinhaFixa(bool $hasLinhaFixa): PesquisaModel
    {
        $this->hasLinhaFixa = $hasLinhaFixa;
        return $this;
    }

    /**
     * Getter para linhaFixaFornecedor
     *
     * @return string | null
     */
    public function getLinhaFixaFornecedor(): ?string
    {
        return $this->linhaFixaFornecedor;
    }

    /**
     * Setter para linhaFixaFornecedor
     *
     * @param string $linhaFixaFornecedor
     * @return PesquisaModel
     */
    public function setLinhaFixaFornecedor(string $linhaFixaFornecedor): PesquisaModel
    {
        $this->linhaFixaFornecedor = $linhaFixaFornecedor;
        return $this;
    }

    /**
     * Getter para linhaFixaVelocidade
     *
     * @return string | null
     */
    public function getLinhaFixaVelocidade(): ?string
    {
        return $this->linhaFixaVelocidade;
    }

    /**
     * Setter para linhaFixaVelocidade
     *
     * @param string $linhaFixaVelocidade
     * @return PesquisaModel
     */
    public function setLinhaFixaVelocidade(string $linhaFixaVelocidade): PesquisaModel
    {
        $this->linhaFixaVelocidade = $linhaFixaVelocidade;
        return $this;
    }

    /**
     * Getter para linhaFixaValor
     *
     * @return float
     */
    public function getLinhaFixaValor(): float
    {
        return $this->linhaFixaValor;
    }

    /**
     * Setter para linhaFixaValor
     *
     * @param float $linhaFixaValor
     * @return PesquisaModel
     */
    public function setLinhaFixaValor(float $linhaFixaValor): PesquisaModel
    {
        $this->linhaFixaValor = $linhaFixaValor;
        return $this;
    }

    // Getter para hasPabx
    public function getHasPabx(): bool
    {
        return $this->hasPabx;
    }

    // Setter para hasPabx com retorno do tipo PesquisaModel
    public function setHasPabx(bool $hasPabx): PesquisaModel
    {
        $this->hasPabx = $hasPabx;
        return $this; // Retorna a própria instância de PesquisaModel
    }
    /**
     * Getter para pabxFornecedor
     *
     * @return string | null
     */
    public function getPabxFornecedor(): ?string
    {
        return $this->pabxFornecedor;
    }

    /**
     * Setter para pabxFornecedor
     *
     * @param string | null $pabxFornecedor
     * @return PesquisaModel
     */
    public function setPabxFornecedor(?string $pabxFornecedor): PesquisaModel
    {
        $this->pabxFornecedor = $pabxFornecedor;
        return $this;
    }

    /**
     * Getter para pabxVelocidade
     *
     * @return string | null
     */
    public function getPabxVelocidade(): ? string
    {
        return $this->pabxVelocidade;
    }

    /**
     * Setter para pabxVelocidade
     *
     * @param string | null $pabxVelocidade
     * @return PesquisaModel
     */
    public function setPabxVelocidade(?string $pabxVelocidade): PesquisaModel
    {
        $this->pabxVelocidade = $pabxVelocidade;
        return $this;
    }

    /**
     * Getter para pabxValor
     *
     * @return float
     */
    public function getPabxValor(): float
    {
        return $this->pabxValor;
    }

    /**
     * Setter para pabxValor
     *
     * @param float $pabxValor
     * @return PesquisaModel
     */
    public function setPabxValor(float $pabxValor): PesquisaModel
    {
        $this->pabxValor = $pabxValor;
        return $this;
    }
   
    /**
     * Getter para hasSdwan
     *
     * @return bool
     */
    public function getHasSdwan(): bool
    {
        return $this->hasSdwan;
    }

    /**
     * Setter para hasSdwan
     *
     * @param bool $hasSdwan
     * @return PesquisaModel
     */
    public function setHasSdwan(bool $hasSdwan): PesquisaModel
    {
        $this->hasSdwan = $hasSdwan;
        return $this;
    }

    /**
     * Getter para sdwanFornecedor
     *
     * @return string | null
     */
    public function getSdwanFornecedor(): ?string
    {
        return $this->sdwanFornecedor;
    }

    /**
     * Setter para sdwanFornecedor
     *
     * @param string | null $sdwanFornecedor
     * @return PesquisaModel
     */
    public function setSdwanFornecedor(?string $sdwanFornecedor): PesquisaModel
    {
        $this->sdwanFornecedor = $sdwanFornecedor;
        return $this;
    }

    /**
     * Getter para sdwanVelocidade
     *
     * @return string | null
     */
    public function getSdwanVelocidade(): ?string
    {
        return $this->sdwanVelocidade;
    }

    /**
     * Setter para sdwanVelocidade
     *
     * @param string | null $sdwanVelocidade
     * @return PesquisaModel
     */
    public function setSdwanVelocidade(?string $sdwanVelocidade): PesquisaModel
    {
        $this->sdwanVelocidade = $sdwanVelocidade;
        return $this;
    }

    /**
     * Getter para sdwanValor
     *
     * @return float
     */
    public function getSdwanValor(): float
    {
        return $this->sdwanValor;
    }

    /**
     * Setter para sdwanValor
     *
     * @param float $sdwanValor
     * @return PesquisaModel
     */
    public function setSdwanValor(float $sdwanValor): PesquisaModel
    {
        $this->sdwanValor = $sdwanValor;
        return $this;
    }

/**
    * Getter e Setter para hasGestaoTrafego
    *
    * @return bool
    */
    public function getHasGestaoTrafego(): bool
    {
        return $this->hasGestaoTrafego;
    }

     /**
     * Setter para hasGestaoTrafego
     *
     * @param bool $hasGestaoTrafego
     * @return PesquisaModel
     */
    public function setHasGestaoTrafego(bool $hasGestaoTrafego): PesquisaModel
    {
        $this->hasGestaoTrafego = $hasGestaoTrafego;
        return $this;
    }

    /**
     * Getter para gestaoTrafegoFornecedor
     *
     * @return string | null
     */
    public function getGestaoTrafegoFornecedor(): ?string
    {
        return $this->gestaoTrafegoFornecedor;
    }

    /**
     * Setter para gestaoTrafegoFornecedor
     *
     * @param string | null $gestaoTrafegoFornecedor
     * @return PesquisaModel
     */
    public function setGestaoTrafegoFornecedor(?string $gestaoTrafegoFornecedor): PesquisaModel
    {
        $this->gestaoTrafegoFornecedor = $gestaoTrafegoFornecedor;
        return $this;
    }

    /**
     * Getter para gestaoTrafegoVelocidade
     *
     * @return string | null
     */
    public function getGestaoTrafegoVelocidade(): ?string
    {
        return $this->gestaoTrafegoVelocidade;
    }

    /**
     * Setter para gestaoTrafegoVelocidade
     *
     * @param string | null $gestaoTrafegoVelocidade
     * @return PesquisaModel
     */
    public function setGestaoTrafegoVelocidade(?string $gestaoTrafegoVelocidade): PesquisaModel
    {
        $this->gestaoTrafegoVelocidade = $gestaoTrafegoVelocidade;
        return $this;
    }

    /**
     * Getter para gestaoTrafegoValor
     *
     * @return float
     */
    public function getGestaoTrafegoValor(): float
    {
        return $this->gestaoTrafegoValor;
    }

    /**
     * Setter para gestaoTrafegoValor
     *
     * @param float $gestaoTrafegoValor
     * @return PesquisaModel
     */
    public function setGestaoTrafegoValor(float $gestaoTrafegoValor): PesquisaModel
    {
        $this->gestaoTrafegoValor = $gestaoTrafegoValor;
        return $this;
    }

    /**
    * Getter e Setter para hasDesktop
    *
    * @return bool
    */
   public function getHasDesktop(): bool
   {
       return $this->hasDesktop;
   }

   public function setHasDesktop(bool $hasDesktop): PesquisaModel
   {
       $this->hasDesktop = $hasDesktop;
       return $this;
   }

   /**
    * Getter e Setter para desktopFornecedor
    *
    * @return string | null
    */
   public function getDesktopFornecedor(): ?string
   {
       return $this->desktopFornecedor;
   }

   public function setDesktopFornecedor(?string $desktopFornecedor): PesquisaModel
   {
       $this->desktopFornecedor = $desktopFornecedor;
       return $this;
   }

   /**
    * Getter e Setter para desktopVelocidade
    *
    * @return string | null
    */
   public function getDesktopVelocidade(): ?string
   {
       return $this->desktopVelocidade;
   }

   public function setDesktopVelocidade(?string $desktopVelocidade): PesquisaModel
   {
       $this->desktopVelocidade = $desktopVelocidade;
       return $this;
   }

   /**
    * Getter e Setter para desktopValor
    *
    * @return float
    */
   public function getDesktopValor(): float
   {
       return $this->desktopValor;
   }

   public function setDesktopValor(float $desktopValor): PesquisaModel
   {
       $this->desktopValor = $desktopValor;
       return $this;
   }

   /**
     * Getter e Setter para hasNotebook
     *
     * @return bool
     */
    public function getHasNotebook(): bool
    {
        return $this->hasNotebook;
    }

    public function setHasNotebook(bool $hasNotebook): PesquisaModel
    {
        $this->hasNotebook = $hasNotebook;
        return $this;
    }

    /**
     * Getter e Setter para notebookFornecedor
     *
     * @return string | null
     */
    public function getNotebookFornecedor(): ?string
    {
        return $this->notebookFornecedor;
    }

    public function setNotebookFornecedor(?string $notebookFornecedor): PesquisaModel
    {
        $this->notebookFornecedor = $notebookFornecedor;
        return $this;
    }

    /**
     * Getter e Setter para notebookVelocidade
     *
     * @return string | null
     */
    public function getNotebookVelocidade(): ?string
    {
        return $this->notebookVelocidade;
    }

    public function setNotebookVelocidade(?string $notebookVelocidade): PesquisaModel
    {
        $this->notebookVelocidade = $notebookVelocidade;
        return $this;
    }

    /**
     * Getter e Setter para notebookValor
     *
     * @return float
     */
    public function getNotebookValor(): float
    {
        return $this->notebookValor;
    }

    public function setNotebookValor(float $notebookValor): PesquisaModel
    {
        $this->notebookValor = $notebookValor;
        return $this;
    }

    /**
     * Getter e Setter para hasOffice365
     *
     * @return bool
     */
    public function getHasOffice365(): bool
    {
        return $this->hasOffice365;
    }

    public function setHasOffice365(bool $hasOffice365): PesquisaModel
    {
        $this->hasOffice365 = $hasOffice365;
        return $this;
    }

    /**
     * Getter e Setter para office365Fornecedor
     *
     * @return string | null
     */
    public function getOffice365Fornecedor(): ?string
    {
        return $this->office365Fornecedor;
    }

    public function setOffice365Fornecedor(?string $office365Fornecedor): PesquisaModel
    {
        $this->office365Fornecedor = $office365Fornecedor;
        return $this;
    }

    /**
     * Getter e Setter para office365Velocidade
     *
     * @return string | null
     */
    public function getOffice365Velocidade(): ?string
    {
        return $this->office365Velocidade;
    }

    public function setOffice365Velocidade(?string $office365Velocidade): PesquisaModel
    {
        $this->office365Velocidade = $office365Velocidade;
        return $this;
    }

    /**
     * Getter e Setter para office365Valor
     *
     * @return float
     */
    public function getOffice365Valor(): float
    {
        return $this->office365Valor;
    }

    public function setOffice365Valor(float $office365Valor): PesquisaModel
    {
        $this->office365Valor = $office365Valor;
        return $this;
    }
/**
     * Getter para hasGoogleWorkspace
     *
     * @return bool
     */
    public function getHasGoogleWorkspace(): bool
    {
        return $this->hasGoogleWorkspace;
    }

    /**
     * Setter para hasGoogleWorkspace
     *
     * @param bool $hasGoogleWorkspace
     * @return PesquisaModel
     */
    public function setHasGoogleWorkspace(bool $hasGoogleWorkspace): PesquisaModel
    {
        $this->hasGoogleWorkspace = $hasGoogleWorkspace;
        return $this;
    }

    /**
     * Getter para googleWorkspaceFornecedor
     *
     * @return string | null
     */
    public function getGoogleWorkspaceFornecedor(): ?string
    {
        return $this->googleWorkspaceFornecedor;
    }

    /**
     * Setter para googleWorkspaceFornecedor
     *
     * @param string | null $googleWorkspaceFornecedor
     * @return PesquisaModel
     */
    public function setGoogleWorkspaceFornecedor(?string $googleWorkspaceFornecedor): PesquisaModel
    {
        $this->googleWorkspaceFornecedor = $googleWorkspaceFornecedor;
        return $this;
    }

    /**
     * Getter para googleWorkspaceVelocidade
     *
     * @return string | null
     */
    public function getGoogleWorkspaceVelocidade(): ?string
    {
        return $this->googleWorkspaceVelocidade;
    }

    /**
     * Setter para googleWorkspaceVelocidade
     *
     * @param string | null $googleWorkspaceVelocidade
     * @return PesquisaModel
     */
    public function setGoogleWorkspaceVelocidade(?string $googleWorkspaceVelocidade): PesquisaModel
    {
        $this->googleWorkspaceVelocidade = $googleWorkspaceVelocidade;
        return $this;
    }

    /**
     * Getter para googleWorkspaceValor
     *
     * @return float
     */
    public function getGoogleWorkspaceValor(): float
    {
        return $this->googleWorkspaceValor;
    }

    /**
     * Setter para googleWorkspaceValor
     *
     * @param float $googleWorkspaceValor
     * @return PesquisaModel
     */
    public function setGoogleWorkspaceValor(float $googleWorkspaceValor): PesquisaModel
    {
        $this->googleWorkspaceValor = $googleWorkspaceValor;
        return $this;
    }

/**
     * Getter para hasCloud
     *
     * @return bool
     */
    public function getHasCloud(): bool
    {
        return $this->hasCloud;
    }

    /**
     * Setter para hasCloud
     *
     * @param bool $hasCloud
     * @return PesquisaModel
     */
    public function setHasCloud(bool $hasCloud): PesquisaModel
    {
        $this->hasCloud = $hasCloud;
        return $this;
    }

    /**
     * Getter para cloudFornecedor
     *
     * @return string | null
     */
    public function getCloudFornecedor(): ?string
    {
        return $this->cloudFornecedor;
    }

    /**
     * Setter para cloudFornecedor
     *
     * @param string | null $cloudFornecedor
     * @return PesquisaModel
     */
    public function setCloudFornecedor(?string $cloudFornecedor): PesquisaModel
    {
        $this->cloudFornecedor = $cloudFornecedor;
        return $this;
    }

    /**
     * Getter para cloudVelocidade
     *
     * @return string | null
     */
    public function getCloudVelocidade(): ?string
    {
        return $this->cloudVelocidade;
    }

    /**
     * Setter para cloudVelocidade
     *
     * @param string | null $cloudVelocidade
     * @return PesquisaModel
     */
    public function setCloudVelocidade(?string $cloudVelocidade): PesquisaModel
    {
        $this->cloudVelocidade = $cloudVelocidade;
        return $this;
    }

    /**
     * Getter para cloudValor
     *
     * @return float
     */
    public function getCloudValor(): float
    {
        return $this->cloudValor;
    }

    /**
     * Setter para cloudValor
     *
     * @param float $cloudValor
     * @return PesquisaModel
     */
    public function setCloudValor(float $cloudValor): PesquisaModel
    {
        $this->cloudValor = $cloudValor;
        return $this;
    }
    /**
     * Getter para hasServidor
     *
     * @return bool
     */
    public function getHasServidor(): bool
    {
        return $this->hasServidor;
    }

    /**
     * Setter para hasServidor
     *
     * @param bool $hasServidor
     * @return PesquisaModel
     */
    public function setHasServidor(bool $hasServidor): PesquisaModel
    {
        $this->hasServidor = $hasServidor;
        return $this;
    }

    /**
     * Getter para servidorFornecedor
     *
     * @return string | null
     */
    public function getServidorFornecedor(): ?string
    {
        return $this->servidorFornecedor;
    }

    /**
     * Setter para servidorFornecedor
     *
     * @param string | null $servidorFornecedor
     * @return PesquisaModel
     */
    public function setServidorFornecedor(?string $servidorFornecedor): PesquisaModel
    {
        $this->servidorFornecedor = $servidorFornecedor;
        return $this;
    }

    /**
     * Getter para servidorVelocidade
     *
     * @return string | null
     */
    public function getServidorVelocidade(): ?string
    {
        return $this->servidorVelocidade;
    }

    /**
     * Setter para servidorVelocidade
     *
     * @param string | null $servidorVelocidade
     * @return PesquisaModel
     */
    public function setServidorVelocidade(?string $servidorVelocidade): PesquisaModel
    {
        $this->servidorVelocidade = $servidorVelocidade;
        return $this;
    }

    /**
     * Getter para servidorValor
     *
     * @return float
     */
    public function getServidorValor(): float
    {
        return $this->servidorValor;
    }

    /**
     * Setter para servidorValor
     *
     * @param float $servidorValor
     * @return PesquisaModel
     */
    public function setServidorValor(float $servidorValor): PesquisaModel
    {
        $this->servidorValor = $servidorValor;
        return $this;
    }
     /**
     * Getter para hasSite
     *
     * @return bool
     */
    public function getHasSite(): bool
    {
        return $this->hasSite;
    }

    /**
     * Setter para hasSite
     *
     * @param bool $hasSite
     * @return PesquisaModel
     */
    public function setHasSite(bool $hasSite): PesquisaModel
    {
        $this->hasSite = $hasSite;
        return $this;
    }

    /**
     * Getter para siteUrl
     *
     * @return string | null
     */
    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    /**
     * Setter para siteUrl
     *
     * @param string | null $siteUrl
     * @return PesquisaModel
     */
    public function setSiteUrl(?string $siteUrl): PesquisaModel
    {
        $this->siteUrl = $siteUrl;
        return $this;
    }

    /**
     * Getter para hasInstagram
     *
     * @return bool
     */
    public function getHasInstagram(): bool
    {
        return $this->hasInstagram;
    }

    /**
     * Setter para hasInstagram
     *
     * @param bool $hasInstagram
     * @return PesquisaModel
     */
    public function setHasInstagram(bool $hasInstagram): PesquisaModel
    {
        $this->hasInstagram = $hasInstagram;
        return $this;
    }

    /**
     * Getter para instagramUrl
     *
     * @return string | null
     */
    public function getInstagramUrl(): ?string
    {
        return $this->instagramUrl;
    }

    /**
     * Setter para instagramUrl
     *
     * @param string | null $instagramUrl
     * @return PesquisaModel
     */
    public function setInstagramUrl(?string $instagramUrl): PesquisaModel
    {
        $this->instagramUrl = $instagramUrl;
        return $this;
    }

    /**
     * Getter para hasLinkedin
     *
     * @return bool
     */
    public function getHasLinkedin(): bool
    {
        return $this->hasLinkedin;
    }

    /**
     * Setter para hasLinkedin
     *
     * @param bool $hasLinkedin
     * @return PesquisaModel
     */
    public function setHasLinkedin(bool $hasLinkedin): PesquisaModel
    {
        $this->hasLinkedin = $hasLinkedin;
        return $this;
    }

    /**
     * Getter para linkedinUrl
     *
     * @return string | null
     */
    public function getLinkedinUrl(): ?string
    {
        return $this->linkedinUrl;
    }

    /**
     * Setter para linkedinUrl
     *
     * @param string | null $linkedinUrl
     * @return PesquisaModel
     */
    public function setLinkedinUrl(?string $linkedinUrl): PesquisaModel
    {
        $this->linkedinUrl = $linkedinUrl;
        return $this;
    }

 /**
     * Getter para hasEspecialista
     *
     * @return bool
     */
    public function getHasEspecialista(): bool
    {
        return $this->hasEspecialista;
    }
 /**
     * Setter para hasEspecialista
     *
     * @param bool $hasEspecialista
     * @return PesquisaModel
     */
    public function setHasEspecialista(bool $hasEspecialista): PesquisaModel
    {
        $this->hasEspecialista = $hasEspecialista;
        return $this;
    }

    /**
     * Getter para especialista
     *
     * @return string | null
     */
    public function getEspecialista(): ?string
    {
        return $this->especialista;
    }

    /**
     * Setter para especialista
     *
     * @param string | null $especialista
     * @return PesquisaModel
     */
    public function setEspecialista(?string $especialista): PesquisaModel
    {
        $this->especialista = $especialista;
        return $this;
    }

   
     /**
     * Getter para dataAgendamento
     *
     * @return DateTime|null
     */
    public function getDataAgendamento(): ?DateTime
    {
        return $this->dataAgendamento;
    }

   
  /**
 * Setter para dataAgendamento
 *
 * @param DateTime|string|null $dataAgendamento
 * @return PesquisaModel
 */
    public function setDataAgendamento($dataAgendamento): PesquisaModel
    {
        if (is_string($dataAgendamento)) {
            try {
                $this->dataAgendamento = new DateTime($dataAgendamento);
            } catch (\Exception $e) {
                throw new \InvalidArgumentException('Formato de data inválido para dataAgendamento.');
            }
        } elseif ($dataAgendamento instanceof DateTime || $dataAgendamento === null) {
            $this->dataAgendamento = $dataAgendamento;
        } else {
            throw new \InvalidArgumentException('O dataAgendamento deve ser uma string, DateTime ou null.');
        }
        return $this;
    }


    /** Auditoria */
    
    /**
    * Getter para isDeleted
    *
    * @return bool
    */
   public function getIsDeleted(): bool
   {
       return $this->isDeleted;
   }

   /**
    * Setter para isDeleted
    *
    * @param bool $isDeleted
    * @return PesquisaModel
    */
   public function setIsDeleted(bool $isDeleted): PesquisaModel
   {
       $this->isDeleted = $isDeleted;
       $this->setUpdatedAt(); // Atualiza a data de modificação
       return $this;
   }

   /**
    * Getter para created_at
    *
    * @return DateTime
    */
   public function getCreatedAt(): DateTime
   {
       return $this->created_at;
   }

   /**
    * Getter para updated_at
    *
    * @return DateTime
    */
   public function getUpdatedAt(): DateTime
   {
       return $this->updated_at;
   }

   /**
    * Setter para updated_at
    * Atualiza a data de modificação para a data e hora atual
    *
    * @return void
    */
   public function setUpdatedAt(): PesquisaModel
   {
       $this->updated_at = new DateTime(); // Atualiza para a data e hora atual
       return $this;  
   }


}