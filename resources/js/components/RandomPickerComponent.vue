<template>
<div class="site-wrapper video-background">
    <div class="lds-hourglass" :hidden="hidden"></div>
    <div class="site-wrapper-inner" :class="{picked:hidden}">

            <div class="cover-container" style="margin-top:450px">
            <div class="inner cover">
                  <div class="logo-container">
                    <img src="/img/LIGHT-logo.png" alt="">
                    <!-- <img src="/img/LIGHT-logo.png" alt="" style="position:relative;left:-50px;width:55%!important;"> -->
                  </div>
                <h4 class="cover-heading">Wheel of Light</h4>
                <!-- <p class="lead">For LIGHT Employees</p> -->
                <!-- <p> -->
                  <a @click="pick" :disabled = "disable">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      Roll Me
                  </a>
                <!-- </p>   -->
            </div>
            <!-- <timer></timer> -->
            <div class="mastfoot">
                <div class="inner">
                    <p>Copyright &copy; <span>nat.so.handsome</span></p>
                </div>
            </div>

        </div>

    </div>
</div>
</template>

<style >
@import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
.inner p{
  font-size: 18px;
}
p span{
  color: #fff;
}

.lds-hourglass {
 position: absolute;
    width: 100%;
    height: 400px;
    /* margin: 0 auto; */
    margin: auto;
    bottom: 0;
    left: 41%;
    right: 0;
    top: 47%;
    z-index: 1000;
}
.btn-default[disabled]{
  background-color: transparent;
}
.logo-container{
    position: absolute;
    top: 0;
    width: 800px;
    right: 0;
    left: 100px;
    margin: 0 auto;
}
.logo-container img{
  width: 100%;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 8px;
  box-sizing: border-box;
  border: 160px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-hourglass 2s infinite;
}
.swal2-popup{
  font-size: 2rem!important;
  width: 45em;
}
.site-wrapper-inner.picked{
  opacity: 1;
}
.site-wrapper-inner{
  opacity: 0.2;
}
.swal2-title{
  font-weight: 200!important;
}
.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{
    width: 100%!important;
    background: transparent;
    margin: 0;
}
.swal2-confirm.swal2-styled{
  background-color: #ff8100!important;
}
video{
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
}
.swal2-actions{
  margin-top: 5rem!important;
}
h2.white{
    color: #f9f9f9;
    font-size: 10rem;
    background: rgb(232 159 67 / 70%);
    white-space: nowrap;
    font-family: 'Staatliches', cursive;
    padding: 20px;
    border-radius: 5px;
}
.viewport-header {
  position: relative;
  height: 25vh;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
.swal2-popup{
  width: 100vh!important;
  height: 100vh!important;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}

@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background:#282626!important;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
}
a{
    position: relative;
    display: inline-block;
    padding: 25px 30px;
    margin: 40px 0;
    color: #f4fb14;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing:12px;
    overflow: hidden;
    margin-right: 50px;
    cursor: pointer;
    font-size: 24px;
}
a:hover{
    background: #f4fb14;
    color: #fff;
    box-shadow: 0 0 25px #f4fb14,
                0 0 75px #f4fb14,
                0 0 150px #f4fb14,
                0 0 250px #f4fb14;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #f4fb14);
     transition: ease-in .2s;
}
/*a:nth-child(1){
    filter: hue-rotate(270deg);
}
a:nth-child(2){
    filter: hue-rotate(110deg);
}*/
a span{
    position: absolute;
    display: block;
}
a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#f4fb14);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#f4fb14);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#f4fb14);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}


a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#f4fb14);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}
</style>
<script>
export default {
  props:['level'],
    mounted(){
        
    },
    data(){
        return {
            hidden: true,
            winner: null,
            disable:false
        }
    },
    computed:{
      link(){
        return 'pick/'+this.level
      }
    },
    methods:{
        pick(){
            this.disable = true
            this.hidden = false
            axios.get(this.link)
            .then(res=>{
              this.winner = res.data.winner
              var content='<video playsinline autoplay loop id="bgvid"><source src="/img/video.mp4" type=video/mp4></video><div class="viewport-header"><br><h2 class="white">You have been chosen' 
                    +  ' <br>' + this.winner.name +
                                  '</h2></div>'
                
                
                this.htmlContent = content 
                                  
                setTimeout(()=>{
                this.hidden = true    
                    Swal.fire(
                        this.htmlContent
                    )
                this.disable = false    
                },5000)

            })
        }
    }
}
</script>