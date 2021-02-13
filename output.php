<!DOCTYPE HTML>  
<html>
<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
        integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 <style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html {
  height: 100%;  
}

body {
  min-height: 100%;  
  background: #eee;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  color: #222;
  font-size: 14px;
  line-height: 26px;
  padding-bottom: 50px;
}

.container {
  max-width: 700px;   
  background: #fff;
  margin: 0px auto 0px; 
  box-shadow: 1px 1px 2px #DAD7D7;
  border-radius: 3px;  
  padding: 40px;
  margin-top: 50px;
}

.header {
  margin-bottom: 30px;
}
  .full-name {
    font-size: 40px;
    text-transform: uppercase;
    margin-bottom: 5px;
  }
  
  .first-name {
    font-weight: 700;
  }
  
  .last-name {
    font-weight: 300;
  }
  
  .contact-info {
    margin-bottom: 20px;
  }
  
  .email ,
  .phone {
    color: #999;
    font-weight: 300;
  } 
  
  .separator {
    height: 10px;
    display: inline-block;
    border-left: 2px solid #999;
    margin: 0px 10px;
  }
  
  .position {
    font-weight: bold;
    display: inline-block;
    margin-right: 10px;
    text-decoration: underline;
  }



.details {
  line-height: 20px;
}
  .section {
    margin-bottom: 40px;  
  }
  
  .section:last-of-type {
    margin-bottom: 0px;  
  }
  
  .section__title {
    letter-spacing: 2px;
    color: #54AFE4;
    font-weight: bold;
    margin-bottom: 10px;
    text-transform: uppercase;
  }
  
  .section__list-item {
    margin-bottom: 40px;
  }
  
  .section__list-item:last-of-type {
    margin-bottom: 0;
  }
  
  .left ,
  .right {
    vertical-align: top;
    display: inline-block;
  }
  
  .left {
    width: 60%;    
  }
  
  .right {
    text-align: right;
    width: 39%;    
  }
  
  .name {
    font-weight: bold;
  }
  
  a {
    text-decoration: none;
    color: #000;
    font-style: italic;
  }
  
  a:hover {
    text-decoration: underline;
    color: #000;
  }
  

    
  .skills__item {
    margin-bottom: 10px;  
  }
  
  .skills__item .right {
   display: none;
    }
    
    label {
      display: inline-block;  
      width: 20px;
      height: 20px;
      background: #C3DEF3;
      border-radius: 20px;
      margin-right: 3px;
    }
    
    input:checked + label {
      background: #79A9CE;
    }
  


 </style> 
</head>
<body> 
    
    <div id="content2">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

        <div class="container">
          <div class="header">
            <div class="full-name">
              <span class="first-name"><?php echo $_POST["name"]; ?></span> 
              <span class="last-name"><?php echo $_POST["lastname"]; ?></span>
            </div>
            <div class="contact-info">
              <span class="email">Email: </span>
              <span class="email-val"><?php echo $_POST["email"]; ?></span>
              <span class="separator"></span>
              <span class="phone">Phone: </span>
              <span class="phone-val"><?php echo $_POST["phone"]; ?></span>
            </div>
            
            <div class="about">
              <span class="position"><?php echo $_POST["ptitle"]; ?> </span>
              <span class="desc">
              <?php echo $_POST["comment"]; ?>
              </span>
            </div>
          </div>
           <div class="details">
            <div class="section">
              <div class="section__title">Experience</div>
              <div class="section__list">
                <div class="section__list-item">
                  <div class="left">
                    <div class="name"><?php echo $_POST["experince"]; ?></div>
                    <div class="addr"><?php echo $_POST["jlocation"]; ?></div>
                    <div class="duration"><?php echo $_POST["sdate"]; ?> --<?php echo $_POST["edate"]; ?></div>
                  </div>
                  <div class="right">
                    <div class="name"><?php echo $_POST["jtitle"]; ?></div>
                    <div class="desc"><?php echo $_POST["jcomment"]; ?></div>
                  </div>
                </div>
        
              </div>
            </div>
            <div class="section">
              <div class="section__title">Education</div>
              <div class="section__list">
                <div class="section__list-item">
                  <div class="left">
                    <div class="name"><?php echo $_POST["ename"]; ?></div>
                    <div class="addr"><?php echo $_POST["elocation"]; ?></div>
                    <div class="duration"><?php echo $_POST["gdate"]; ?></div>
                  </div>
                  <div class="right">
                    <div class="name"><?php echo $_POST["study"]; ?></div>
                    <div class="desc">did This and that</div>
                  </div>
                </div>
              
        
              </div>
              
          </div>
             <div class="section">
              <div class="section__title">Projects</div> 
               <div class="section__list">
                 <div class="section__list-item">
                   <div class="name"><?php echo $_POST["pname"]; ?></div>
                   <div class="text"><?php echo $_POST["pcomment"]; ?></div>
                 </div>
                 
                
               </div>
            </div>
             <div class="section">
               <div class="section__title">Skills</div>
               <div class="skills">
                 <div class="skills__item">
                   <div class="left"><div class="name">
                   <?php echo $_POST["skill"]; ?>
                     </div></div>
                   <div class="right">
                                  <input  id="ck1" type="checkbox" checked/>
        
                     <label for="ck1"></label>
                                  <input id="ck2" type="checkbox" checked/>
        
                      <label for="ck2"></label>
                                 <input id="ck3" type="checkbox" />
        
                      <label for="ck3"></label>
                                   <input id="ck4" type="checkbox" />
                    <label for="ck4"></label>
                                  <input id="ck5" type="checkbox" />
                      <label for="ck5"></label>
        
                   </div>
                </div>
               </div>
             
             <div class="section">
             <div class="section__title">
               Interests
               </div>
               <div class="section__list">
                 <div class="section__list-item">
                         <p><?php echo $_POST["interest"]; ?></p>

                         <br>
                  </div>
                  <br>
               </div>
             </div>
             </div>
          </div>
          <br>
        </div>
        
</div>
<button class="btn btn-info" id="downloadPDF">Download PDF</button>

     <script>
      $('#downloadPDF').click(function () {
    domtoimage.toPng(document.getElementById('content2'))
        .then(function (blob) {
            var pdf = new jsPDF('l', 'pt', [$('#content2').width(), $('#content2').height()]);

            pdf.addImage(blob, 'PNG', 0, 0, $('#content2').width(), $('#content2').height());
            pdf.save("test.pdf");

            that.options.api.optionsChanged();
        });
});
      </script> 
    </body>
    </html>
