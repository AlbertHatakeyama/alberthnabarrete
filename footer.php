        <section class="footer p-4">
            <footer class="container">
                <div class="px-3">
                    <div class="row align-items-center justify-content-center justify-content-md-between mb-4">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <ul class="list-unstyled contatenos p-0">
                                <div class="text-start">
                                    <h1><b>Informações</b></h1>
                                </div>
                                <li class="mb-2">
                                    <a href="obrigado-whatsapp" class="text-decoration-none text-white">
                                        WhatsApp: (11) 96070-5306
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="mailto:ahnabarrete@gmail.com" class="text-decoration-none text-white">
                                        E-mail: ahnabarrete@gmail.com
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="meucurriculo.pdf"class="btn btn-outline-secondary "  download="Currículo Canditato">
                                        <i class="fa-solid fa-download"></i> Meu Currículo
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <ul class="lista-nav-rodape list-unstyled pl-0">
                                <div class="text-center">
                                    <h1><b>Menu</b></h1>
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-white">
                                            Home
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="sobre_nos" class="text-decoration-none text-white">
                                            Sobre mim
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="projetos" class="text-decoration-none text-white">
                                            Projetos
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="habilidades" class="text-decoration-none text-white">
                                            Habilidades 
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <h1 class="text-center"><b>Rede Social</b></h1>
                            <ul class="d-flex rede-social text-center">
                                <?php 
                                    $redes_sociais = [
                                        ['fab fa-github', 'https://github.com/AlbertHatakeyama'],
                                        ['fab fa-linkedin', 'https://www.linkedin.com/in/albert-h-75495622a/'],
                                        ['fab fa-instagram', 'https://www.instagram.com/albert_nabarrete20/#'],
                                        ['fab fa-facebook', 'https://www.facebook.com/albert.nabarrete'],
                                        
                                    ];
                                    
                                    foreach ($redes_sociais as $rede_social) {
                                        if ($rede_social[1] != "") {
                                ?>
                                    <li>
                                        <a class="btn btn-redesocial m-2 p-2" href="<?=$rede_social[1]?>" target="_blank">
                                            <i class="<?=$rede_social[0]?> fa-fw fa-lg"></i>
                                        </a>
                                    </li>
                                <?php 
                                        } 
                                    }
                                ?>
                            </ul>
                        </div>
                        <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
                            <div class="my-4 text-center">
                                <img src="assets/imagens/logo-ahn.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    </body>
</html>
    <!--====== BOTÃO FLUTUANTE WHATSAPP =======-->
    <div class="botao_flutuante">
        <a href="obrigado-whatsapp"><img src="assets/imagens/bt_whatsapp2.png" class="img-fluid border-r" style="width: 60px; position: fixed; right: 10px !important;bottom: 20px!important; z-index: 99;"></a>
    </div>
<script>
    // Saudação obtida do PHP
    const saudacao = "<?php echo $saudacao; ?>";

    // Verifica se o nome já está salvo e ainda é válido
    const savedData = localStorage.getItem("usuario_nome");
    const savedTime = localStorage.getItem("usuario_tempo");
    const currentTime = Date.now();
    let nome = "";

    if (savedData && savedTime && currentTime - parseInt(savedTime, 10) < 10 * 60 * 1000) {
        // Se o nome estiver salvo e dentro do prazo de 10 minutos
        nome = savedData;
    } else {
        // Solicita o nome do usuário até ser fornecido
        while (!nome.trim()) {
            nome = prompt("Digite seu primeiro nome:");
            if (!nome.trim()) {
                alert("Por favor, insira seu nome para continuar.");
            }
        }
        // Salva o nome e o timestamp no localStorage
        localStorage.setItem("usuario_nome", nome);
        localStorage.setItem("usuario_tempo", currentTime.toString());
    }

    // Combina saudação e nome, adiciona quebra de linha antes de "Seja bem-vindo"
    const texto = `${saudacao}, ${nome}\n\nSeja bem-vindo`;

    // Configura animação com Typed.js
    new Typed("#texto-digitado", {
        strings: [texto],
        typeSpeed: 50,
        backSpeed: 30,
        loop: false,
    });
</script>
<script>
    document.getElementById("ver-mais-menos").addEventListener("click", function() {
        var projetosRestantes = document.getElementById("projetos-restantes");
        var botao = document.getElementById("ver-mais-menos");

        if (projetosRestantes.classList.contains("d-none")) {
            projetosRestantes.classList.remove("d-none");
            botao.textContent = "Ver Menos";
        } else {
            projetosRestantes.classList.add("d-none");
            botao.textContent = "Ver Mais";
        }
    });
</script>
