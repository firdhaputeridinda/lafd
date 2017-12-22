<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h2><?php echo $title; ?></h2>
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($places as $places_item): ?>      
                <tr>
                  <td><?php echo $places_item['idPlaces']?></td>
                  <td><?php echo $places_item['placesName']?></td>
                  <td><a href="<?php echo site_url('mimin/places/view/'.$places_item['idPlaces']); ?>">Detail Data</a></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
</main>