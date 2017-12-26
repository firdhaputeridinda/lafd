<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h2><?php echo $title; ?></h2>        
        <div class="table-responsive">              
              <tbody>
                <?php foreach ($homepage as $homepage_item): ?>      
                <tr>
                  <td><?php echo $homepage_item['idLosts']?></td>
                  <td><?php echo $homepage_item['stuffName']?></td>
                  <td><a href="<?php echo site_url('homepage/view/'.$homepage_item['idLosts']); ?>">Lost and Found</a></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </div>
        <?php echo $pagination; ?>
</main>