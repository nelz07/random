<template>
	<div class="grid-container">
	    <div class="grid-x">
	      <div class="cell flex flex-column">
	        <h1 class="h1 text-white text-center">{{ title }}</h1>
	        <div id="timer"><span id="minutes">{{ minutes }}</span><span id="middle">:</span><span id="seconds">{{ seconds }}</span></div>
	        <div class="flex flex-justify-center" id="buttons"> 
	          <button class="button" id="start" @click="startTimer"><i class="far fa-3x fa-play-circle"></i></button>
	          <button class="button" id="stop" v-if="timer" @click="stopTimer"><i class="far fa-3x fa-pause-circle"></i></button>
	          <button class="button" id="reset" v-if="resetButton" @click="resetTimer"><i class="fas fa-3x fa-undo"></i></button>
	        </div>
	      </div>
	    </div>
	  </div>
</template>
<style scoped>
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700");
*, *:before, *:after {
  box-sizing: border-box;
  outline: none;
}

html {
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 16px;
  font-smooth: auto;
  font-weight: 300;
  line-height: 1.5;
  color: #444;
}

body {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100vh;
  background: linear-gradient(45deg, #c0392b 0%, #e74c3c 100%);
}

#message {
  margin-bottom: 1.25rem;
  color: #ddd;
  font-size: 3.125rem;
}

#timer {
  color: whitesmoke;
  font-size: 9.375rem;
}
.text-white{
	color:#fff;
}
.timer-title {
  margin: 0;
  padding: 0;
  color: rgba(245, 245, 245, 0.5);
  font-size: 2rem;
  font-weight: 700;
  text-transform: uppercase;
}

.button {
  position: relative;
  margin: 0 0.5rem;
  padding: 1rem 2rem;
  background-color: whitesmoke;
  border: 0;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  color: #e74c3c;
  font-size: 1.5rem;
  overflow: hidden;
  cursor: pointer;
}
.button:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 0;
  background-color: #e74c3c;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  z-index: 0;
}
.button:hover {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  color: whitesmoke;
}
.button:hover:before {
  height: 100%;
  background-color: #e74c3c;
}
.button i {
  position: relative;
  z-index: 1;
}

.text-center {
  text-align: center;
}

.grid-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 10px;
}
@media (min-width: 48rem) {
  .grid-container {
    padding: 0 20px;
  }
}
.grid-container.full {
  max-width: 100%;
  padding: 0 10px;
}
@media (min-width: 48rem) {
  .grid-container.full {
    padding: 0 20px;
  }
}
.grid-container .grid-x {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
}
@media (min-width: 48rem) {
  .grid-container .grid-x {
    flex-direction: row;
    flex-wrap: wrap;
  }
}
.grid-container .grid-x.align-left {
  justify-content: flex-start;
}
.grid-container .grid-x.align-right {
  justify-content: flex-end;
}
.grid-container .grid-x.align-justify {
  justify-content: space-between;
}
.grid-container .grid-x.align-top {
  align-items: flex-start;
}
.grid-container .grid-x.align-bottom {
  align-items: flex-end;
}
.grid-container .grid-x.align-middle {
  align-items: center;
}
.grid-container .grid-x.align-center {
  align-items: center;
  justify-content: center;
}
.grid-container .grid-x.grid-margin-x .cell {
  margin-left: 10px;
  margin-right: 10px;
}
.grid-container .grid-x.grid-padding-x .cell {
  padding-left: 10px;
  padding-right: 10px;
}
.grid-container .grid-x.grid-margin-y .cell {
  margin-top: 10px;
  margin-bottom: 10px;
}
.grid-container .grid-x.grid-padding-y .cell {
  padding-top: 10px;
  padding-bottom: 10px;
}

