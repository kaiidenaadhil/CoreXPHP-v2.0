  <div class="data-table">
  <div class="table-container">
  <h2> Display inquiries </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Inquiry Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Event Type</th>
      <th>Message</th>
      <th>Inquiry Created At</th>
      <th>Inquiry Updated At</th>
      <th>Inquiry Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['inquiries'] as $key => $inquiries): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $inquiries['inquiryId'] ?></td>
<td><?= $inquiries['name'] ?></td>
<td><?= $inquiries['email'] ?></td>
<td><?= $inquiries['phone'] ?></td>
<td><?= $inquiries['eventType'] ?></td>
<td><?= $inquiries['message'] ?></td>
<td><?= $inquiries['inquiryCreatedAt'] ?></td>
<td><?= $inquiries['inquiryUpdatedAt'] ?></td>
<td><?= $inquiries['inquiryIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/inquiries" class="cancel-btn">back</a></aside> </div>
</div>
</div>
