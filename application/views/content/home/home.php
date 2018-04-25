<!-- Clear Fix -->
<section>
  <br><br><br>
</section>

<!-- Header Banner  -->
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-6"><br><br><br>
        <strong class="text-box">Laundri Sekarang</strong><br><br><br><br>
        <strong class="text-box">Jadi Lebih Mudah dan Cepat</strong>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo base_url('assets/img/laundry-1.jpg') ?>" alt="head-img">
      </div>
    </div>
  </div>
</section>

<!-- Service -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="border: 0;">
          <div class="card-body">
            <h5 class="card-title"><i class="icon-i ion-chatbubbles color-yellow"></i> <strong>Medium</strong></h5><br>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="border: 0;">
          <div class="card-body">
            <h5 class="card-title"><i class="icon-i ion-android-settings color-yellow"></i> <strong>Medium</strong></h5><br>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="border: 0;">
          <div class="card-body">
            <h5 class="card-title"><i class="icon-i ion-ios-stopwatch color-yellow"></i> <strong>Medium</strong></h5><br>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="border: 0;">
          <div class="card-body">
            <h5 class="card-title"><i class="icon-i ion-ios-color-wand color-yellow"></i> <strong>Medium</strong></h5><br>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Quotes -->
<section>
  <div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="full-box">
          <h2>Subscribe ti our newslatter</h2>
          <p>Join our mountly newslatter and never miss out on new stories and promotion.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Price Box -->
<section>
  <div class="container">
    <div class="row">
      <?php foreach ($paket as $data): ?>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong><?php echo $data->nama_paket; ?></strong></h5><br>
            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6><br> -->
            <p class="card-text"><?php echo substr($data->detail, 0, 120); ?></p>
            <br>
            <div class="text-center">
              <a class="btn btn-default bg-yellow" data-toggle="modal" data-target="#<?php echo $data->id_paket; ?>">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div id="<?php echo $data->id_paket; ?>" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?php echo $data->nama_paket; ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?php echo $data->detail; ?></p>
            </div>
            <div class="modal-footer">
              <h5 class="modal-title">Rp. <?php echo $data->harga ?> ,-</h5>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach ?>
  <!--<div class="col-md-3">
        <div class="segitiga">

        </div>
        <div class="label-promo">
          RECOMMENDED
        </div>
        <div class="card mg-min-2">
          <div class="card-body">
            <h5 class="card-title"><strong>Super</strong></h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6><br>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <br>
            <div class="text-center">
              <a href="#" class="btn btn-default bg-yellow">Read More</a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>

<!-- Calculator -->
<section>
  <div id='app' class="bg-light"><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-<?php echo $id1; ?>" role="tab"><?php echo $nama1; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab-<?php echo $id2; ?>" role="tab"><?php echo $nama2; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-<?php echo $id3; ?>" role="tab"><?php echo $nama3; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-<?php echo $id4; ?>" role="tab"><?php echo $nama4; ?></a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show" role="tabpanel" id="tab-<?php echo $id1; ?>">
              <div class="row">
                <div class="col-md-3">
                  <h2>Check Price <?php echo $nama1; ?></h2>
                </div>
                <div class="col-md-4">
                  <form class="form-inline">
                      <div class="form-group">
                        <label for="firstNumber" class="sr-only"></label>
                        <input type="text" id="firstNumber" v-model="firstNumber" class="form-control"><strong>KG</strong>
                      </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <h3>Rp {{ harga1 }} ,00</h3>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show active" role="tabpanel" id="tab-<?php echo $id2; ?>">
              <div class="row">
                <div class="col-md-3">
                  <h2>Check Price <?php echo $nama2; ?></h2>
                </div>
                <div class="col-md-4">
                  <form class="form-inline">
                      <div class="form-group">
                        <label for="firstNumber" class="sr-only"></label>
                        <input type="text" id="firstNumber" v-model="firstNumber" class="form-control"><strong>KG</strong>
                      </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <h3>Rp {{ harga2 }} ,00</h3>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show" role="tabpanel" id="tab-<?php echo $id3; ?>">
              <div class="row">
                <div class="col-md-3">
                  <h2>Check Price <?php echo $nama3; ?></h2>
                </div>
                <div class="col-md-4">
                  <form class="form-inline">
                      <div class="form-group">
                        <label for="firstNumber" class="sr-only"></label>
                        <input type="text" id="firstNumber" v-model="firstNumber" class="form-control"><strong>KG</strong>
                      </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <h3>Rp {{ harga3 }} ,00</h3>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show" role="tabpanel" id="tab-<?php echo $id4; ?>">
              <div class="row">
                <div class="col-md-3">
                  <h2>Check Price <?php echo $nama4; ?></h2>
                </div>
                <div class="col-md-4">
                  <form class="form-inline">
                      <div class="form-group">
                        <label for="firstNumber" class="sr-only"></label>
                        <input type="text" id="firstNumber" v-model="firstNumber" class="form-control"><strong>KG</strong>
                      </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <h3>Rp {{ harga4 }} ,00</h3>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div><br>
  </div>
</section>

<!-- Maps Google Embed -->
<section>
  <div class="container">
    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.2013611372123!2d110.39602088809612!3d-7.810397099646512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a576bf8fb2809%3A0xfc32b5f0dc15ffe9!2sJl.+Rejowinangun+No.1%2C+Rejowinangun%2C+Kotagede%2C+Kota+Yogyakarta%2C+Daerah+Istimewa+Yogyakarta+55171!5e0!3m2!1sid!2sid!4v1522065658722" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- About and Footer -->
<section>
  <div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="full-box">
          <h2>Subscribe ti our newslatter</h2>
          <p>Join our mountly newslatter and never miss out on new stories and promotion.</p>
          <br>
          <form class="text-center">
            <div class="d-flex justify-content-center">
              <div class="input-group mb-3 col-md-4">
                <input type="text" class="form-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button style="background: #6C737D; color: #fff;" class="btn btn-outline-secondary" type="button">Subsribe <i class="fas fa-camera-retro"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="d-flex">
      <div class="mr-auto p-2">
        <ul class="social">
          <a href="#"><li><i class="ion-social-twitter"></i></li><a/>
          <a href="#"><li><i class="ion-social-facebook"></i></li><a/>
          <a href="#"><li><i class="ion-social-googleplus"></i></li><a/>
          <a href="#"><li><i class="ion-social-instagram"></i></li><a/>
          <a href="#"><li><i class="ion-social-pinterest"></i></li><a/>
        </ul>
      </div>
      <div class="p-2"><a href="<?php echo base_url(); ?>" style="color: #edd500;">Simple Clean Laundry</a> 2018 All Right Reserved</div>
    </div>
  </div>
</section>

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

  new Vue({
      el:'#app',
      data : {
              firstNumber : '',
              secondNumber: <?php echo $harga1; ?>,
              thirdNumber: <?php echo $harga2; ?>,
              fourthNumber: <?php echo $harga3; ?>,
              fifthNumber: <?php echo $harga4; ?>
       },
      computed: {
              harga1: function(){
                  return this.firstNumber * this.secondNumber;
              },
              harga2: function(){
                  return this.firstNumber * this.thirdNumber;
              },
              harga3: function(){
                  return this.firstNumber * this.fourthNumber;
              },
              harga4: function(){
                  return this.firstNumber * this.fifthNumber;
              }
          }
  });
</script>
