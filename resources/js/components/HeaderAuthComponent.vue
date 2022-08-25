<template>
    <header>
            <router-link v-for="link in links" class="href-text" :to="link.href">{{link.title}}</router-link>
    </header>
</template>
<script>
 export default {
        data(){
            return {
                links: [
                   {
                    title: "Login",
                    href: "/login"
                    },
                    {
                    title: "Regist",
                    href: "/regist"
                    }
                ]
            }
        }
    }</script>