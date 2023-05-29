<section id="menu">
    <div class="logo">
        <img src="http://<?php echo APP_HOST; ?>/public/img/logoDinheiro.png" alt="">
        <h2>NuAzul<h2>
    </div>
    <div class="itens">
        <li>
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="las la-plus"></i>Novo
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdownMenu">

                <li>
                    <a href="http://<?php echo APP_HOST; ?>/transacao/despesas"><i class="las la-sort-amount-down"></i>Despesa</a>
                </li>
                <li>
                    <a href="http://<?php echo APP_HOST; ?>/transacao/receitas"><i class="las la-sort-amount-up"></i>Receita</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="http://<?php echo APP_HOST; ?>/login/dashboard"><i class="las la-home"></i>Dashboard</a>
        </li>

        <li>
            <a href="http://<?php echo APP_HOST; ?>/transacao/despesas"><i class="las la-donate"></i>Despesas</a>
        </li>
        <li>
            <a href="http://<?php echo APP_HOST; ?>/transacao/receitas"><i class="las la-piggy-bank"></i>Receitas</a>
        </li>
        <?php
        if ($Sessao::retornaTipoUsuario() == $EnumTipoUsuario::ADMIN->value) {
        ?>
            <li>
                <a href="./administrador.php"><i class="las la-comment-alt"></i>Mensagens</a>
            </li>
        <?php
        } else {
        ?>
            <li>
                <a href="./contato_usuario.php"><i class="las la-comment-alt"></i>Contato</a>
            </li>
        <?php
        }
        ?>

        <li>
            <a href="./alterar_dados_cadastrais.php"><i class="las la-cog"></i>Configurações</a>
        </li>
        <li>
            <a href="http://<?php echo APP_HOST; ?>/home/index"><i class="las la-power-off"></i>Logout</a>
        </li>
    </div>
</section>