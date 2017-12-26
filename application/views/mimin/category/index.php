<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h2><?php echo $title; ?></h2>
        <?php echo $pagination; ?>
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
                <?php foreach ($category as $category_item): ?>      
                <tr>
                  <td><?php echo $category_item['idCategory']?></td>
                  <td><?php echo $category_item['categoryName']?></td>
                  <td><a href="<?php echo site_url('mimin/category/view/'.$category_item['idCategory']); ?>">Detail Data</a></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
</main>