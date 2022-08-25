<template>
<spin v-if="loading"></spin>
    <div class="container">
        <div class="btn-container">
            <button class="btn b-orange-s filter"><h6>Фильтр</h6></button>
            <router-link class="btn b-orange-s add_car" to="/create"><h6>Добавить транспорт</h6></router-link>
        </div>
       
        <span class="content col-wrap">
            <span class="obj-cont" v-for="auto in autos">
                <div class="svg-card">
                    <object class="svg-object" data="resource\carref\newCar(1).svg" type="image/svg+xml"></object>
                </div>
                <span class="col col-card">
                    <span class="o-text">
                        <h6>{{auto.Moodel}}</h6>
                        <h6>{{auto.num}}</h6>
                        <h6>{{auto.status}}</h6>
                        <h6>{{auto.mileage}}</h6>
                        <h6>{{auto.latest_maintenance}}</h6>
                    </span>
                    <router-link class="btn b-orange-s" :to="{path: `/auto/${auto.id}`}"><h6>Подробнее</h6></router-link>
                    <button class="btn b-orange-s" @click.prevent="deleteAuto(auto.id)">Delete</button>
                </span>
            </span>
        </span>
    </div>
</template>
<script>
    import Spin from './Spin.vue';
   import axios, { Axios } from 'axios';
    export default {
        components: {
            Spin
        },
        data:()=>({
                loading: true,
                autos:[]
        }), 
        mounted(){
            this.load();
        },
        methods:{
            load(){
                axios.get('./api/auto')
                .then(res=> {
                    this.autos = res.data;
                    setTimeout(()=>{
                        this.loading = false;
                    },500)
                    
                })
            },
             deleteAuto(id){
                this.loading= true;
                axios.delete('./api/auto/'+id)
                .then(res=>{
                    this.load();
                    setTimeout(()=>{
                        this.loading = false;
                    },500)
                })
             }
        }

    }
</script>