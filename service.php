<?php include 'admin/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to - Book Vista</title>
  <!-- link bootstrape css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- link font-awsome css file -->
  <link rel="stylesheet" href="css/all.css">
  <!-- link coustom css file -->
  <link rel="stylesheet" href="css/style.css">
  <!-- link favicon  -->
  <link rel="shortcut icon" href="images/logo/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css"
    integrity="sha512-riTSV+/RKaiReucjeDW+Id3WlRLVZlTKAJJOHejihLiYHdGaHV7lxWaCfAvUR0ErLYvxTePZpuKZbrTbwpyG9w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<section>
  <!-- Modal -->
  <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-blue text-white">
          <h5 class="modal-title text-capitalize text-white font-dosis-bold " id="bookModalLabel">Get started
          </h5>
        </div>

        <!-- Modal Body with Two Steps -->
        <div class="modal-body">
          <form id="bookForm" action="https://api.web3forms.com/submit" method="POST">

            <!-- Replace with your Access Key -->
            <input type="hidden" name="access_key" value="e190bdcb-92f8-4495-a5ce-4c4785cfd439">

            <!-- Step 1 -->
            <div id="step1">
              <div class="mb-3">
                <select name="manu-script" id="manu-script"
                  class="text-capitalize w-100 text-black font-poppins-light style-contact-us-input bg-light-grey px-2">
                  <option value class="gf_placeholder">Do you have a manuscript ready ?*
                  </option>
                  <option value="Yes, I'm ready to publish today">Yes, I'm ready to publish today
                  </option>
                  <option value="Yes, I'll be ready to publish in 1 to 3 months" selected="selected">
                    Yes, I'll be ready to publish in 1 to 3 months</option>
                  <option value="Yes, I'll be ready to publish in 3 to 6 months">Yes, I'll be ready to
                    publish in 3 to 6 months</option>
                  <option value="No, I do not have a book or manuscript ready">No, I do not have a
                    book or manuscript ready</option>
                  <option value="Yes, I'll be ready to publish in 6 to 12 months">Yes, I'll be ready
                    to publish in 6 to 12 months</option>




                </select>
              </div>
              <div class="mb-3">
                <select name="manuscript_status" id="manuscript_status"
                  class="text-capitalize w-100 text-black font-poppins-light style-contact-us-input bg-light-grey px-2">
                  <option value="" class="gf_placeholder">What type of book do you plan on publishing
                    ?</option>
                  <option value="Business">Business</option>
                  <option value="Biography">Biography</option>
                  <option value="Inspirational">Inspirational</option>
                  <option value="Non-Fiction">Non-Fiction</option>
                  <option value="How-To">How-To</option>
                  <option value="Autobiography/Memoir">Autobiography/Memoir</option>
                  <option value="Self-Help">Self-Help</option>
                  <option value="Children's">Children's</option>
                  <option value="Spiritual/Religious" selected="selected">Spiritual/Religious</option>
                  <option value="Fiction">Fiction</option>
                  <option value="Art/Photography">Art/Photography</option>
                  <option value="Cookbook">Cookbook</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <button type="button" class="style-btn bg-blue text-white font-dosis-regular " id="nextBtn">Next</button>
            </div>

            <!-- Step 2 -->
            <div id="step2" style="display: none;">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name"
                  class="style-contact-us-input w-100 font-poppins-light text-black bg-light-grey"
                  placeholder="Enter Your Last name" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" name="phone"
                  class="style-contact-us-input w-100 font-poppins-light text-black bg-light-grey"
                  placeholder="Enter Your Phone No." required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email"
                  class="style-contact-us-input w-100 font-poppins-light text-black bg-light-grey"
                  placeholder="Enter Your Email" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="" rows="6"
                  class="w-100 font-poppins-light text-black bg-light-grey style-contact-us-text"
                  placeholder="Enter the Message"></textarea>
              </div>
              <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
              <input type="hidden" name="redirect" value="index.php">

              <button type="button" class="style-btn text-white font-dosis-regular bg-blue"
                id="prevBtn">Previous</button>
              <button type="submit" class="style-btn text-white font-dosis-regular bg-blue">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JS to handle steps -->
  <script>
    document.getElementById('nextBtn').addEventListener('click', function () {
      document.getElementById('step1').style.display = 'none';
      document.getElementById('step2').style.display = 'block';
    });

    document.getElementById('prevBtn').addEventListener('click', function () {
      document.getElementById('step2').style.display = 'none';
      document.getElementById('step1').style.display = 'block';
    });

    //document.getElementById('bookForm').addEventListener('submit', function (e) {
    //e.preventDefault();
    //alert('Form submitted successfully!');
    // Here you can add your AJAX or backend call
    //});
  </script>
  <!-- hero section -->
  <section class="bg-light-grey" id="home">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light py-3">
      <div class="container">
        <img src="images/logo/logo.svg" alt="logo" class="style-logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto font-">
            <a class="nav-item my-2 nav-link font-dosis-regular text-black style-nav-links mx-2 text-capitalize "
              href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item my-2 nav-link font-dosis-regular style-active-link text-black style-nav-links mx-2 text-capitalize"
              href="service.php">Service</a>
            <a class="nav-item my-2 nav-link font-dosis-regular  text-black style-nav-links mx-2 text-capitalize"
              href="about.html ">About us</a>
            <a class="nav-item my-2 nav-link font-dosis-regular text-black style-nav-links mx-2 text-capitalize"
              href="#portoflio">Portfolio</a>
          </div>
          <div class="navbar-nav ml-auto font-">

            <button type="button" class="btn my-2 font-dosis-regular bg-blue text-white style-nav-btn 
               text-capiltalize" data-toggle="modal" data-target="#bookModal">
              Get started
            </button>

          </div>
        </div>
      </div>
    </nav>
    <!-- main content -->
    <div class="py-5 container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  h-100">
          <div class="">
            <h6 class="text-black font-dosis-bold text-capitalize text-left m-0 pt-5 pb-3">home / <a href="about.html"
                class="text-blue">Services</a></h6>
            <h1 class="text-blue font-dosis-bold text-uppercase text-left m-0 pb-1"
              style="font-size: 2.1rem !important;">Professional Publishing Services for Modern Authors</h1>
            <p class="text-black font-poppins-regular text-upercase text-left m-0 pb-4 pt-3">
              Explore our full suite of expert services, designed to guide your book from concept to publication.
              Whether you need writing, editing, design, or publishing support — we’re here to help you create something
              truly remarkable.</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  h-auto">
          <img src="images/aboutheader.png" alt="" class="style-abou-header-img">
        </div>
      </div>
    </div>
  </section>
  <!-- services -->
  <!-- service 1 -->
  <section class="py-10 ser-1">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <?php
              $result = $conn->query("SELECT * FROM ser_portfolio_images WHERE tag_name = 'book-writing' ORDER BY uploaded_at DESC;");
                  $isFirst = true; // Flag for the first image
              while ($row = $result->fetch_assoc()) {
                echo '<div class="carousel-item px-4' . ($isFirst ? ' active' : '') . '">
                <img src="admin/' . $row['image_path'] . '" alt="" class="d-block w-100 style-caroual-img">
                </div>
                ';
                $isFirst = false;
              }
              ?>
            </div>


          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
       
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
        <div class="pl-4">
          <h1 class="text-blue text-capitalize font-dosis-bold text-left m-0">Book Writing</h1>
          <p class="text-black text-capitalize font-poppins-extralight text-left pt-1 m-0"
            style="font-size:12px !important;">Transform Your Ideas into a
            Compelling Manuscript</p>
          <p class="text-black text-capitalize font-poppins-light text-left m-0 pt-3">Our skilled writers work closely
            with you to craft well-structured, engaging content that speaks in your voice. Whether it's fiction,
            memoir, or a professional guide, we ensure your message is clear, powerful, and ready to publish. From
            outlining to final drafts — we bring your story to life.</p>
          <button type="button"
            class="btntext-capitalize font-dosis-regular text-center text-white style-btn bg-blue mt-3"
            data-toggle="modal" data-target="#bookModal">
            Get started
          </button>
          <div class="faq pt-4">
            <div id="accordion1">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                      How do I start the writing process with your team?
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                  <div class="card-body font-poppins-light text-capitalize text-black ">
                    Simply share your idea or outline, and we'll schedule a call to understand your goals before
                    beginning the content planning phase.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo">
                      Can you write in my tone or voice?
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                  <div class="card-body font-poppins-light text-capitalize text-black ">
                    Yes, we study your samples and preferences to accurately reflect your unique voice throughout the
                    manuscript.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseThree">
                      Will I have input during the writing process?
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                  <div class="card-body font-poppins-light text-capitalize text-black ">
                    Absolutely! We collaborate closely with you through each draft to ensure your vision is fully
                    realized.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                      aria-expanded="false" aria-controls="collapseFour">
                      Do you offer ghostwriting or co-authoring?
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                  <div class="card-body font-poppins-light text-capitalize text-black ">
                    Yes, we provide both. You choose the credit — we bring your story to life.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- service 2  -->
  <section class="pb-10 ">
    <div class="container">
      <div class="row ">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div class="pr-4">
            <h1 class="text-blue text-capitalize font-dosis-bold text-left m-0">Proofreading & Editing</h1>
            <p class="text-black text-capitalize font-poppins-extralight text-left pt-1 m-0"
              style="font-size:12px !important;">Polish Your Manuscript to Perfection</p>
            <p class="text-black text-capitalize font-poppins-light text-left m-0 pt-3">We ensure your manuscript is
              error-free, clear, and reader-ready. From grammar and punctuation to sentence flow and tone, our editors
              refine your content for maximum impact. You'll receive a manuscript that's clean, consistent, and ready
              for publishing.</p>
            <button type="button"
              class="btntext-capitalize font-dosis-regular text-center text-white style-btn bg-blue mt-3"
              data-toggle="modal" data-target="#bookModal">
              Get started
            </button>
            <div class="faq pt-4">
              <div id="accordion2">
                <div class="card">
                  <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive"
                        aria-expanded="true" aria-controls="collapseFive">What's the difference between editing and
                        proofreading?
                      </button>
                    </h5>
                  </div>

                  <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion2">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Editing improves structure, tone, and clarity. Proofreading focuses on fixing grammar,
                      punctuation, and spelling errors.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                        aria-expanded="false" aria-controls="collapseSix">
                        How do you maintain my voice during edits?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Our editors make subtle, respectful changes, preserving your voice while enhancing flow and
                      readability.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                        aria-expanded="false" aria-controls="collapseSeven">
                        Can I request revisions after editing?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes, we include a round of revisions in all editing packages to address your feedback.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingEight">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight"
                        aria-expanded="false" aria-controls="collapseEight">
                        How long does editing typically take?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Timelines vary based on manuscript length, but typically range from 7 to 14 days.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <?php
              $result = $conn->query("SELECT * FROM ser_portfolio_images WHERE tag_name = 'book-proof-reading' ORDER BY uploaded_at DESC;");
              $isFirst = true; // Flag for the first image
              while ($row = $result->fetch_assoc()) {
                echo '<div class="carousel-item px-4' . ($isFirst ? ' active' : '') . '">
                <img src="admin/' . $row['image_path'] . '" alt="" class="d-block w-100 style-caroual-img">
                </div>
                ';
                $isFirst = false;
              }
              ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- service 3 -->
  <section class="pb-10 ser-1">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">

              <?php
              $result = $conn->query("SELECT * FROM ser_portfolio_images WHERE tag_name = 'book-formating' ORDER BY uploaded_at DESC;");
              $isFirst = true; // Flag for the first image
              while ($row = $result->fetch_assoc()) {
                echo '<div class="carousel-item px-4' . ($isFirst ? ' active' : '') . '">
                <img src="admin/' . $row['image_path'] . '" alt="" class="d-block w-100 style-caroual-img">
                </div>
                ';
                $isFirst = false;
              }
              ?>
            </div>>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div class="pl-4">
            <h1 class="text-blue text-capitalize font-dosis-bold text-left m-0">book Formatting</h1>
            <p class="text-black text-capitalize font-poppins-extralight text-left pt-1 m-0"
              style="font-size:12px !important;">Beautifully Structured Layouts for Print and Digital</p>
            <p class="text-black text-capitalize font-poppins-light text-left m-0 pt-3">We format your manuscript into
              clean, professional layouts that meet publishing standards. From font styling and trim size to chapter
              design, we make sure your book looks
              stunning on both digital and printed
              platforms.</p>
            <button type="button"
              class="btntext-capitalize font-dosis-regular text-center text-white style-btn bg-blue mt-3"
              data-toggle="modal" data-target="#bookModal">
              Get started
            </button>
            <div class="faq pt-4">
              <div id="accordion3">
                <div class="card">
                  <div class="card-header" id="headingNine">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseNine"
                        aria-expanded="true" aria-controls="collapseNine">
                        Do you format for both eBook and print?
                      </button>
                    </h5>
                  </div>

                  <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordion3">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes, we provide professionally formatted files for print (PDF) and eBook platforms (ePub, MOBI).
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTen">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen"
                        aria-expanded="false" aria-controls="collapseTen">
                        Will the layout match my book's genre?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion3">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Definitely — we follow genre-specific formatting conventions for a polished, reader-friendly
                      layout.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingEleven">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven"
                        aria-expanded="false" aria-controls="collapseEleven">
                        Can I review the design before publishing?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion3">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Of course! We provide a full preview and offer revisions before final delivery.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwelve">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve"
                        aria-expanded="false" aria-controls="collapseTwelve">
                        Do you provide final files for all platforms?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion3">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes, we deliver ready-to-upload files compatible with platforms like KDP, IngramSpark, and more.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- service 4  -->
  <section class="pb-10 ">
    <div class="container">
      <div class="row ">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div class="pr-4">
            <h1 class="text-blue text-capitalize font-dosis-bold text-left m-0">Book Cover Design</h1>
            <p class="text-black text-capitalize font-poppins-extralight text-left pt-1 m-0"
              style="font-size:12px !important;">Covers That Capture Attention and Reflect Your Story</p>
            <p class="text-black text-capitalize font-poppins-light text-left m-0 pt-3">A powerful cover draws readers
              in. We design genre-appropriate, visually striking covers that communicate your story's essence. Whether
              you need custom illustrations or clean stock-based design, we'll make sure your book stands out.</p>
            <button type="button"
              class="btntext-capitalize font-dosis-regular text-center text-white style-btn bg-blue mt-3"
              data-toggle="modal" data-target="#bookModal">
              Get started
            </button>
            <div class="faq pt-4">
              <div id="accordion4">
                <div class="card">
                  <div class="card-header" id="headingThirteen">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThirteen"
                        aria-expanded="true" aria-controls="collapseThirteen">Can I give input on the design?
                      </button>
                    </h5>
                  </div>

                  <div id="collapseThirteen" class="collapse show" aria-labelledby="headingThirteen"
                    data-parent="#accordion4">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Absolutely. Your ideas and inspiration guide the creative process from start to finish.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFourteen">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen"
                        aria-expanded="false" aria-controls="collapseFourteen">
                        Do you design spine and back covers too?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                    data-parent="#accordion4">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes, we design complete wraparound covers including spine and back layout.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFifteen">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFifteen"
                        aria-expanded="false" aria-controls="collapseFifteen">
                        What if I need changes after delivery?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion4">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Minor revisions are included. Major changes may incur a small additional fee.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSixteen">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen"
                        aria-expanded="false" aria-controls="collapseSixteen">
                        Are the files compatible with KDP and IngramSpark?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion4">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes, we deliver print-ready files tailored for platforms like Amazon KDP, IngramSpark, and others.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">

              <?php
              $result = $conn->query("SELECT * FROM ser_portfolio_images WHERE tag_name = 'book-cover-design' ORDER BY uploaded_at DESC;");
              $isFirst = true; // Flag for the first image
              while ($row = $result->fetch_assoc()) {
                echo '<div class="carousel-item px-4' . ($isFirst ? ' active' : '') . '">
                <img src="admin/' . $row['image_path'] . '" alt="" class="d-block w-100 style-caroual-img">
                </div>
                ';
                $isFirst = false;
              }
              ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- service 5 -->
  <section class="pb-10 ser-1">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">

              <?php
              $result = $conn->query("SELECT * FROM ser_portfolio_images WHERE tag_name = 'book-publishing' ORDER BY uploaded_at DESC;");
              $isFirst = true; // Flag for the first image
              while ($row = $result->fetch_assoc()) {
                echo '<div class="carousel-item px-4' . ($isFirst ? ' active' : '') . '">
                <img src="admin/' . $row['image_path'] . '" alt="" class="d-block w-100 style-caroual-img">
                </div>
                ';
                $isFirst = false;
              }
              ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div class="pl-4">
            <h1 class="text-blue text-capitalize font-dosis-bold text-left m-0">Book Publishing</h1>
            <p class="text-black text-capitalize font-poppins-extralight text-left pt-1 m-0"
              style="font-size:12px !important;">From Manuscript to Marketplace — Done Right</p>
            <p class="text-black text-capitalize font-poppins-light text-left m-0 pt-3">We guide you through
              self-publishing platforms like Amazon KDP or IngramSpark, handling setup, metadata, distribution, and
              pricing. Our team ensures your book launches smoothly
              and professionally, reaching your readers
              worldwide.</p>
            <button type="button"
              class="btntext-capitalize font-dosis-regular text-center text-white style-btn bg-blue mt-3"
              data-toggle="modal" data-target="#bookModal">
              Get started
            </button>
            <div class="faq pt-4">
              <div id="accordion5">
                <div class="card">
                  <div class="card-header" id="headingSeventeen">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeventeen"
                        aria-expanded="true" aria-controls="collapseSeventeen">
                        Which platforms do you support?
                      </button>
                    </h5>
                  </div>

                  <div id="collapseSeventeen" class="collapse show" aria-labelledby="headingSeventeen"
                    data-parent="#accordion5">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      We specialize in Amazon KDP and IngramSpark, but can assist with others upon request.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingEighteen">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEighteen"
                        aria-expanded="false" aria-controls="collapseEighteen">
                        Do you help with ISBN and barcodes?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen"
                    data-parent="#accordion5">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes, we guide you through getting ISBNs and generate barcodes for your cover.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingNineteen">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNineteen"
                        aria-expanded="false" aria-controls="collapseNineteen">
                        Will I retain full rights to my book?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen"
                    data-parent="#accordion5">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes — you retain 100% ownership and royalties. We're here to assist, not claim.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwenty">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty"
                        aria-expanded="false" aria-controls="collapseTwenty">
                        Do you offer post-launch support?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion5">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      We offer optional ongoing support packages for marketing, updates, and technical help.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- service 6  -->
  <section class="pb-10 ">
    <div class="container">
      <div class="row ">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div class="pr-4">
            <h1 class="text-blue text-capitalize font-dosis-bold text-left m-0">Website Creation & Design</h1>
            <p class="text-black text-capitalize font-poppins-extralight text-left pt-1 m-0"
              style="font-size:12px !important;">Author Websites That Build Your Brand</p>
            <p class="text-black text-capitalize font-poppins-light text-left m-0 pt-3">We create stunning,
              mobile-friendly websites that showcase your books, connect with readers, and grow your online presence.
              With author bios, portfolios, blogs, and more — your site becomes a strong extension
              of your brand.</p>
            <button type="button"
              class="btntext-capitalize font-dosis-regular text-center text-white style-btn bg-blue mt-3"
              data-toggle="modal" data-target="#bookModal">
              Get started
            </button>
            <div class="faq pt-4">
              <div id="accordion6">
                <div class="card">
                  <div class="card-header" id="headingTwentyOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwentyOne"
                        aria-expanded="true" aria-controls="collapseTwentyOne">Will my website be mobile-responsive?
                      </button>
                    </h5>
                  </div>

                  <div id="collapseTwentyOne" class="collapse show" aria-labelledby="headingTwentyOne"
                    data-parent="#accordion6">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes, all our websites are fully responsive and optimized for all screen sizes.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwentyTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwentyTwo"
                        aria-expanded="false" aria-controls="collapseTwentyTwo">
                        Can I update content myself later?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo"
                    data-parent="#accordion6">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Yes! We build user-friendly sites and provide training or documentation to help you manage
                      updates.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwentyThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwentyThree"
                        aria-expanded="false" aria-controls="collapseTwentyThree">
                        Is hosting and domain included?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree"
                    data-parent="#accordion6">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      We assist with setup, but hosting and domain are billed separately through your chosen provider.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwentyFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwentyFour"
                        aria-expanded="false" aria-controls="collapseTwentyFour">
                        Can you integrate blog and newsletter signup?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwentyFour" class="collapse" aria-labelledby="headingTwentyFour"
                    data-parent="#accordion6">
                    <div class="card-body font-poppins-light text-capitalize text-black ">
                      Definitely — we can add a blog, email forms, and newsletter signup to grow your audience.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm 12 col-12 pt-4 ">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

              <?php
              $result = $conn->query("SELECT * FROM ser_portfolio_images WHERE tag_name = 'Web-Design' ORDER BY uploaded_at DESC;");
              $isFirst = true; // Flag for the first image
              while ($row = $result->fetch_assoc()) {
                echo '<div class="carousel-item px-4' . ($isFirst ? ' active' : '') . '">
                <img src="admin/' . $row['image_path'] . '" alt="" class="d-block w-100 style-caroual-img">
                </div>
                ';
                $isFirst = false;
              }
              ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- testimonal -->
  <section class="pb-10">
    <div class="container">
      <h2 class="text-capitalize font-dosis-bold text-blue m-0 text-center">What Our Clients Say</h2>
      <p class="text-capitalize font-poppins-lite text-black text-center">Real stories from real authors — see how we’ve
        helped clients turn their ideas into <br>professionally published, successful books.</p>
    </div>
    <div class="container">
      <div class="owl-carousel owl-theme ">
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/full.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">From the first draft to the final print, their
              team was exceptional. My dream book became a reality.</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person1.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Hamza Tariq</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/starts.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">The cover design blew me away. It perfectly
              captured my book’s soul. Everyone compliments it!</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person2.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Sarah Malik</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/full.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">Their writers understood my voice and vision.
              The final manuscript felt <br>authentically mine.</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person3.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Fatima Noor</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/starts.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">The custom website they built for my book gave
              me a professional platform to promote and sell online.</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person4.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Nadia Rehman</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/full.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">I was amazed by the editing—they didn’t just
              correct grammar, they elevated my entire manuscript.</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person5.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Sana Mehmood</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/full.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">I never imagined my story would look so
              professional. Their formatting made it print-ready in no time.</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person6.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Daniel Ahmed</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/full.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">Launching my book with their publishing
              support was seamless. They handled everything from ISBN to Amazon setup.</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person7.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Omar Qureshi</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item style-slider my-5">
          <div class="container  py-4 px-5">
            <div class="style-test-rating  mb-3">
              <img src="images/full.svg" alt="rating" style="width: fit-content; height:fit-content;">
            </div>
            <p class="text-black text-capitalize font-poppins-light pr-5">I had no clue where to begin. Their team
              guided me from idea to published author. Highly recommend!</p>
            <div class="style-person-detail pt-4 d-flex flex-row">
              <div class="style-profile background-img" style="background-image: url(images/person8.jpg);"></div>
              <div class="pl-3">
                <h5 class="text-capitalize text-black font-dosis-bold m-0 style-test-name">Zain Ali</h5>
                <p class="text-uppercase font-poppins-lightitalic ">USA</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- CTA -->
  <section class="pb-10" id="Cta">
    <div class="container">
      <div class=" style-CTA py-10" style="background-image: url(images/CTA.jpg); border-radius:15px;">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  px-5">
            <h1 class="text-uppercase font-dosis-bold text-white m-0">Your Book Deserves the Spotlight...!</h1>
            <p class="text-white text-capitalize font-poppins-light m-0 pt-2 pb-4">You’ve poured your heart into your
              words — now let us help you share them with the world. From editing to publishing, we’re here to guide
              every step of your journey.</p>

            <button type="button" class="btn bg-white text-blue style-btn font-dosis-regular " data-toggle="modal"
              data-target="#bookModal">
              Get started
            </button>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  py-5 style-CTA-side">

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer class="pt-5 bg-light-grey" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
          <div class="p-3 ">
            <img src="images/logo/logo.svg" alt="logo" class="style-fottoer-logo">
            <p class="text-capitalize text-black font-poppins-regular m-0 pt-4">Turning words into Masterpiece — with
              expert publishing, compelling design, and dedicated support.</p>
          </div>

        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
          <div class="p-3 ">
            <h2 class="text-blue text-capitalize font-dosis-bold">services</h2>
            <div class="pt-2">
              <p class="text-capitalize font-poppins-regular text-black m-0">Book Writing</p>
              <p class="text-capitalize font-poppins-regular text-black m-0">Proofreading and Editing</p>
              <p class="text-capitalize font-poppins-regular text-black m-0">Book Formatting</p>
              <p class="text-capitalize font-poppins-regular text-black m-0">Book Cover Design</p>
              <p class="text-capitalize font-poppins-regular text-black m-0">Book Publishing</p>
              <p class="text-capitalize font-poppins-regular text-black m-0">Website Creation and Designing</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
          <div class="p-3 ">
            <h2 class="text-blue text-capitalize font-dosis-bold">Contact us</h2>
            <div class="pt-1">
              <div class="style-contact d-flex align-items-center flex-row  py-1">
                <img src="images/logo/phone.svg" alt="phone icon">
                <p class="text-capitalize font-poppins-regular text-black m-0 pl-3" style="font-size: 18px;"><a
                    href="tel:+92 300 1204546">+92 300 1204546</a></p>
              </div>
              <div class="style-contact d-flex align-items-center flex-row  py-1">
                <img src="images/logo/mail.svg" alt="phone icon">
                <p class="text-capitalize font-poppins-regular text-black m-0 pl-3" style="font-size: 18px;"><a
                    href="mailto:info@mail.com">info@bookpublisher.com</a></p>
              </div>
              <div class="style-contact d-flex align-items-start flex-row  py-1">
                <img src="images/logo/location.svg" alt="phone icon">
                <p class="text-capitalize font-poppins-regular text-black m-0 pl-3" style="font-size: 18px;"><a
                    href="#">45D , sector E , Canal view , Gujranwala , Pakistan </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" bg-blue mt-5">
      <div class="container">
        <p class=" text-center m-0 text-capitalize text-white font-poppins-regular py-3">
          BookPublisher : ©2025 Copyright all rights are reserved | <a href="https://spiraltech.com.co/"
            class="style-link">Powered by spiraltech</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- link jqurey file -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <!-- link bootstrape file -->
  <script src="js/bootstrap.min.js"></script>
  <!-- link waypoint file -->
  <script src="js/waypoint.js"></script>
  <!-- link numberscroller file -->
  <script src="js/numscroller-1.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- link costam jsfile -->
  <script src="js/script.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      center: true,
      margin: 35,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 2
        }
      }
    })</script>
  <script>
    $(document).ready(function () {

      $('.counter').each(function () {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
            $(this).text(Math.ceil(now));
          }
        });
      });

    });  
  </script>

  </body>

</html>