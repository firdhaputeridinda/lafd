<main role="main">

    <section class="jumbotron text-center" style="background-image: images/abc.jpg">
      <div class="container">
        <h1 class="jumbotron-heading"><?php echo $title; ?></h1>
        <p class="lead description-text">Kami membantu kekhawatiran kamu, membantu teman, sahabat dengan melaporkan data kehilangan kamu disini. Jangan cemas, usahakan untuk menemukan nya sesegera mungkin.</p>
        <p>
          <a href="#" class="btn btn-primary">Saya Kehilangan</a>
          <a href="#" class="btn btn-secondary">Saya Menemukan</a>
        </p>
        <br><br>
        <div class="row">
            <div class="col-md-6">
              <p class="places" style="text-align: left;">

              <select class="form-control" required>
                <option value="">Pilih Lokasi</option>>
                <?php foreach ($places as $places_item): ?> 
                <option value="<?php echo $places_item['idPlaces'] ;?>"><?php echo $places_item['placesName'] ;?></option>
                <?php endforeach; ?>
            </select>
              </p>
            </div>
            <div class="col-md-6">
              <p class="search">          
                <input class="form-control" type="text" placeholder="Cari.."></input></p>
            </div>
          </div>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">

        <div class="row">
        <?php foreach ($homepage as $homepage_item): ?>
          <div class="card col-md-3 col-lg-3">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap" style="height: 200px; width: 100%; display: block;">
            <div class="card-text">
              <div class="post-card date">
                <?php echo $homepage_item['lostTime']?>
              </div>
              <div class="post-cart title">
                <h6><?php echo $homepage_item['stuffName']?></h6>
              </div>
              <div class="post-card desc">
                <?php echo $homepage_item['characteristic']?>
              </div>
            </div>
            <div class="card-share">
              <a href="#">Share to</a>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
    

    