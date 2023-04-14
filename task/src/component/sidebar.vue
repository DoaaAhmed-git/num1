<template>
 <div id="app">



<a class="menu-toggle rounded"  @click="show"  style="color: pink;" ><i class="fas fa-bars">BASKET</i></a>
        <nav id="sidebar-wrapper"  v-if="appear">
            <ul class="sidebar-nav">
               
                <div class="row"> 
<ul class="ull">
  <li class="lii">KONSELAR</li>
<li class="lii">Price: 500$</li>
<li class="lii">Qyt: 40</li>
</ul>
                </div>
               

                <div class="row"> 
<ul class="ull">
  <li class="lii">LIPGLOSE</li>
<li class="lii">Price: 500$</li>
<li class="lii">Qyt: 40</li>
</ul>
                </div>

                <div class="row"> 
<ul class="ull">
  <li class="lii">LINER</li>
<li class="lii">Price: 500$</li>
<li class="lii">Qyt: 40</li>
</ul>
                </div>

                <div class="row"> 
<ul class="ull">
  <li class="lii">MASKARA</li>
<li class="lii">Price: 500$</li>
<li class="lii">Qyt: 40</li>
</ul>
                </div>

                <div class="row"> 
<ul class="ull">
  <li class="lii">LIPSHINE</li>
<li class="lii">Price: 500$</li>
<li class="lii">Qyt</li>
</ul>
                </div>

            
            </ul>
        </nav>

 <!-- ======= Header/Navbar ======= -->
  <nav  class="nav2">
    <div class="row">
    
      <a style="color: pink;">PINK SHOPE</a>

      <div >
        <ul class="navbar-nav">

          <li class="nav-item">
            EYE
            </li>
          <li class="nav-item">
           FACE
          </li>

          <li class="nav-item">
            LIPS
          </li>

        
          <li class="nav-item">
            
          </li>
        </ul>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->


<!--<div id="tools">
<ul>
  <li v-for="tool in tools" @click="tool.show = !tool.show">
    <h1>{{tool.name}}</h1>
    <h1 v-show="tool.show">{{tool.use}}</h1>
  </li>
</ul>
</div>
-->

</div>
</template>

<script>


export default {

  name: 'app',
  data() {
     return{
appear: false,

  tools:[
{name:'fawndation' , use:'face'  , show:false},
{name:'bawder' , use:'face' , show:false},
{name:'liner' , use:'eye' , show:false},
{name:'maskara' , use:'eye' , show:false}
], 
  }
},

methods:{

	show:function(){
this.appear = !this.appear
	}
}
}
  

</script>

<style  scoped>

a{

  margin: 0 10px;
  text-align: center;
}

.row{
padding: 14px 0;
margin-bottom: 0;
}

.ull{

  list-style: none;
text-align: right;
padding-right: 40px;
margin: 10px;
}


.lii{

display: inline-block;
margin: 0  10px;
margin-right: 50px;

}

.navbar-nav{
list-style: none;
text-align: center;
margin: 0;

}

.nav-item{
display: inline-block;
margin: 0 10px;
margin-right: 50px;
color: pink;


}

.nav-item:hover{
text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
}

.nav2{
background: #444;
padding: 14px 0;
margin-bottom: 0;

}


 #sidebar-wrapper {
  padding-top: 10px;
  position: fixed;
  z-index: 2;
  right: 0;
  width: 500px;
  height: 100%;
  transition: all 0.8s ease 8s;
  transform: translateX(10px);
  background: pink;
  border-left: 1px solid rgba(255, 255, 255, 0.1);
  text-align: center;
  border-radius: 20px;
}

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
  margin-top: 80px;
}

.sidebar-nav li.sidebar-nav-item a {
  display: block;
  text-decoration: none;
  color: black;
  padding: 15px;
  margin-top: 30px;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);

}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {

  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  font-size: 1.2rem;
  background: rgba(52, 58, 64, 0.1);
  height: 80px;
  line-height: 50px;
  padding-top: 15px;
  padding-bottom: 15px;
  padding-left: 15px;
}

.sidebar-nav > .sidebar-brand a {
  color: #fff;
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}

#sidebar-wrapper.active {
  right: 250px;
  width: 250px;
  transition: all 0.4s ease 0s;
  padding-top: 10px;
}

.menu-toggle {
  position: fixed;
  right: 15px;
  top: 30px;
  width: 70px;
  height: 50px;
  text-align: center;
  color: #fff;
  background: rgba(52, 58, 64, 0.5);
  line-height: 50px;
  z-index: 999;
  border-radius: 10px;
  text-decoration: none;
}
.menu-toggle:focus, .menu-toggle:hover {
  color: #fff;
}
.menu-toggle:hover {
  background: #343a40;
}




</style>