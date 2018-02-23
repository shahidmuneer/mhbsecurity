<template >
<div class='slider container'>
<div class='col col-lg-12'>  
<center>

    <div class="rotateInDownRight"
        v-bind:style="{'background-image':'url('+images[Math.abs(currentNumber) % images.length]+')'}"
        style="height:200px;   transition: all 1s ease; background-size:cover; background-position:bottom center;"        
v-on:mouseover="stopRotation"
        v-on:mouseout="startRotation"
        v-for="number in [currentNumber]"
         transition="fade"
    >
<div class="pull-left left-right-buttons btn"> 
<a @click="prev"><span class="ti-angle-double-left"></span></a>
</div>
<ol class="carousel-indicators">
    <li data-target="#myCarousel"  v-for="image in images" :class="(Math.abs(currentNumber) % images.length)==images.indexOf(image)?'active':''"  @click="openCurrent(images.indexOf(image))">
</li>
</ol>



















<div class="pull-right left-right-buttons btn"> 
    <a @click="next" ><span class="ti-angle-double-right"></span></a>
</div>
<div  v-html="text[Math.abs(currentNumber) % text.length]" class="roll" style="transition:1s;">
{{text[Math.abs(currentNumber) % text.length]}}
</div>



			<div class="col-xs-4">
				<div class="main-login main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</a>
						</div>
						
					</form>
				</div>
			</div>
		





    </div>
</center>
</div>
</div>

</template>

<script>
export default {
 data:function(){
         return {
        images: ['http://i.imgur.com/vYdoAKu.jpg', 'http://i.imgur.com/PUD9HQL.jpg', 'http://i.imgur.com/Lfv18Sb.jpg', 'http://i.imgur.com/tmVJtna.jpg', 'http://i.imgur.com/ZfFAkWZ.jpg'],
        text:["<p class='rollIn'>text1</p>","<h1>text2</h1>","<h1>tex3</h1>","<h2>Text36</h2>","<h2>Text35</h2>"] ,
        currentNumber: 0,
        timer: null,
    };
    },
    
    ready: function () {
        this.startRotation();
    } ,
    methods: {
        startRotation: function() {
            this.timer = setInterval(this.next, 4000);
        },
        stopRotation: function() {
            clearTimeout(this.timer);
            this.timer = null;
        },
openCurrent:function(current){
this.currentNumber=current;
},

        next: function() {

    this.currentNumber += 1
        },
        prev: function() {
            this.currentNumber -= 1
        }
    }
}
</script>
<style>
.fade-transition {
  transition: all 1s ease;
  overflow: hidden;
  visibility: visible;
  opacity: 1;
  position: absolute;
margin-left:0px;

}
.fade-enter, .fade-leave {
  opacity: 0;
  visibility: hidden;
}
.slider ol li{
cursor:pointer;
}
.left-right-buttons{
display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
 height:90%;
font-size:20px;
}

 </style>