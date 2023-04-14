<template>
 <div id="app">

<div class="row">

  <div class="column">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
     
    </div>
    <div class="flip-card-back" @click="click">
      <h2>كونسيلر ثالث</h2>
      <h5> معلومات </h5>
      <div>

      <button>Basket</button>
      <button>Add to fav</button>
      </div>
    </div>
  </div>
</div>

  </div>

  <div class="column">
    
       <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    
    </div>
    <div class="flip-card-back">
 
      <h5> bawder</h5>
       <h5>datails</h5>
        <input type="number" v-model.number="all.bawder">
      <button @click="add('bawder')">Basket</button>
      <button>Add to fav</button>
         
    </div>
  </div>
</div> 
  </div>

  <div class="column">
    
       <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">

    </div>
    <div class="flip-card-back">
     <h5> fawndation</h5>
       <h5>price: 4$</h5>
        <input type="number" v-model.number="all.fawndation">
      <button @click="add('fawndation')">Basket</button>
      <button>Add to fav</button>
    </div>
  </div>
</div> 

  </div>

    <div class="column">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    
    </div>
    <div class="flip-card-back">
    <h5> konselar</h5>
       <h5>datails</h5>
        <input type="number" v-model.number="all.konselar">
      <button @click="add('konselar')">Basket</button>
      <button>Add to fav</button>
    </div>
  </div>
</div>
  </div>

</div>



</div>
</template>

<script>


export default {

  name: 'app',
  data () {

    
    return {

     all:{
fawndation: 0,
bawder: 0,
konselar: 0

     },

      cart:{
fawndation: 0,
bawder: 0,
konselar: 0

     },
     
     
     
    }
  },

methods:{

add:function(type){
this.cart[type] += this.all[type]
}


}}

</script>


<style  scoped>
  
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 150%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
.column {
  float: left;
  width: 33.33%;
padding-right: 10px;
padding-left: 20px;
margin-bottom: 100px;
margin-top: 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



</style>