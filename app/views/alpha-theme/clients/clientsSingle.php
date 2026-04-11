  <div class="data-table">
  <div class="table-container">
  <h2> Display clients </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Client Id</th>
      <th>Name</th>
      <th>Logo</th>
      <th>Company Type</th>
      <th>Status</th>
      <th>Client Created At</th>
      <th>Client Updated At</th>
      <th>Client Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['clients'] as $key => $clients): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $clients['clientId'] ?></td>
<td><?= $clients['name'] ?></td>
<td><?= $clients['logo'] ?></td>
<td><?= $clients['companyType'] ?></td>
<td><?= $clients['status'] ?></td>
<td><?= $clients['clientCreatedAt'] ?></td>
<td><?= $clients['clientUpdatedAt'] ?></td>
<td><?= $clients['clientIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/clients" class="cancel-btn">back</a></aside> </div>
</div>
</div>
