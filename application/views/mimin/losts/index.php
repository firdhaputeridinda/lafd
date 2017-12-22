<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1>Dashboard</h1>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <div class="text-muted">Something else</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </section>

          <h2><?php echo $title; ?></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Waktu</th>
                  <th>Nama</th>
                  <th>Foto</th>
                  <th>Lokasi</th>
                  <th>Detail Lokasi</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($losts as $losts_item): ?>      
                <tr>
                  <td><?php echo $losts_item['idLost']?></td>
                  <td><?php echo $losts_item['lostTime']?></td>
                  <td><?php echo $losts_item['stuffName']?></td>
                  <td><?php echo $losts_item['stuffPhotos']?></td>
                  <td><?php echo $losts_item['idPlaces']?></td>
                  <td><?php echo $losts_item['specificLocation']?></td>
                  <td><a href="<?php echo site_url('mimin/losts/view/'.$losts_item['nim']); ?>">Detail losts</a></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </main>