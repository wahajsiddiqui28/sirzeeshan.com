
<!-- Footer Section  -->
<footer class="_footer_footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="_footer_in">
                    <img src="assets/images/s-logo.png.webp" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="_footer_in">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a href="mission-vision-core-values.php">Our Mission, Vision & Core Values</a></li>
                        <li><a href="who-is-arslan-larik.php">Who is Arsalan Larik?</a></li>
                        <li><a href="why-train-with-alco.php">Why Train With AL&CO?</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="_footer_in">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="contact-us.php">Contact</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="_footer_in sdfsdfs">
                    <h5>Contact Details</h5>
                    <ul>
                        <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>+1(888)681-4808</a></li>
                        <li><i class="fa fa-location-arrow" aria-hidden="true"></i>D-86/1, Block-7, Gulshan-e-iqbal, Karachi Sindh, Pakistan.</li>
                        <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>connect@arslanlarik.com</a></li>
                    </ul>
                    <ul class="socailicons">
                        <li><a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
      
    </div>
    <div class="footer-last">
        <p class="text-center">© 2023 Al&CO • All rights reserved</p>
    </div>
</footer>
<!-- Footer Section End -->




<script>
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>