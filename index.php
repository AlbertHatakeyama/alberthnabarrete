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
                            Atuo neste setor há três anos e tenho uma verdadeira paixão por criar! Desde sempre, me interessei por tecnologia e, em 2021, comecei a estudar programação, incentivado por meu pai e um familiar que já trabalha na área. Minha jornada começou com a criação de templates, one pages e sites utilizando HTML e CSS. Atualmente, meu objetivo é desenvolver aplicações, Sites, Land Pages e Templates responsivos.
                        </p>
                    </div>
                </div>
                <div class="separador-z my-4"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12   sobremim-apresentacao">
                    <div class="my-4 p-4">
                        <h1><b>Objetivo</b></h1>
                        <p>
                            Busco crescimento profissional na área de desenvolvimento web, visando me tornar um
                            desenvolvedor full stack. Com três anos de experiência em front-end, estou aprofundando
                            meus conhecimentos em React.js, Next.js e PHP, além de expandir minhas habilidades
                            para o back-end com cursos de Java e Swift. Estou comprometido em aprender
                            novas tecnologias, colaborar com outros profissionais e contribuir para projetos
                            inovadores, sempre buscando evolução contínua e excelência no desenvolvimento de
                            soluções digitais.
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
                    <div class="card mb-4">
                        <div class="card-header  align-items-center">
                            <i class="uil uil-brackets-curly mr-2 text-danger"></i>
                            <h2 class="mb-0">Front-End</h2>
                            <p class="ml-auto text-white"><b>3 anos</b> de experiência</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>HTML</span>
                                    <span>100%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>CSS</span>
                                    <span>95%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>JavaScript</span>
                                    <span>50%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header align-items-center">
                            <i class="uil uil-server mr-2 text-danger"></i>
                            <h2 class="mb-0">Back-End</h2>
                            <p class="ml-auto"><b>1 ano</b> de experiência</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>PHP</span>
                                    <span>40%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Java</span>
                                    <span>30%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Python</span>
                                    <span>40%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Swift iOS</span>
                                    <span>35%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header  align-items-center">
                            <i class="uil uil-brackets-curly mr-2 text-danger"></i>
                            <h2 class="mb-0">Framework</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Bootstrap</span>
                                    <span>100%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Tailwind</span>
                                    <span>85%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>React.js</span>
                                    <span>45%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Next.js</span>
                                    <span>55%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Spring</span>
                                    <span>20%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header align-items-center">
                            <i class="uil uil-server mr-2 text-danger"></i>
                            <h2 class="mb-0">Banco de Dados</h2>
                            <p class="ml-auto"><b>1 ano</b> de experiência</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>MySQL</span>
                                    <span>30%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br><br><br><br><br>
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
 
