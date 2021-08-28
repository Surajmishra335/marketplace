<template>
    <div>
        <p>
            <button class="btn btn-info" v-if="showBtn" @click.prevent="showPhoneBtn()">Show Number</button>
        </p>
        <p v-if="showNumber">
            <button class="btn btn-success">{{phoneNumber}}</button>
        </p>
    </div>
</template>

<script>
export default {
    props: ['phoneNumber'],

    data(){
        return{
            showBtn: true,
            showNumber: false,
        }
    },
    methods:{
        showPhoneBtn(){
            this.showNumber = true;
            this.showBtn = false;
        }
    }
}
</script>