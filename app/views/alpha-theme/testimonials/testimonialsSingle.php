  <div class="data-table">
  <div class="table-container">
  <h2> Display testimonials </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Testimonial Id</th>
      <th>Client Id</th>
      <th>Name</th>
      <th>Message</th>
      <th>Photo</th>
      <th>Designation</th>
      <th>Testimonial Created At</th>
      <th>Testimonial Updated At</th>
      <th>Testimonial Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['testimonials'] as $key => $testimonials): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $testimonials['testimonialId'] ?></td>
<td><?= $testimonials['clientId'] ?></td>
<td><?= $testimonials['name'] ?></td>
<td><?= $testimonials['message'] ?></td>
<td><?= $testimonials['photo'] ?></td>
<td><?= $testimonials['designation'] ?></td>
<td><?= $testimonials['testimonialCreatedAt'] ?></td>
<td><?= $testimonials['testimonialUpdatedAt'] ?></td>
<td><?= $testimonials['testimonialIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/testimonials" class="cancel-btn">back</a></aside> </div>
</div>
</div>
