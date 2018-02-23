<html>
    <head>
        
 <link href="style.css" rel="stylesheet">

    </head>
    <body>
        <div id="el">
            <slider></slider>
    </div>

<!--    <template id='slider'>
<div>
  <p>
      <a @click="prev">Previous</a> || <a @click="next">Next</a>
    </p>
    <div
         v-for="number in [currentNumber]"
         transition="fade"
    >
      <img
          :src="images[Math.abs(currentNumber) % images.length]"
          v-on:mouseover="stopRotation"
          v-on:mouseout="startRotation"
      />
</div>
</template>-->
        
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
<script src="/js/app.js"></script>
</body>
</html>