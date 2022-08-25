<template>
 <div class="container">
        <div class="content">
                <form class="rebild" action="" @submit.prevent="login">
                <h2> Login </h2>
                <input type="text" v-model="username" placeholder="Login" name="name" id="">
                <input type="password" v-model="password" placeholder="Password" name="password" id="">
                <button class="btn b-orange-s"><h6>Войти</h6></button>
                </form>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

    export default{
        name:'login',
        data(){
            return{
                username:'',
                password:'',
                access_token:'',
            }
        },
        methods:{
            login(){
                axios.post('/login',{
                username: this.username,
                password: this.password
                }).then(res=> {
                    if(res.data.status){
                        this.$router.push('/auto');
                    }
                })
            }
        }
    }
</script>
