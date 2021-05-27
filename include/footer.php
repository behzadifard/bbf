  <footer>
    <span id="contact"></span>
    <div class="div-1">
      <img class="footer-image" src="images/me/me8.jpg" alt="footer-image">
      

      <div>
        <h2>Bahram Behzadi-Fard</h2>
        <p><b>Frontend Developer</b></p>
        <p><small><a href="https://www.linkedin.com/in/bahram-behzadi-fard-3a75631b4/" target="_blank">LinkedIn</a></small></p>
        <p><small><a href="https://www.facebook.com/bahrambehzadii" target="_blank">Facebook</a></small></p>
        <p>Email:</p>
        <p>info@bahrambehzadi.com</p>
        <p>behzadi-fard@gmx.de</p>
        
      </div>
    </div>
    <div class="div-2">
      <img class="footer-image2" src="images/background/glob.png" alt="footer-image2">
    </div>
  </footer>
  
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
  
    <script src="../js/bootstrap.js"></script>
    <script src="../js/main.js"></script>
  
    <!--Typed.js-->
    <script src="../js/typed.js"></script>
    
  
    <!--particles.js-->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
      particlesJS.load('particles-js','particles.json', function(){
        console.log('particles.json loaded...');
      });
    </script>
    <!--end particles.js-->

    <!--Transition on Scroll-->
    <script type="text/javascript">
      ScrollOut({
        targets: 'h2,h3,p,img'
      })
    </script>
    <!--end Transition on Scroll-->

    <!--accordion-->
    <script>
        const accordion = document.getElementsByClassName('contentBx');
        for (i=0; i < accordion.length; i++){
          accordion[i].addEventListener('click',function(){
            this.classList.toggle('active')
          })
  
        }
      </script>
      <!--end accordion-->