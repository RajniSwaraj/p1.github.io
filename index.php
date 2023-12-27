<?php session_start();?>
<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en"> 

<head>
  <style>
body{
    overflow-x:hidden;
}

.resume{
    background: #EBE6FD;

}
hr{
  border-bottom: 1px solid white;
  width: 1180px;
}
.card{
    width: 499px;
height: 291px;
left: 160px;
border: 1px solid;
background:#7757F4;

}
.card button{
    border-radius: 8px
border: 1px
}
.try{
border-radius: 8px;
border: 1px;

}
.box1 {
  position: relative;
  z-index: 1;
}
.our-image{
    position: absolute;
  z-index: 2; 
  top:270px; 
}

.our-success {
  position: absolute;
  z-index: 2; /* gray box will be above both green and black box */
  top: 600px;
  margin-left:192px;
  margin-right:192px;
}

.container-fluid{
    position: relative;
  text-align: center;
  color: white;
  height:600px;
  background:url("image/img1.png");
}

.button0 {
    position: absolute;
    top:80px;
  left: 450px;
  right:450px;

}

.button1 {
  position: absolute;
  top:170px;
  left: 250px;
  border: 2px solid white;
  padding: 2px;
  border-radius: 12px;
  background:white;
}

.button2 {
  position: absolute;
  top:170px;
  right: 200px;
  border: 2px solid white;
  padding: 2px;
  border-radius: 12px;
  background:white;
  
}

.button3 {
  position: absolute;
  top:60px;
  right: 350px;
  border: 2px solid white;
  padding: 2px;
  border-radius: 12px;
  background:white;
}
.button4 {
  position: absolute;
  top:60px;
  left: 350px;
  border: 2px solid white;
  padding: 2px;
  border-radius: 12px;
  background:white;
}



</style>

  

</head>
<body>

        

    <div class="container-fluid"">
      <img src="image/Rectangle 1.png" >
        <div class="carousel-caption text-dark button0">
           <p><h2 >Welcome to <span style="color: #7757F4;">AI Resume<br>Maker!</span> your path to <br>Proffessional Success!<br></h2></p>
           <a href="#" class="instagram"><button style="background: #7757F4;" class="btn border border-1 text-center mt-4 text-white">Start Building</button></a>
        </div>
        <div class="button1">
            <a href="" style="text-decoration:none; color:black;"><span><img class="me-2" src="image/icon1.png" height=30px; width=30px;</span>Keyword Optimization</a>
        </div>
        <div class="button2">
        <a href="" style="text-decoration:none; color:black;"><span><img class="me-2" src="image/icon1.png" height=30px; width=30px;</span>Dyanamic Content Generation</a>
        </div>
        <div class="button3">
        <a href="" style="text-decoration:none; color:black;"><span><img class="me-2 " src="image/icon1.png" height=30px; width=30px;</span>Real-time preview</a>
        </div>
        <div class="button4">
        <a href="" style="text-decoration:none; color:black;"><span><img class="me-2" src="image/icon1.png" height=30px; width=30px;</span>Templates library</a>
        </div>

    </div>

    <div class="our-image">
            <div class="container">
                <div class="success-wrap">
                    <div class="row">
                        <div class=" text-center" style="margin-top:-200px;">
                            <img src="image/img1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="our-success">
            <div class="container">
                <div class="success-wrap">
                    <div class="row">
                        <div class=" text-center" style="margin-top:-200px;">
                            <img src="image/Frame 1000002570.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==================================================================== 
          
        =====================================================================-->

  <main id="main">

  <!--==================================================================== 
    
        =====================================================================-->



        <section style="margin-top:300px;">
            <div class="container ">
                <div class="row p-5">
                    <div class="col-7 p-4">
                       <h2 class=" text-dark"> Why choose AI resume Maker ?</h2>
                       <img src="image/img3.png" alt="">
                    </div>
                    <div class="col-5 p-5 border border-1 ">
                      
                                <h5><span><img class="border border-rounded p-1 rounded-circle" src="image/icon3.png" height=30px; width=30px;</span>Real time preview</h5>
                                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prewiew the resume real time while <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adding the details</p>
                                <h5><span><img class="border rounded-circle p-1" src="image/icon4.png" height=30px; width=30px;</span>Real time preview</h5>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select from a wide range of templates<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; that suits your proffessional needs.</p>
                                <h5><span><img class="border rounded-circle p-1" src="image/icon2.png" height=30px; width=30px;</span>Real time preview</h5>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automatically Creates content based on <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your inputs.</p>
                                <h5><span><img class="border border-1 rounded-circle p-1" src="image/icon5.png" height=30px; width=30px;</span>Real time preview</h5>

                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strategically select and incorporate <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;relevant keywords with in the content of<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your resume or CV.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!--==================================================================== 
        =====================================================================-->
      <section>
        <div class="row">
            <div class="col-6 ">
            <div class="card p-5" style="background: #7757F4;">
       <h3 class="card-title mt-2 text-white">Intelligence Guidence</h3>
    <p class="card-text mt-2 text-white">Our AI-powered platform provides step-by-step guidence as you build your resume.From selecting the right template to tailoring content , our AI ensures Your resume reflects your unique strengths.</p>
    <a href=""><button class="text-center try mt-2">Try now</button></a>
      </div>

            </div>
            <div class="col-6">
            <img src="image/Rectangle 155.png" alt="" width= 499px; height= 291px;>
            </div>

        </div>
        <div class="row p-5">
            <div class="col-4 mx-5">
            
            <p class="text-center"><span><img class="border border-1 p-1 m-1" src="image/task-square.png" height=40px; width=40px;</span>Step by step guidence</p> 
            </div>
            <div class="col-3">
            <p class="text-center"><span><img class="border border-1 p-1 m-1" src="image/note-2.png" height=40px; width=40px;</span>Step by step guidence</p> 
            </div>
            <div class="col-3 ms-5">
            <p class="text-center"><span><img class="border border-1 p-1 m-1" src="image/eye.png" height=40px; width=40px;</span>Step by step guidence</p>  
            </div>
            
        </div>
      </section>


    

        <!--==================================================================== 
            
        =====================================================================-->
         <section>
                <div class="row p-5">
                    <div class="col-md-6 ms-5" >
                      <img src="image/img2 (2).png" height=300px; width=450px;   style="margin-left:50px;" >
                    </div>
                    <div class="col-md-5 ">
                    <h3 class="mt-2 mb-4 ">User-Friendly Interface</h3>
                    <p class="mt-2">No more struggling with complex formattting complex tools. our<br> initutive interface 
                    makes it easy to enter your information,<br> choose from a variety of template, and customise your<br> resume effortlessly. </p>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
    
        =====================================================================-->
        
    <section class="resume">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-8 mt-3">
                <div class=" text-center ">
                    <h3 class="mb-4">Join the AI powered Revolution<br>In Resume Building</h3>
                </div>
                <div class="text-center">
                    <p>Creating an Outstanding has never beeen this effortless .With AI resume maker yor ann't just a crafting a <br> document- you are shapping a proffessional future.</p>
                </div>
                <div class=" text-center mt-5 mb-5">
                    <button class="border border-primary p-2" >Get Started Today</button>
                </div>
            </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
</body>

  </html>


	<!-- Start Contact Area -->
   <?php include 'footer.php'; ?>