  <div class="data-table">
  <div class="table-container">
  <h2> Display services </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Service Id</th>
      <th>Title</th>
      <th>Category</th>
      <th>Description</th>
      <th>Icon</th>
      <th>Status</th>
      <th>Service Created At</th>
      <th>Service Updated At</th>
      <th>Service Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['services'] as $key => $services): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $services['serviceId'] ?></td>
<td><?= $services['title'] ?></td>
<td><?= $services['category'] ?></td>
<td><?= $services['description'] ?></td>
<td><?= $services['icon'] ?></td>
<td><?= $services['status'] ?></td>
<td><?= $services['serviceCreatedAt'] ?></td>
<td><?= $services['serviceUpdatedAt'] ?></td>
<td><?= $services['serviceIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/services" class="cancel-btn">back</a></aside> </div>
</div>
</div>
