<?php
    include("config.php");
        // Definindo saudação com base na hora do dia
        $hour = date('H');
        if ($hour < 12) {
            $saudacao = 'Bom dia';
        } elseif ($hour < 18) {
            $saudacao = 'Boa tarde';
        } else {
            $saudacao = 'Boa noite';
        }

        $idade = new DateTime('2002-09-27'); // Exemplo de data

        function calcular_idade($ano_1) {
            // Certifique-se de que $ano_1 é uma instância de DateTime
            if (!$ano_1 instanceof DateTime) {
                return "Data inválida";
            }
        
            $presente = new DateTime();
        
            // Calcular a diferença em anos
            $ano = $presente->format('Y') - $ano_1->format('Y');
        
            // Ajustar se ainda não passou o aniversário
            if ($presente->format('m') < $ano_1->format('m') || 
                ($presente->format('m') == $ano_1->format('m') && $presente->format('d') < $ano_1->format('d'))) {
                $ano--;
            }
        
            // Retornar a idade no formato correto
            return $ano != 1 ? "$ano anos" : "1 ano";
        }        
        
    

        include("header.php");
?>

<main class="main">    
    <section id="home" class="d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-center text-white">
                <h1 id="texto-digitado" class="apresentacao"></h1>
            </div>

            <div class="col-lg-12 text-center seta">
                <div class="my-5">
                    <i class="fa-solid fa-arrow-down-long animated-arrow"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-sobre-mim" id="sobre-mim">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center sobremim my-5">
                        <h1>Sobre mim</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-sm-12 col-12 sobremim-apresentacao">
                    <div class="my-4">
                        <ul class="pl-0 lista">
                            <li>
                                <b>Nome:</b> Albert Hatakeyama Nabarrete
                            </li>
                            <hr >
                            <li>
                                <b>Idade:</b> <?php echo calcular_idade($idade); ?>
                            </li>
                            <hr >
                            <li>
                                <a href="mailto:ahnabarrete@gmail.com" class="text-decoration-none">
                                    <b>Email:</b> ahnabarrete@gmail.com
                                </a>
                            </li>
                            <hr >
                            <li>
                                <b>De:</b> Brasil, São Paulo, Zona Sul
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-sm-12 col-12">
                    <img src="assets/imagens/foto-nova.png" alt="" class="img-fluid bordas-arredondadas">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12   sobremim-apresentacao">
                    <div class="my-4 p-4">
                        <h1>Eu sou <b>Albert H. Nabarrete</b>, um Desenvolvedor Front-end</h1>
                        <p>
                            Atuo na área de desenvolvimento web desde 2021, motivado por um forte interesse por tecnologia e inovação. Minha trajetória teve início com o incentivo de familiares da área de TI, e desde então venho me dedicando intensamente ao aprendizado e à prática da programação. Comecei desenvolvendo templates, one pages e sites estáticos utilizando HTML e CSS. Atualmente, concentro meus esforços na criação de aplicações web modernas, responsivas e otimizadas para diferentes dispositivos, com foco em desempenho, usabilidade e boas práticas de desenvolvimento.
                        </p>
                    </div>
                </div>
                <div class="separador-z my-4"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12   sobremim-apresentacao">
                    <div class="my-4 p-4">
                        <h1><b>Objetivo</b></h1>
                        <p>
                            Desenvolvedor Front-end com experiência na criação de interfaces dinâmicas e otimizadas utilizando JavaScript, PHP e frameworks modernos como React e Next.js. Tenho sólido domínio em arquitetura de componentes e versionamento com Git. Atualmente, foco minha transição para o perfil Full Stack, aprofundando conhecimentos em Java e Swift para entregar soluções ponta a ponta — da interface à estrutura do servidor. Busco oportunidades que valorizem a evolução técnica e a entrega de produtos digitais de alto impacto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        include("projeto.php");
    ?>
    <section class="bg-sobre-mim py-5" id="habilidades">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center habilidades-titulo my-5">
                        <h1 class="glitch-text" data-text="Tecnologias">Tecnologias</h1>
                        <div class="cyber-line"></div>
                    </div>
                </div>
            </div>

            <!-- Cards de Tecnologias - Apenas Imagens -->
            <div class="row justify-content-center">
                <!-- HTML -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" 
                                alt="HTML5">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- CSS -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" 
                                alt="CSS3">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" 
                                alt="JavaScript">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- React.js -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" 
                                alt="React.js">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- Next.js -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" 
                                alt="Next.js">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" 
                                alt="Bootstrap">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- Tailwind -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <i class="devicon-tailwindcss-original colored display-3"></i>
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- PHP -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" 
                                alt="PHP">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- MySQL -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" 
                                alt="MySQL">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Java -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" 
                                alt="Java">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- Spring Boot -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/spring/spring-original.svg" 
                                alt="Spring Boot">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- Swift -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" 
                                alt="Swift">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>

                <!-- Git -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="cyber-card">
                        <div class="cyber-card-inner">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" 
                                alt="Git">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php 
    include("footer.php");
?>
 
