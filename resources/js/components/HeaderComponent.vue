<template>
    <header>
        <object class="main-icon" data="resource\Snail.svg" type="image/svg+xml"></object>
        <a v-for="link in links" class="href-text" :href="link.href">{{link.title}}</a>
        <form action="/login">
        <button class="btn href-text b-white">Войти</button>
        </form>
    </header>
</template>
<script>
    export default {
        data(){
            return {
                links: [
                   {
                    title: "Пассажирам",
                    href: "/"
                    },
                    {
                    title: "Водителям",
                    href: "/"
                    },
                    {
                    title: "Для бизнеса",
                    href: "/"
                    },
                ]
            }
        }
    }
</script>
