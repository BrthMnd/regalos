<aside>
    <?php if (isset($_SESSION['usuario'])) { ?>
        <ul>
            <li>
                <img id="home" class="menu-icon" src="./assets/svg/home.svg" alt="proximamente" width="60px">
                <a href="index.php?c=client&a=showMain" class="aside-desc hidden">Inicio</a>
            </li>
            <li>
                <img class="menu-icon" src="./assets/svg/coming-soon.svg" alt="proximamente" width="60px">
                <p class="aside-desc hidden">Proximamente</p>
            </li>
        </ul>
    <?php } ?>
</aside>

<script>
    document.getElementById("home").addEventListener("click", () => {
        window.location.href = 'index.php?log=false&c=client&a=showMain'
    })
</script>