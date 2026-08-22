<link rel="stylesheet" href="style.css"> <!-- Precisa estar aqui para funcionar nos outros códigos -->

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">

    <div class="navbar-container">

        <a class="navbar-brand" href="index.php">
            PLATAFORMA DE INCLUSÃO EM INFORMÁTICA
        </a>


        <!-- botao -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Abrir menu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- menu -->
        <div
            class="collapse navbar-collapse"
            id="navbarResponsive"
        >

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        INÍCIO
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#equidade">
                        EQUIDADE NA EDUCAÇÃO
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#libras">
                        IMPORTÂNCIA DA LIBRAS
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#sinais">
                        SINAIS NA TI
                    </a>
                </li>

            </ul>


            <!-- PESQUISA -->
            <form class="search-form" onsubmit="event.preventDefault();">

                <input
                    id="inputPesquisa"
                    type="text"
                    placeholder="Pesquisar..."
                    onkeyup="filtrarConteudoPagina()"
                >

                <button type="button" onclick="filtrarConteudoPagina()">
                    🔍
                </button>

            </form>

        </div>

    </div>

</nav>