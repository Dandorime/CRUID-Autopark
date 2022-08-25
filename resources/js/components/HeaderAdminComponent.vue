<template>
    <header class="home_panel">
        <object class="main-icon" data="resource\Snail.svg" type="image/svg+xml"></object>
        <span class="r-block-menu">
            <form action="">
                <input class="search" type="text" placeholder="Search..." name="Search" id="">
            </form>
            <input type="checkbox" class="input-menu" id="nav-toggle" hidden/>
            <label id="nav-label" for="nav-toggle">
                <button id="menu-click" class="btn btn-menu">
                   aa <object class="svg-object burger-svg" data="resource/sendwich.svg" type="image/svg+xml"></object>
                </button>
            </label>
            <div id="menu" class="burger-menu">
                 <router-link v-for="link in links" class="href-text" :to="link.href">{{link.title}}</router-link>
                 <a class="href-text" href=""><button class="btn href-text b-white">Войти</button></a>
            </div>
        </span>
    </header>
</template>
<script>
   export default {
        data(){
            return {
                links: [
                   {
                    title: "Добавить авто",
                    href: "/create"
                    },
                    {
                    title: "Настройки",
                    href: "/auto"
                    },
                    {
                    title: "О нас",
                    href: "/auto"
                    }
                ]
            }
        }
    }
</script>