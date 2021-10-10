
<?php include "connection.php"; ?>
<?php
session_start();
if(isset($_POST['submit'])){
$to = "umairabbass786@gmail.com";
$name = $_POST['name'];
$subject = $_POST['subject'];
$from = $_POST['email'];
$txt = $_POST['message'];
$msg = "Name = $name\r\n" . "Sender = $from\r\n" . "Message = $txt\r\n";
$headers = "From: devilsadvocate070@gmail.com";

if(mail($to,$subject,$msg,$headers)){
    echo "success";
    $_SESSION['msg']="Feedback Submitted SuccessFully.";
}
else{
  $_SESSION['msg']="Error Submitting Feedback form.";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="contactus.css" type="text/css">
    <link rel="icon" href="logo/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" public/css/contactus.css">
  </head>
  <style media="screen">
  .con {
    background-image: url(" public/images/contactus/contact.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    width: 100%;
    height: 450px;
  }
  </style>
  <body class="navy-blue-skin">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="index.php">
        <img src=" public/images/logo/logo.png" width="350" height="40" alt="..." loading="lazy" class="pl-3">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto mr-5 p-2">
          <li class="nav-item pr-2">
            <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href=" aboutus.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href=" product.php"><i class="fa fa-dropbox" aria-hidden="true"></i> Products</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href=" contactus.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Contact Us</a>
          </li>
        </ul>
        <form class="form-inline">
          <input class="form-control mr-sm-2 col-6" type="search" placeholder="Search Items" aria-label="Search">
          <button class="btn btn-dark btn-outline-light btn-md my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- /Navbar -->
    <!--contact-pic-->
    <div class="con"></div>
    <!--/contact-pic-->
    <!--feedback-->
    <br><br>
    <div class="container-fluid">
      <div class="container">
      <div class="row">
    <div class="col-12">
      <div class="col-lg-6 offset-lg-3 my-3 text-center bg-dark text-white ff">FEEDBACK FORM</div>
      <div class="col-12">
          <form class="form-horizontal" action="#" method="POST">
              <div class="form-group">
                <div class="col-lg-6 offset-lg-3">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-md" name="name" id="name" placeholder="Full Name" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <div class="col-lg-6 offset-lg-3">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input type="email" class="form-control form-control-md" name="email" id="email" placeholder="Email Address" required>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6 offset-lg-3">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-globe"></i></span>
                    </div>
                      <select name="country" class="form-control form-control-md" id="country" required>
                          <option value="" disabled selected>Your Country</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bolivia">Bolivia</option>
                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Christmas Island">Christmas Island</option>
                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo">Congo</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cote D&#39;Ivoire (Ivory Coast)">Cote D&#39;Ivoire (Ivory Coast)</option>
                          <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Dominican Republic">Dominican Republic</option>
                          <option value="East Timor">East Timor</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia">French Polynesia</option>
                          <option value="French Southern Territories">French Southern Territories</option>
                          <option value="Gabon">Gabon</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Germany">Germany</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Greece">Greece</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Guam">Guam</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-Bissau">Guinea-Bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Iran">Iran</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Korea (North)">Korea (North)</option>
                          <option value="Korea (South)">Korea (South)</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Laos">Laos</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macau">Macau</option>
                          <option value="Macedonia">Macedonia</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Marshall Islands">Marshall Islands</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Micronesia">Micronesia</option>
                          <option value="Moldova">Moldova</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                          <option value="Neutral Zone">Neutral Zone</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau">Palau</option>
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea">Papua New Guinea</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Pitcairn">Pitcairn</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Reunion">Reunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russian Federation">Russian Federation</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovak Republic">Slovak Republic</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="St. Helena">St. Helena</option>
                          <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syria">Syria</option>
                          <option value="Taiwan">Taiwan</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania">Tanzania</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Viet Nam">Viet Nam</option>
                          <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                          <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                          <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Yugoslavia">Yugoslavia</option>
                          <option value="Zaire">Zaire</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                      </select>
                  </div>
              </div>
            </div>
              <div class="form-group">
                <div class="col-lg-6 offset-lg-3">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-md" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6 offset-lg-3">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                  </div>
                  <textarea class="md-textarea form-control" required rows="3" placeholder="Message" name="message" id="message"></textarea>
                </div>
              </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6 offset-lg-3">
                  <div class="input-group mb-2">
                    <button type="submit" name="submit" class="btn button_style btn-block btn-dark">Send</button>
                  </div>
                  <div class="col-lg-12 text-center mb-3">
                        <?php if(isset($_SESSION['msg'])){?>
                          <div class="alert alert-primary" role="alert"><?php echo $_SESSION['msg']; ?></div>
                        <?php }unset($_SESSION['msg']);?>
                  </div>
                </div>
              </div>
          </form>
      </div>
  </div>
        </div>
    </div>
</div>
<br><br>
    <!--/feedback-->
    <!--contact us-->
    <div class="container-fluid bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="d-block pt-3">
                  <img src=" public/images/logo/icon.png" alt="NONE" class="w-100">
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h6 class="font-weight-bold ml-n2">CUSTOMER SERVICE</h6>
                  <ul class="uul ml-n5">
                    <a href="/"><li>Home</li></a>
                    <a href=" aboutus.php"><li>About Us</li></a>
                    <a href=" product.php"><li>Products</li></a>
                    <a href=" contactus.php"><li>Contact Us</li></a>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h6 class="font-weight-bold ml-n2">PRODUCT CATEGORIES</h6>
                  <ul class="uul ml-n5">
                    <a href="http://fastfitinternational.com/product.php"><li>Sports Suit</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=caps"><li>Fashion Suits</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=cycling%20uniforms"><li>Motorcycle Suits</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=dip%20belts"><li>Gym Suits</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=jui%20jitsu%20uniforms"><li>Martial Arts</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=leather%20boxing%20gloves"><li>Boxing Suits</li></a>
                  <a href="#"><li>Surgical Suit/Accessories</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=shoes"><li>Shoes</li></a>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h6 class="font-weight-bold ml-n2">CONTACT</h6>
                  <ul class="ml-n5 uul text-white-50">
                    <li><i class="fa fa-envelope" aria-hidden="true"><span class="text-white-50"><a href"mailto:fasfitinternational101@gmail.com">&nbsp;fasfitinternational101@gmail.com</a></span></i></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> +92-311-660-8255</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12"><hr></div>
            <div class="col-12">
              <p class="text-white-50"> &copy; Copyrights 2020 <span class="text-white">Fast Fit International</span> - All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/contact us-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- Whatsapp widget -->

      <!-- /Whatsapp widget -->
    </body>
  </html>
