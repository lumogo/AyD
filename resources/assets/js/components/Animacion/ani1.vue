<template> 
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="false"
	  :no-touch="true" 
	  background="#ababab"
      img-width="1024"
      img-height="480"
      
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
     
      <b-carousel-slide
        caption="First slide"
        text="Nulla vitae elit libero, a pharetra augue mollis interdum."
        img-src="https://picsum.photos/1024/480/?image=52"
      ></b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54"  img-alt="Blank image">
           <p>
         ewrkrjhk
        </p>
      </b-carousel-slide>

      <!-- Slides with image only -->
      <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58"></b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <b-carousel-slide>
        <template v-slot:img>
          <img
            class="d-block img-fluid w-100"
            width="1024"
            height="480"
            src="https://picsum.photos/1024/480/?image=55"
            alt="image slot"
          >
        </template>
      </b-carousel-slide>

      <!-- Slide with blank fluid image to maintain slide aspect ratio -->
      <b-carousel-slide caption="Blank Image" img-blank img-alt="Blank image">
        <p>
         
        </p>
      </b-carousel-slide>
    </b-carousel>

    <p class="mt-4">
      Slide #: {{ slide }}<br>
      Sliding: {{ sliding }}
    </p>
  </div>
</template>

<script>

  export default {
  	data() {   
      return {
    	  slide: 0,
          sliding: null	,
       
      }
    } ,

    computed: {

    },
    mounted() {

    },
    methods: { 
    	onSlideStart(slide) {
        	this.sliding = true
        },
        onSlideEnd(slide) {
            this.sliding = false
        }
    }
  }
  
</script>