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
                    <img src="assets/imagens/img-portfolio1" alt="" class="img-fluid bordas-arredondadas">
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
                            Busco uma oportunidade como Desenvolvedor Front-end, com foco em tecnologias como React.js e Next.js, além de conhecimento em PHP e MySQL. Tenho interesse também em iniciar um estágio na área de desenvolvimento mobile, a fim de adquirir experiência prática com Swift e React Native, ampliando minhas habilidades e contribuindo com soluções inovadoras para a equipe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        include("projeto.php");
    ?>
    <section id="habilidades">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center habilidades-titulo my-5">
                        <h1>Habilidades</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card experiencia mb-4">
                        <div class="card-header  align-items-center">
                            <i class="uil uil-brackets-curly mr-2 text-danger"></i>
                            <h2 class="mb-0">Desenvolvimento Front-End</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>HTML</span>
                                    <b>3 anos</b>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>CSS</span>
                                    <b>3 anos</b>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>JavaScript</span>
                                    <b>3 anos</b>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card experiencia mb-4">
                        <div class="card-header align-items-center">
                            <i class="uil uil-server mr-2 text-danger"></i>
                            <h2 class="mb-0">Desenvolvimento Back-End</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>PHP</span>
                                    <b>2 anos</b>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Swift</span>
                                    <b>5 meses</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card experiencia mb-4">
                        <div class="card-header  align-items-center">
                            <i class="uil uil-brackets-curly mr-2 text-danger"></i>
                            <h2 class="mb-0">Framework</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Bootstrap</span>
                                    <b>3 anos</b>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Tailwind</span>
                                    <b>2 anos</b>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>React.js</span>
                                    <b>2 anos</b>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Next.js</span>
                                    <b>1 ano</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card experiencia mb-4">
                        <div class="card-header align-items-center">
                            <i class="uil uil-server mr-2 text-danger"></i>
                            <h2 class="mb-0">Banco de Dados</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>MySQL</span>
                                    <b>1 ano</b>
                                </div>
                                <br><br>
                            </div>
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
 