.cell {
  display: block;
  width: 100%;
}
@media (min-width: 20rem) {
  .cell.small-1 {
    width: 8.3333%;
  }
}
@media (min-width: 20rem) {
  .cell.small-2 {
    width: 16.6666%;
  }
}
@media (min-width: 20rem) {
  .cell.small-3 {
    width: 25%;
  }
}
@media (min-width: 20rem) {
  .cell.small-4 {
    width: 33.3333%;
  }
}
@media (min-width: 20rem) {
  .cell.small-5 {
    width: 41.6666%;
  }
}
@media (min-width: 20rem) {
  .cell.small-6 {
    width: 50%;
  }
}
@media (min-width: 20rem) {
  .cell.small-7 {
    width: 58.3333%;
  }
}
@media (min-width: 20rem) {
  .cell.small-8 {
    width: 66.6666%;
  }
}
@media (min-width: 20rem) {
  .cell.small-9 {
    width: 75%;
  }
}
@media (min-width: 20rem) {
  .cell.small-10 {
    width: 83.3333%;
  }
}
@media (min-width: 20rem) {
  .cell.small-11 {
    width: 91.666612%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-1 {
    width: 8.3333%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-2 {
    width: 16.6666%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-3 {
    width: 25%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-4 {
    width: 33.3333%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-5 {
    width: 41.6666%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-6 {
    width: 50%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-7 {
    width: 58.3333%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-8 {
    width: 66.6666%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-9 {
    width: 75%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-10 {
    width: 83.3333%;
  }
}
@media (min-width: 48rem) {
  .cell.medium-11 {
    width: 91.666612%;
  }
}
@media (min-width: 64rem) {
  .cell.large-1 {
    width: 8.3333%;
  }
}
@media (min-width: 64rem) {
  .cell.large-2 {
    width: 16.6666%;
  }
}
@media (min-width: 64rem) {
  .cell.large-3 {
    width: 25%;
  }
}
@media (min-width: 64rem) {
  .cell.large-4 {
    width: 33.3333%;
  }
}
@media (min-width: 64rem) {
  .cell.large-5 {
    width: 41.6666%;
  }
}
@media (min-width: 64rem) {
  .cell.large-6 {
    width: 50%;
  }
}
@media (min-width: 64rem) {
  .cell.large-7 {
    width: 58.3333%;
  }
}
@media (min-width: 64rem) {
  .cell.large-8 {
    width: 66.6666%;
  }
}
@media (min-width: 64rem) {
  .cell.large-9 {
    width: 75%;
  }
}
@media (min-width: 64rem) {
  .cell.large-10 {
    width: 83.3333%;
  }
}
@media (min-width: 64rem) {
  .cell.large-11 {
    width: 91.666612%;
  }
}
.cell.align-self-right {
  display: flex;
  justify-content: flex-end;
}
.cell.align-self-left {
  display: flex;
  justify-content: flex-start;
}

.flex {
  display: flex;
}
.flex-column {
  flex-direction: column;
}
.flex-row {
  flex-direction: row;
}
.flex-align-center {
  align-items: center;
}
.flex-justify-center {
  justify-content: center;
}
</style>
<script>
	export default{
		data() {
			return {
			    title: 'TIMER',
			    timer: null,
			    totalTime: (0.16666666666666666 * 60),
			    resetButton: false,
		    }
		  },
		  // =======================
		  methods: {
		    startTimer: function() {
		      this.timer = setInterval(() => this.countdown(), 1000);
		      this.resetButton = true;
		    },
		    stopTimer: function() {
		      clearInterval(this.timer);
		      this.timer = nullthis.resetButton = true;
		    },
		    resetTimer: function() {
		      this.totalTime = (0.16666666666666666 * 60);
		      clearInterval(this.timer);
		      this.timer = null;
		      this.resetButton = false;
		    },
		    padTime: function(time) {
		      return (time < 10 ? '0' : '') + time;
		    },
		    countdown: function() {
		      if(this.totalTime >= 1) {
		        this.totalTime--;
		      } else {
		        this.totalTime = 0;
		        this.resetTimer;
		      }
		    }
		  },
		  // =======================
		  computed: {
		    minutes: function() {
		      const minutes = Math.floor(this.totalTime / 60);
		      return this.padTime(minutes);
		    },
		    seconds: function() {
		      const seconds = this.totalTime - (this.minutes * 60);
		      return this.padTime(seconds);
		    }
		  }
	}
</script>