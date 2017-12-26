 

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Lost & Found Amikom</h1>
        <p class="lead text-muted">Kami membantu kekhawatiran kamu, membantu teman, sahabat dengan melaporkan data kehilangan kamu disini. Jangan cemas, usahakan untuk menemukan nya sesegera mungkin.</p>
        <p>
          <a href="#" class="btn btn-primary">Saya Kehilangan</a>
          <a href="#" class="btn btn-secondary">Saya Menemukan</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">

        <div class="row">
        <?php foreach ($losts as $losts_items): ?>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <h3><?php echo $losts_items['stuffName'] ;?></h3>
            <p class="card-text"><?php echo $losts_items['characteristic']; ?></p>
          </div>
        <?php endforeach; ?>
        </div>

      </div>
    </div>

    