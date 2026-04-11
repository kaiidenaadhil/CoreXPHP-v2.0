  <div class="data-table">
  <div class="table-container">
  <h2> Display events </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Event Id</th>
      <th>Title</th>
      <th>Category Id</th>
      <th>Location</th>
      <th>Event Date</th>
      <th>Event Time</th>
      <th>Cover Image</th>
      <th>Summary</th>
      <th>Status</th>
      <th>Event Created At</th>
      <th>Event Updated At</th>
      <th>Event Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['events'] as $key => $events): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $events['eventId'] ?></td>
<td><?= $events['title'] ?></td>
<td><?= $events['categoryId'] ?></td>
<td><?= $events['location'] ?></td>
<td><?= $events['eventDate'] ?></td>
<td><?= $events['eventTime'] ?></td>
<td><?= $events['coverImage'] ?></td>
<td><?= $events['summary'] ?></td>
<td><?= $events['status'] ?></td>
<td><?= $events['eventCreatedAt'] ?></td>
<td><?= $events['eventUpdatedAt'] ?></td>
<td><?= $events['eventIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/events" class="cancel-btn">back</a></aside> </div>
</div>
</div>
