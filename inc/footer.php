<footer>
        <div class="container">
          <div class="footer-info">
            <h3>About Us</h3>
            <p>We are Royal Villas, a company that offers luxury villas for rent.</p>
          </div>
          <div class="footer-contact">
            <h3>Contact Us</h3>
            <p>Phone: +383 (49) 246-606<br>Email: info@royalvillas.com</p>
          </div>
          <div class="footer-social">
            <h3>Follow Us</h3>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="footer-legal">
            <p>&copy; 2023 All Rights Reserved. <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
          </div>
        </div>
      </footer>
      
    <!-- FOOTER PART END   -->
    
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="jquery-3.6.0.js"></script>
    <script src="jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <script>
      
        $("#login").submit(function (event) {
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var repassword = $("#repassword").val();

            if (!username || !email || !password || ! repassword) {
                event.preventDefault();
                if (!username) {
                    $("#username-error").text("Please enter your username");
                }
                if (!email) {
                    $("#email-error").text("Please enter your email");
                }
                if (!password) {
                    $("#password-error").text("Please enter your password");
                }
                if (!repassword) {
                    $("#repassword-error").text("Please re-enter your password");
                }
            }
        });

        $("#villa").submit(function (event) {
            var emri = $("#emri").val();
            var adresa = $("#adresa").val();
            var kategoriaid = $("#kategoriaid").val();
            var pershkrimi = $("#pershkrimi").val();
            var cmimi = $("#cmimi").val();

            if (!emri || !adresa || !$kategoriaid || !$pershkrimi || $cmimi) {
                event.preventDefault();
                if (!emri) {
                    $("#emri-error").text("Please enter villa's name");
                }
                if (!adresa) {
                    $("#adresa-error").text("Please enter villa's address");
                }
                if (!kategoriaid) {
                    $("#kategoriaid-error").text("Please select villa's category");
                }
                if (!pershkrimi) {
                    $("#pershkrimi-error").text("Please write a description...");
                }
                if (!cmimi) {
                    $("#cmimi-error").text("Please enter a price");
                }
            }
        });

        $("#userF").submit(function (event) {
            var emri = $("#emri").val();
            var mbiemri = $("#mbiemri").val();
            var nrtelefonit = $("#nrtelefonit").val();
            var email = $("#email").val();
            var fjalekalimi = $("#fjalekalimi").val();

            if (!emri || !mbiemri || !$nrtelefonit || !$email || $fjalekalimi) {
                event.preventDefault();
                if (!emri) {
                    $("#emri-error").text("Please enter your fullname");
                }
                if (!mbiemri) {
                    $("#mbiemri-error").text("Please enter your email");
                }
                if (!nrtelefonit) {
                    $("#nrtelefonit-error").text("Please enter your password");
                }
                if (!email) {
                    $("#email-error").text("Please re-enter your password");
                }
                if (!fjalekalimi) {
                    $("#fjalekalimi-error").text("Please re-enter your password");
                }
            }
        });

        // $("#reservation").submit(function (event) {
        //     var villaid = $("#villaid").val();
        //     var klientiid = $("#klientiid").val();
        //     var data_fillimit = $("#data_fillimit").val();
        //     var data_mbarimit = $("#data_mbarimit").val();

        //     if (!villaid || !klientiid || !$data_fillimit || !$data_mbarimit) {
        //         event.preventDefault();
        //         if (!villaid) {
        //             $("#villaid-error").text("Please select your vila");
        //         }
        //         if (!klientiid) {
        //             $("#klientiid-error").text("Please select your client");
        //         }
        //         if (!data_fillimit) {
        //             $("#data_fillimit-error").text("Please enter your date");
        //         }
        //         if (!data_mbarimit) {
        //             $("#data_mbarimit-error").text("Please enter your date");
        //         }
        //     }
        // });

        $("#client").submit(function (event) {
            var emri = $("#emri").val();
            var mbiemri = $("#mbiemri").val();
            var email = $("#email").val();
            var numri_tel = $("#numri_tel").val();
            var numripersonal = $("#numripersonal").val();

            if (!emri || !mbiemri || !$email || !$numri_tel || $numripersonal) {
                event.preventDefault();
                if (!emri) {
                    $("#emri-error").text("Please enter your fullname");
                }
                if (!mbiemri) {
                    $("#mbiemri-error").text("Please enter your email");
                }
                if (!email) {
                    $("#email-error").text("Please re-enter your password");
                }
                if (!numri_tel) {
                    $("#numri_tel-error").text("Please enter your phone number");
                }
                if (!numripersonal) {
                    $("#numripersonal-error").text("Please re-enter your persoanl number");
                }
            }
        });

        $("#category").submit(function (event) {
            var emri = $("#emri").val();
            var pershkrimi = $("#pershkrimi").val();
            var cmimi = $("#cmimi").val();

            if (!emri || !pershkrimi || !$cmimi ) {
                event.preventDefault();
                if (!emri) {
                    $("#emri-error").text("Please enter category name");
                }
                if (!pershkrimi) {
                    $("#pershkrimi-error").text("Please write a description...");
                }
                if (!cmimi) {
                    $("#cmimi-error").text("Please enter a price");
                }
            }
        });

        

      </script>
</body>
</html>
    