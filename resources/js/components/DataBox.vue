<template>
    <div class="box" :style="{backgroundColor:color}">
        <div class="h3" style="color:white;font-weight:700;">
            {{count}}
        </div>
        <div class="h4" style="color:white;">
            {{title}} 
        </div>
        <div class="bottom">

        </div>
    </div>
</template>
<script>
    export default {
        props:['count','title','color']
    }
</script>
<style scoped>
    .box{
        padding:10px 10px 10px 10px;
        border-radius: 5px;
    }
</style>