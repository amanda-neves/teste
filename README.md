# Desafio Técnico - Teste 1 - Meta Tag em Multi-site

# Conteúdo

- [Processo de Concepção e Desenvolvimento](#concepcao)
- [Como Instalar](#como_instalar)
    - [Pré-requisitos](#prerequisitos)
    - [Instalação Manual](#instalacao_manual)
##
# Processo de Concepção e Desenvolvimento <a name = "concepcao"></a>
<p>Os seguintes passos foram utilizados para concepção e desenvolvimento deste módulo:</p>

1) Levantamento e análise de requisitos
    - Os requisitos do módulo, conforme o desafio, são:
        - Adicione um bloco ao head
        - O bloco deve ser capaz de identificar o ID da página CMS e verificar se a página é usada em múltiplas store-views
        - Nesse caso, deve adicionar uma Meta Tag hreflang ao head para cada store-view que a página esteja ativa
        - As Meta Tag’s devem exibir o idioma da loja (exemplo: en-gb, en-us, pt-br, etc...)

2) Configuração de multi-idioma no projeto
    - O módulo foi desenvolvido em um projeto magento já existente, porém esse projeto não era multi-idioma, então foi necessário fazer essa configuração.

3) Desenvolvimento do código com base nos requisitos
    - Para o desenvolvimento do código foram utilizados como base módulos já existentes de configuração de hreflang, sendo feitas as devidas modificações para atender aos requisitos solicitados.

4) Testes
    - Os testes foram realizados em dois projetos magento distintos, ambos com páginas multi-idioma.


##
# Como instalar <a name = "como_instalar"></a>

## Pré-requisitos <a name = "prerequisitos"></a>

```
PHP 7+
Magento 2
```

## Instalação Manual <a name = "instalacao_manual"></a>

1) Crie a pasta na sua instalação do magento em app/code/Custom/HrefLang

3) Copie os arquivos dentro da pasta

4) Execute os comandos:

```
php bin/magento setup:upgrade
php bin/magento module:enable Custom_HrefLang
```
