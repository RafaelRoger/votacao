<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Music</title>
    <!-- Favicon-->
    <!--<link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <link rel="icon" type="image/png" href="imagens/votos2.jpg" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        header {
            transition: opacity 0.5s ease;
            background-size: cover;
            background-position: center;
        }

        header:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!"><img src="imagens/votos4.jpg" style="max-width: 40px;">VOTING</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Todas as músicas</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Marabenta</a></li>
                            <li><a class="dropdown-item" href="#!">Jazz</a></li>
                            <li><a class="dropdown-item" href="#!">Pop</a></li>
                            <li><a class="dropdown-item" href="#!">Rock</a></li>
                            <li><a class="dropdown-item" href="#!">Hip Hop</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="#about-section">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header" class="bg-dark py-5" style="background-size: cover; background-position: center;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <p class="lead fw-normal text-light mb-0">Bem-vindo à sua plataforma de votacao</p>
            </div>
        </div>
    </header>

    <script>
        // Array de URLs das imag                const imageUrls = ['imagens/musica.jpg', 'imagens/dance.jpg', 'imagens/instrumento.        ];

        let curren        ex = 0;
        const header = document.getElementB        'header');

        // Função para mudar a         em do cabeçalho
        functio            geHeaderImage() {
            header.style.backgroundImage = `url('$            Urls[currentIndex]}')`;
            currentIndex = (cu        tIn + 1) % imageUrls.length;
        }

        // Configurar intervalo para mudar a im         a cada 5 segundos (5000 milissegundos        setInterval(changeHeaderImage, 5000);
    </script>

    <!-- Section-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bolder">Vote no seu artista favorito</h2>
                <p class="lead">Não perca mais tempo. Let's goooo....!</p>
            </div>
        </div>
    </section>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($songs as $song)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top product-image" src="{{ url('storage/'.$song->image) }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $song->singer}}</h5>
                                <!-- codigo-->
                                <strong>{{ $song->title }}</strong>
                                <p>Código: {{ $song->code }}</p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-primary mt-auto" href="#" data-bs-toggle="modal"
                                        data-bs-target="#mpesaModal{{ $song->id }}">
                                        <i class="bi bi-star"></i> +Votar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer id="about-section" class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                    <h5 class="text-white">Sobre Nós</h5>
                    <p class="text-muted">KUHAVA é a sua plataforma de votação online para os melhores artistas.
                        Participe e faça a voz do seu artista favorito ser ouvida!</p>
                </div>
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <h5 class="text-white">Redes Sociais</h5>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <h5 class="text-white">Contato</h5>
                    <p class="text-muted">Email: info@kuhava.com</p>
                    <p class="text-muted">Tel: 8488-35520</p>
                    <p class="text-muted">Tel: 8788-35520</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <p class="text-muted mb-0">&copy; KUHAVA 2023. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <!-- Modal para M-Pesa -->
    @foreach($songs as $song)
    <div class="modal fade" id="mpesaModal{{ $song->id }}" tabindex="-1" aria-labelledby="mpesaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mpesaModalLabel">Inserir o numero M-pesa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('mpesa.payment') }}" method="post">
                        @csrf
                        <label for="numeroInput">Número:</label>
                        <input type="text" class="form-control" name="msisdn" id="numeroInput">
                        <input type="hidden" class="form-control" name="song_id" value="{{ $song->id }}">
                        <button type="submit" class="btn btn-primary" onclick="confirmarPagamento()">Confirmar
                            Pagamento
                            <img src="imagens/confirma.jpg" alt="E-mola" class="img-fluid ml-2"
                                style="max-width: 30px;"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!--end modal de opcoes-->


    <!-- Modal para confirmar numero -->
    <div class="modal fade" id="numeroModal" tabindex="-1" aria-labelledby="numeroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('mpesa.payment') }}" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="numeroModalLabel">Digite o número correspondente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">

                        <label for="numeroInput">Número:</label>
                        <input type="text" class="form-control" name="msisdn" id="numeroInput">
                        <button type="button" class="btn btn-primary" onclick="confirmarPagamento()">Confirmar Pagamento
                            <img src="imagens/confirma.jpg" alt="E-mola" class="img-fluid ml-2"
                                style="max-width: 30px;"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $('#btnRealizarPagamento').on('click', function () {
            realizarPagamento();
        });

        function realizar{
            var opcaoSelecionada = $("input[name='paymentOption']:checked").val();

            $('#mpesal').modal('hide');
            if (opcaoSelecionada === "mpesa") {
                // Exibir o modal para digitar o número            $('#numeroModal').modal('show');

                // Fechar o primeiro modal
                $('#mpesaModal').modal('hide');
            } else if (opcaoSelecionada === "emola") {
               Exibir o modal para digitar o número E - mola
                $('#numeroModal').modal('show');

            }
        }

        function confirmarP                       var numeroDigitado = $('#numeroInput').val();

        $('#mpesaModal').modal('hide')  $('#numeroModal').modalde');
        }
    </script>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>