  <div class="data-table">
  <div class="table-container">
  <h2> Edit  testimonials </h2>
<?php foreach ($params["testimonials"] as $key => $testimonials) : ?>
  <form method="post" action="<?= ROOT ?>/admin/testimonials/<?= $testimonials['testimonialIdentify'] ?>/modify">
  <div>
    <label for="clientId">Client Id</label>
    <input type="number" name="clientId" value="<?= $testimonials["clientId"] ?>">
  </div>
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?= $testimonials["name"] ?>">
  </div>
  <div>
    <label for="message">Message</label>
    <textarea name="message"><?= $model["message"] ?></textarea><div>
  <div>
    <label for="photo">Photo</label>
    <input type="text" name="photo" value="<?= $testimonials["photo"] ?>">
  </div>
  <div>
    <label for="designation">Designation</label>
    <input type="text" name="designation" value="<?= $testimonials["designation"] ?>">
  </div>
  <div>
    <label for="testimonialCreatedAt">Testimonial Created At</label>
    <input type="datetime-local" name="testimonialCreatedAt" value="<?= $testimonials["testimonialCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/testimonials" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
