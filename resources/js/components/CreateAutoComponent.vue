<template>
<spin v-if="loading"></spin>
  <div class="container">
        <div class="content">
            
            <object class="svg-object" data="resource\carref\newCar(1).svg" type="image/svg+xml"></object>
        
            <span class="rebild">
                <span class="o-text">
                    <h3>Модель</h3>
                    <input class="orange" v-model="form.Moodel" type="text" name="" id="">
                    <h3>Номер</h3>
                    <input class="orange" v-model="form.num" type="text" name="" id="">
                    <h3>Состояние</h3>
                    <select class="orange" v-model="form.status">
                        <option>repair</option>
                        <option>prepared</option>
                        <option>on_the_route</option>
                        <option>parking</option>
                        <option>broken</option>
                    </select>
                    <h3>Пробег</h3>
                    <input class="orange" v-model="form.mileage" type="number" name="" id="">
                    <h3>Последнее ТО</h3>
                    <input class="orange" v-model="form.latest_maintenance" type="date" name="" id="">
                </span>
                <button class="btn b-orange-s" @click.prevent="store"><h6>Добавить</h6></button>
            </span>
        </div>
    </div>
</template>
<script>
import Spin from './Spin.vue';
import axios from 'axios';
    export default{
        components:{
            Spin
        },
        data:()=>({
            form:{
            Moodel:'',
            num:'',
            status:'',
            mileage:'',
            latest_maintenance:''},
            loading:false 

        }),
        methods:{
            store(){
                this.loading=true;
                axios.post('/api/auto', this.form, {
                    headers:{
                        "Content-type":"application/json"
                    }
                })
                .then(res=> {
                    if(res.data.status){
                        this.$router.push('/auto/'+res.data.auto.id);
                    }
                })
            }
        }
    }
</script>