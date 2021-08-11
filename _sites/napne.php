<?php require_once '../_php/authController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIE - Ouvidoria Institucional Educacional</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../_css/OIE-style.css">

    <script src="../_javascript/script.js"></script>

</head>
<body>

    <div class="header">
        <div class="vertical-header">
            <h1 class="header">OIE</h1>
        </div>
        <div class="vertical-header" id="descricao">
            <span class="header">
                Ouvidoria Institucional Educacional <br>
                Instituto Federal Baiano - Campus Guanambi
            </span>
        </div>
    </div>

    <div class="barra-nav">
        <div class="vertical">
            <div id="link">
                <span><a class="barra-nav" id="a1" href="../index.php">#Início</a></span>
                <span>></span>
                <span><a class="barra-nav" href="#">Napne</a></span>
            </div>

            <?php if (isset($_SESSION['id'])) { ?>
                <div class="dropdown">
                <button onclick="myFunction()" class="profile-button dropbtn"><div><span class="dropbtn" id="span-user">Perfil</span><svg class="dropbtn" viewBox="0 0 1024 1024" id="svg-user"><path d="M476.455 806.696L95.291 425.532Q80.67 410.911 80.67 390.239t14.621-34.789 35.293-14.117 34.789 14.117L508.219 698.8l349.4-349.4q14.621-14.117 35.293-14.117t34.789 14.117 14.117 34.789-14.117 34.789L546.537 800.142q-19.159 19.159-38.318 19.159t-31.764-12.605z"></path></svg></div></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a class="dropdown-link" href="../index.php?logout=1" class="logout">Sair</a>
                        <?php if ($_SESSION['id']=='4') { ?>
                        <a class="dropdown-link" href="admin.php">Admin</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="login-cadastro-link"><a href="cadastro.php">Inscrever-se</a><span>/</span><a href="login.php">Entrar</a></div>
            <?php } ?></li>
        
        </div>
    </div>

    <div class="napne-section">
                
        <h1 class="h1">Núcleo de Apoio Pessoas com Necessidades Especificas</h1>
        <hr>

        <img class="right h150" src="../_img/librassimbolo.jpg" alt="">
        <p>A grosso modo, a língua de sinais brasileira ou Libras é uma língua distinta (assim como o português) não oral utilizada pela comunidade surda, ela reconhecida como a segunda língua oficial do país desde 2002. Vale lembrar que essa língua é exclusivamente nacional e devido a diversidade brasileira, muitos sinais são dados de acordo a região do país, o que trazendo para o português como exemplo, é conhecido como sotaque. O Instituo Federal Baiano Campus Guanambi é dotado de políticas inclusivas que permitem a plena participação do surdo ás atividades estudantis.</p>

        <p>Pesquisas feitas pela equipe dentro da instituição apontam que uma grande parcela dos alunos têm pouco ou nenhum contato com estudantes surdos ou com a língua de sinais, enquanto professores em sua maior parte durante o período síncrono e mediado por intérpretes. Entretanto, segundo estes há falta de incentivo por parte do campus em projetos como cursos para a aprendizagem da língua e a contratação de novos tradutores intérpretes, já por parte dos alunos, em forma de discussões pautadas neste tema em sala ou fora dela e uma socialização maior principalmente em momentos de descontração. Em vista do que foi dito nas pesquisar, é necessário que todos se comprometam à formar uma instituição mais inclusiva.</p>

        <p>Durante as pesquisam foram questionadas o pouco contato com a língua em si e o desejo de aprendizagem dos participantes, tendo em vista que esse seja um benefício coletivo. Segundo o corpo discente, as dificuldades para o engajamento nessa aprendizagem é o curto prazo de tempo comum, ou seja, um horário equivalente de modo que todos estejam disponíveis.</p>

        <p>Por fim, os membros da instituição acreditam que o rendimento escolar de um colega surdo pode ser prejudicado de alguma forma, como por exemplo, em trabalhos de grupo onde o surdo se sente afastado e não consegue acompanhar, muitas vezes cenários como esses dificultam a aprendizagem, outro motivo é a falta de adaptação do material didático e de entendimento sobre inclusão por parte do docente. Por isso, esta pauta é de grande importância para essa ouvidoria, esse é apenas um dos diversos temas a serem discutidos dentro do campus.</p>

        <img class="left h150" src="../_img/napne.jpeg" alt=""> 
        <p>O Núcleo de apoio ás Pessoas com Necessidades Especificas(NAPNE) é um setor do campus que trabalha com pautas inclusivas e formas de implementação destas, por meio dele são feitas várias palestras e levante de pautas importantes ao longo do ano. As pessoas atendidas por esse núcleo eventualmente são estudantes com deficiência visual, auditiva, física, intelectual, entre outros. A equipe de profissionais do setor é composta por pedagogos, interpretes, assistentes sociais e técnicos em assuntos educacionais, quanto ao estudando, este deve procurar o NAPNE logo após a matrícula na campus.</p>

        <h1>CURIOSIDADES E RECOMENDAÇÕES SOBRE LIBRAS E A COMUNIDADE SURDA</h1>
        <hr>

        <li>No dia 26 de setembro comemora-se, no Brasil , o Dia Internacional dos Surdos.</li>

        <img class="center h300" src="../_img/setembroazul.png" alt="">

        <p>A data marcada pela Lei nº 11.796/08, faz  a alusão  de,  o primeiro  Instituto Nacional de Educação de Surdos (INES),  escola de surdos no  Brasil, ter sido criada  em 26 de setembro em 1857, a partir de uma mistura entre a Língua Francesa de Sinais e de gestos já utilizados pelos surdos brasileiros. O  instituto INES  tem apoio do Governo Federal e suas atividades são ensino básico e superior para surdos, além de outras ações de divulgação da cultura surda, abertas a surdos e  também ouvintes.</p> 
   
        <p>Existe , ainda, o  Dia Internacional dos Surdos, comemorado em 30 de agosto de 1880, a data marcada lembram o Congresso de Milão de 1880, no qual foi proibido o uso das Línguas de Sinais na educação dos surdos. Esse marco fez com que os surdos tivessem que se adaptar às línguas orais até que as línguas de sinais fossem novamente aceitas.</p>
	
        <li>Por que azul?</li>

        <p>A Simbologia vem durante  a Segunda Guerra Mundial,  quando os nazistas identificavam todos os deficientes com uma faixa azul no braço, o que incluía a comunidade surda .Em  1999 , a fita   voltou a ser usada mas com símbolo de orgulho e resistência da comunidade surda.</p>

        <li>Importância da FENEIS.</li>

        <img class="center h150" src="../_img/feneis.png" alt="">
 
        <p>Federação Nacional de Educação e Integração dos Surdos,(FENEIS) é uma entidade de cunho civil , tem função especifica  de trabalhar em defesa dos direitos culturais e sociais da comunidade surda, sem fim lucrativos.</p>

        <ul class="mobile-margin">
            <li>Aplicativos em Libras.
                <ul class="mobile-margin">
                    <li class="li">Hand Talk Tradutor</li>
                    <img class="center h200" src="../_img/handtalk.png" alt="">
                    <p>É um tradutor de linguagens de sinais , que a partir  de texto ou voz , traduz simultaneamente conteúdos em português para a Língua de Sinais , tem como objetivo a inclusão das pessoas surdas na sociedade. Criado por Ronaldo Tenório ,Carlos Wanderlan  e Thadeu Luz o aplicativo é grátis e disponível tanto para Android   e IOS.</p>
        
                    <li>Quiz de Libras</li> 
                    <img class="center h200" src="../_img/quizlibras.png" alt="">
                    <p>É um  aplicativo  que possui intuito de auxilia o usuário ,a aprender a datilografia da Língua Brasileira Sinais (LIBRAS),   todos os sinais incluído ,números e letras. Criado pela CA Produções disponível somente para Android.</p>
        
                    <li>Librário</li>
                    <img class="center h150" src="../_img/librario.png" alt="">
                    <p>É um jogo que tem o intuito de ensinar Libras ,  brincando a partir de  pares cartas, possibilita a interação e experiência entre os surdos e ouvintes.</p>
                </ul>
            </li>
        </ul>

        <h1>Direitos Estudantis da Comunidade Surda.</h1>
        <hr>

        <img class="right h160" src="../_img/constituicao.jpg" alt=""> 
        <p>A legislação brasileira nem sempre considerou o surdo como cidadão de direito e deveres, e após muitas lutas de educadores e membros da comunidade surda, muitos direitos foram conquistados. A Constituição Federal de 1988 já apontava para a garantia de direitos aos surdos e aos demais portadores de necessidades educacionais especiais. que ganhou força após a publicação de outras leis específicas para a educação, educação especial, e educação de surdos. As legislações que sucederam a Constituição, foram ao longo dos anos sofrendo alterações que embora parecessem insignificantes, foram ganhando forças para atingir as conquistas ora alcançadas.</p>

        <p>A partir do momento em que a Libras foi reconhecida como língua oficial do Brasil, a comunidade surda ganhou esse espaço tão sonhado na sociedade. No entanto esse reconhecimento da Libras não é suficiente (ainda) para que a comunidade surda possa ter seus direitos afirmados. É necessário também que os ouvintes que manterão relações com os surdos nos estabelecimentos de ensino ou em quaisquer outros lugares públicos, tenham a consciência e competência para utilizar a Libras como meio oficial de comunicação.</p>

        <img class="left h160" src="../_img/justiça.jpg" alt=""> 
        <p>Os documentos internacionais que colaboraram para o desenvolvimento das leis brasileiras, a começar pela LDB, ECA, a lei da Libras entre outros, indicavam as direções a serem seguidas pelos países que pretendiam adotar em suas políticas educacionais meios para inserir as pessoas com necessidades educacionais especiais. Esses documentos permitiram um novo olhar para o surdo e a elaboração dessas leis indica que a direção a ser seguida está correta. No entanto, para que sejam garantidos de fatos os direitos dos surdos ainda há uma série de ações que devem ser implementadas, a começar da formação de professores, que embora tenha sua garantia estabelecida em lei, acreditamos que a carga horária disponibilizada pelas universidades nos cursos de licenciatura é insuficiente para formar um profissional competente para usar a língua de sinais.</p> 

        <p>A política educacional para surdos tem apresentado mudanças significativas. O fato de o surdo ter o direito de frequentar as salas regulares é uma mostra de que é possível proporcionar a inclusão do alunado surdo. Ainda há muito que avançar na educação de surdos no Brasil, porém os pontos atingidos demonstram que estamos na direção certa. Dessa forma, é quase certo que em pouco tempo teremos uma educação que conduza ao sucesso do aluno surdo não só na escola, mas em todos os espaços da sociedade. O atual modelo de educação caminha para um tempo que não mais marginaliza os portadores de necessidades educacionais especiais e, embora muitos não considerem o surdo como tal, é uma vitória para todos que até pouco estavam excluídos (ainda que frequentassem de alguma forma nossas escolas.</p>

        <img class="right h150" src="../_img/leisurdos.png" alt=""> 
        <p>O atendimento hoje prestado aos surdos deve ocorrer, como determina lei, preferencialmente na rede regular, mas com o diferencial de que, se o surdo assim o quiser, com intérprete de Libras. Além disso, é direito do surdo o atendimento educacional especializado, que pode ocorrer tanto nas salas de aula, nos horários normais, como fora da sala de aula, como um serviço de apoio às atividades realizadas regularmente nas salas de aula.</p>

    </div>


</body>
</html>