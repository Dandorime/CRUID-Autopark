<template>
<spin v-if="loading"></spin>
<!-- <div v-else-if="!loading && !not_found">

</div> -->
<div class="container"> 
        <div class="content">
            
            <object class="svg-object" data="resource\carref\newCar(1).svg" type="image/svg+xml"></object>
        
            <span class="rebild">
                <span class="o-text">
                    <h3>Модель</h3>
                    <h3 :class="isEdit(auto.id) ? 'd-none' : 'orange'">{{auto.Moodel}}</h3>
                    <input :class="isEdit(auto.id) ? '' : 'd-none'" v-model="auto.Moodel" type="text" name="" id="">
                    <h3>Номер</h3>
                    <h3 :class="isEdit(auto.id) ? 'd-none' : 'orange'" >{{auto.num}}</h3>
                    <input :class="isEdit(auto.id) ? '' : 'd-none'" v-model="auto.num" type="text" name="" id="">
                    <h3>Состояние</h3>
                    <h3 :class="isEdit(auto.id) ? 'd-none' : 'orange'">{{auto.status}}</h3>
                    <input :class="isEdit(auto.id) ? '' : 'd-none'" v-model="auto.status" type="text" name="" id="">
                    <h3>Пробег</h3>
                    <h3 :class="isEdit(auto.id) ? 'd-none' : 'orange'">{{auto.mileage}}</h3>
                    <input :class="isEdit(auto.id) ? '' : 'd-none'" v-model="auto.mileage" type="text" name="" id="">
                    <h3>Последнее ТО</h3>
                    <h3 :class="isEdit(auto.id) ? 'd-none' : 'orange'" >{{auto.latest_maintenance}}</h3>
                    <input :class="isEdit(auto.id) ? '' : 'd-none'" v-model="auto.latest_maintenance" type="text" name="" id="">
                </span>
                <a href="#" @click.prevent="changeEditAuto(auto.id,auto.Moodel,auto.num,auto.status,auto.mileage,auto.latest_maintenance)" :class="isEdit(auto.id) ? 'd-none' : 'btn b-orange-s'"><h6>Редактировать</h6></a>
                <button :class="isEdit(auto.id) ? 'btn b-orange-s' : 'd-none'" @click.prevent="save(auto.id)"><h6>Сохранить</h6></button>
            </span>
            
        </div>
    </div>
</template>
<script>
import Spin from '../components/Spin.vue';
   import axios from 'axios';

 export default {
    
        components: {
            Spin
        },
        data:()=>({
                loading: true,
                auto:{
            Moodel:'',
            num:'',
            status:'',
            mileage:'',
            latest_maintenance:''},
                editAuto:null
        }), 
        mounted(){
            this.loadShow(this.$route.params.id);
            
        },
        methods:{
            loadShow(id){
                axios.get('/api/auto/' + id )
                .then(res => {
                    this.auto = res.data;
                    
                    setTimeout(()=>{
                        this.loading = false;
                    },500)
                    
                })
            },
            changeEditAuto(id,Moodel,num,status,mileage,latest_maintenance){
                this.editAuto = id;
                this.Moodel = Moodel;
                this.num = num;
                this.status = status;
                this.milange = mileage;
                this.latest_maintenance = latest_maintenance;
            },
            isEdit(id){
                if(id === this.editAuto)
                {
                    return true;
                }

            },
            save(id){
                this.loading=true;
                axios.put(`/api/auto/${id}` , this.auto ).then(res=> {
                    console.log(res),
                    setTimeout(()=>{
                        this.loading = false;
                    },500)
                    
                })
            }
        }

        }

</script>