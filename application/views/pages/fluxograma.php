<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluxograma SEO</title>
</head>

<body>
    <h1>Fluxograma Completo</h1>
    <div class="flowchart">
        <div class="node" onclick="openModal('Início','Este é o ponto de partida para integrar as práticas de SEO à gestão da informação na sua organização. O objetivo é otimizar a organização, recuperação e disseminação de informações, tanto para usuários internos quanto externos, através de um processo estruturado e contínuo.')">Início</div>
        <div class="line"></div>
        <div class="node" onclick="openModal('Identificação de Palavras-Chave','Objetivo: Identificar os termos mais relevantes que os usuários utilizam para buscar informações relacionadas ao seu negócio, área de atuação ou setor. \n\nAções: Utilize ferramentas de pesquisa de palavras-chave como Google Keyword Planner, SEMrush e Ahrefs. Analise os termos mais buscados nos sistemas de informação da organização e realize pesquisas com usuários para entender suas necessidades informacionais.')">Identificação de Palavras-Chave (Ferramentas de SEO)</div>
        <div class="line"></div>
        <div class="flowchart">
            <div class="node" onclick="openModal('Análise de Tendências e Competitividade','Objetivo: Avaliar a relevância das palavras-chave identificadas, considerando as tendências de busca e a competitividade no mercado. \n\nAções: Utilize ferramentas como Google Trends para analisar as tendências de busca. Avalie o volume de buscas, a concorrência e a dificuldade de ranqueamento para cada palavra-chave. Identifique quais palavras-chave são mais promissoras para a sua estratégia.')">Análise de Tendências e Competitividade (Google Trends, etc.)</div>
            <div class="line"></div>

            <div class="connector"></div>

            <div class="branch">
                <div>
                    <div class="line"></div>
                    <div class="node" onclick="openModal('Palavras-chave não atuais','Objetivo: Descartar palavras-chave que não são mais relevantes para o seu público ou que possuem baixa popularidade.\n\nAções: Analise as palavras-chave identificadas e remova aquelas que não geram tráfego relevante, que estão desatualizadas ou que não se alinham com os seus objetivos de negócio.')">Palavras-chave não atuais<br>(Descartar)</div>
                </div>
                <div>
                    <div class="line"></div>
                    <div class="node">Palavras-chave Relevantes<br>(Reforçar)</div>
                </div>
                <div>
                    <div class="line"></div>
                    <div class="node" onclick="openModal('Competitividade Média','Objetivo: Identificar palavras-chave com nível de competitividade moderado, que podem ser trabalhadas com estratégias de SEO eficazes.\n\nAções: Avalie a dificuldade de ranqueamento para cada palavra-chave. Utilize ferramentas de análise de backlinks e conteúdo para identificar oportunidades de otimização.')">Competitividade Média</div>
                </div>
            </div>
            <div class="line"></div>
            <div class="node"
                onclick="openModal('Refinamento de Palavras-Chave','Objetivo: Aprimorar a sua lista de palavras-chave, utilizando ferramentas avançadas de SEO.\n\nAções: Utilize ferramentas como Ahrefs e SEMrush para analisar a concorrência, identificar novas palavras-chave e encontrar oportunidades de otimização. Realize testes A/B para avaliar a performance de diferentes palavras-chave.')">
                Refinamento de Palavras-Chave (ferramentas avançadas: Ahrefs, etc.)</div>
            <div class="line"></div>
            <div class="node" onclick="openModal('Integração de Palavras-Chave','Objetivo: Integrar as palavras-chave selecionadas ao plano de conteúdo da empresa, garantindo que sejam utilizadas de forma estratégica em todos os materiais.\n\nAções: Inclua as palavras-chave em títulos, subtítulos, textos, meta descrições e URLs. Crie um calendário editorial que leve em consideração as palavras-chave prioritárias.')">
                Integração de Palavras-Chave no Plano de Conteúdo da Empresa</div>
            <div class="line"></div>
            <div class="node" onclick="openSeoOnPage()">SEO On-Page</div>
            <div class="line"></div>
            <div class="node" onclick="openModal('SEO Off-Page: estratégias externas de link building e parcerias')">SEO
                Off-Page</div>
            <div class="line"></div>
            <div class="node"
                onclick="openModal('Monitoramento e análise contínua de desempenho com Google Analytics, SEMrush, etc.')">
                Monitoramento e Análise do Desempenho SEO</div>
        </div>

        <!-- Modal Padrão -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <p id="modalText"></p>
            </div>
        </div>

        <!-- Modal para informações mais complexas -->
        <!-- Modal SEO On-Page com Tabs -->
        <div id="seoModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeSeoModal()">&times;</span>
                <h2>SEO On-Page</h2>
                <div class="tab-container">
                    <div class="tab active" onclick="openTab('flx1')">Mapeamento de Conteúdos para otimização SEO On-Page</div>
                    <div class="tab" onclick="openTab('flx2')">Classificação e Organização de Informações por Prioridade SEO</div>
                    <div class="tab" onclick="openTab('flx3')">Aplicar Otimização de Meta Tags por Categoria de Conteúdo (dinâmica)</div>
                    <div class="tab" onclick="openTab('flx4')">Criação de Templates de SEO por Tipo de Documento</div>
                    <div class="tab" onclick="openTab('flx5')">Integração de Keywords nos Textos e Seções (Títulos, Subtítulos, etc.)</div>
                    <div class="tab" onclick="openTab('flx6')">Geração de Relatórios de SEO e Otimização de Conteúdo</div>
                    <div class="tab" onclick="openTab('flx7')">Validação Técnica de SEO (Monitoramento inicial)</div>
                </div>
                <div id="flx1" class="tab-content active">
                    <ul>
                        <li>Mapeamento de Conteúdos</li>
                        <li>Objetivo: Mapear os conteúdos existentes e planejar novos conteúdos com base nas palavras-chave selecionadas e nas necessidades do público.</li>
                        <li>Ações: Realize um inventário dos conteúdos existentes e classifique-os por tema e relevância. Identifique lacunas de conteúdo e planeje a criação de novos materiais que atendam às necessidades do público e explorem as palavras-chave prioritárias.</li>
                    </ul>
                </div>
                <div id="flx2" class="tab-content">
                    <ul>
                        <li>Classificação e Organização</li>
                        <li>Objetivo: Classificar e organizar as informações de forma lógica e estruturada, utilizando as palavras-chave como guia.</li>
                        <li>Ações: Crie categorias e subcategorias de conteúdo. Utilize as palavras-chave para nomear as categorias e organizar os conteúdos de forma hierárquica. Utilize tags e metadados para facilitar a busca e a recuperação de informações.</li>
                    </ul>
                </div>
                <div id="flx3_" class="tab-content">
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div id="flx4" class="tab-content">
                    <ul>
                        <li>Criação de Templates</li>
                        <li>Objetivo: Criar templates de SEO para diferentes tipos de documentos, garantindo a padronização e a otimização do conteúdo.</li>
                        <li>Ações: Crie templates para artigos, notícias, páginas de produtos, etc. Inclua nos templates campos para preenchimento de meta tags, títulos otimizados e palavras-chave relevantes.</li>
                    </ul>
                </div>
                 <div id="flx5_" class="tab-content">
                    <ul>
                    </ul>
                </div>
                 <div id="flx6" class="tab-content">
                    <ul>
                        <li>Geração de Relatórios</li>
                        <li>Objetivo: Gerar relatórios de SEO e otimização de conteúdo para acompanhar o progresso e identificar áreas de melhoria.</li>
                        <li>Ações: Utilize ferramentas de análise de SEO para gerar relatórios sobre o desempenho das palavras-chave, o tráfego do site, os backlinks e outras métricas relevantes. Utilize os relatórios para identificar os pontos fortes e fracos da sua estratégia e tomar decisões estratégicas.</li>
                    </ul>
                </div>
                 <div id="flx7_" class="tab-content">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>

</body>

</html>