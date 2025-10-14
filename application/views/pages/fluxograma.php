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
                    <div class="tab active" onclick="openTab('estrutura')">📑 Estrutura</div>
                    <div class="tab" onclick="openTab('otimizacao')">⚡ Otimização</div>
                    <div class="tab" onclick="openTab('relatorios')">📊 Relatórios</div>
                    <div class="tab" onclick="openTab('validacao')">🔍 Validação</div>
                </div>
                <div id="estrutura" class="tab-content active">
                    <ul>
                        <li>Mapeamento de Conteúdos</li>
                        <li>Classificação e Organização de Informações</li>
                    </ul>
                </div>
                <div id="otimizacao" class="tab-content">
                    <ul>
                        <li>Aplicar Otimização de Meta Tags</li>
                        <li>Criação de Templates de SEO</li>
                        <li>Integração de Keywords em Textos</li>
                    </ul>
                </div>
                <div id="relatorios" class="tab-content">
                    <ul>
                        <li>Geração de Relatórios de SEO</li>
                        <li>Relatórios para Otimização de Conteúdo</li>
                    </ul>
                </div>
                <div id="validacao" class="tab-content">
                    <ul>
                        <li>Validação Técnica de SEO</li>
                        <li>Monitoramento Inicial</li>
                    </ul>
                </div>
            </div>
        </div>

</body>

</html>