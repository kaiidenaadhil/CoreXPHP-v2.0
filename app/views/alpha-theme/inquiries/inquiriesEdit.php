  <div class="data-table">
  <div class="table-container">
  <h2> Edit  inquiries </h2>
<?php foreach ($params["inquiries"] as $key => $inquiries) : ?>
  <form method="post" action="<?= ROOT ?>/admin/inquiries/<?= $inquiries['inquiryIdentify'] ?>/modify">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?= $inquiries["name"] ?>">
  </div>
  <div>
    <label for="email">Email</label>
    <input type="text" name="email" value="<?= $inquiries["email"] ?>">
  </div>
  <div>
    <label for="phone">Phone</label>
    <input type="text" name="phone" value="<?= $inquiries["phone"] ?>">
  </div>
  <div>
    <label for="eventType">Event Type</label>
    <input type="text" name="eventType" value="<?= $inquiries["eventType"] ?>">
  </div>
  <div>
    <label for="message">Message</label>
    <textarea name="message"><?= $model["message"] ?></textarea><div>
  <div>
    <label for="inquiryCreatedAt">Inquiry Created At</label>
    <input type="datetime-local" name="inquiryCreatedAt" value="<?= $inquiries["inquiryCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/inquiries" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
