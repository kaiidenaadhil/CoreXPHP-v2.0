  <div class="data-table">
  <div class="table-container">
  <h2> Display portfolio </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Portfolio Id</th>
      <th>Event Id</th>
      <th>Gallery Image</th>
      <th>Caption</th>
      <th>Portfolio Created At</th>
      <th>Portfolio Updated At</th>
      <th>Portfolio Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['portfolio'] as $key => $portfolio): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $portfolio['portfolioId'] ?></td>
<td><?= $portfolio['eventId'] ?></td>
<td><?= $portfolio['galleryImage'] ?></td>
<td><?= $portfolio['caption'] ?></td>
<td><?= $portfolio['portfolioCreatedAt'] ?></td>
<td><?= $portfolio['portfolioUpdatedAt'] ?></td>
<td><?= $portfolio['portfolioIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/portfolio" class="cancel-btn">back</a></aside> </div>
</div>
</div>
