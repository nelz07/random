<template>
<div class="site-wrapper video-background">
    <div class="lds-hourglass" :hidden="hidden"></div>
    <div class="site-wrapper-inner" :class="{picked:hidden}">

            <div class="cover-container" style="margin-top:450px">
            <div class="inner cover">
                  <div class="logo-container">
                    <img src="/img/LIGHT-logo.png" alt="">
                  </div>
                <h1 class="cover-heading">Random Picker</h1>
                <p class="lead">For LIGHT Employees Raffle</p>
                <p class="lead"><a @click="pick" :disabled = "disable" class="btn btn-lg btn-default">Go</a></p>
            </div>
            <!-- <timer></timer> -->
            <div class="mastfoot">
                <div class="inner">
                    <p>Copyright &copy; <a href="/">primoashbee</a></p>
                </div>
            </div>

        </div>

    </div>
</div>
</template>

<style >
@import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
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
}
.btn-default[disabled]{
  background-color: transparent;
}
/*.logo-container{
    position: absolute;
    top: 0;
    width: 250px;
    right: 0;
    left: 0;
    margin: 0 auto;
}*/
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
  animation: lds-hourglass 1.2s infinite;
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
</style>
<script>
export default {
    mounted(){
        
    },
    data(){
        return {
            hidden: true,
            winner: null,
            disable:false
        }
    },
    methods:{
        pick(){
            this.disable = true
            this.hidden = false
            axios.get('/get/branch')
            .then(res=>{

                this.winner = res.data.winner

                this.htmlContent = 
                                  '<video playsinline autoplay loop id="bgvid"><source src="/img/video.mp4" type=video/mp4></video><div class="viewport-header"><h2 class="white">'
                                  +  this.winner.name + ' Branch<br></h2></div>'
                setTimeout(()=>{
                this.hidden = true    
                    Swal.fire(
                        this.htmlContent
                    )
                this.disable = false    
                },3000)

            })
        }
    }
}
</script>