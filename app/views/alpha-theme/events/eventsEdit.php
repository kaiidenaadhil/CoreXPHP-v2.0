  <div class="data-table">
  <div class="table-container">
  <h2> Edit  events </h2>
<?php foreach ($params["events"] as $key => $events) : ?>
  <form method="post" action="<?= ROOT ?>/admin/events/<?= $events['eventIdentify'] ?>/modify">
  <div>
    <label for="title">Title</label>
    <input type="text" name="title" value="<?= $events["title"] ?>">
  </div>
  <div>
    <label for="categoryId">Category Id</label>
    <input type="number" name="categoryId" value="<?= $events["categoryId"] ?>">
  </div>
  <div>
    <label for="location">Location</label>
    <input type="text" name="location" value="<?= $events["location"] ?>">
  </div>
  <div>
    <label for="eventDate">Event Date</label>
    <input type="text" name="eventDate" value="<?= $events["eventDate"] ?>">
  </div>
  <div>
    <label for="eventTime">Event Time</label>
    <input type="text" name="eventTime" value="<?= $events["eventTime"] ?>">
  </div>
  <div>
    <label for="coverImage">Cover Image</label>
    <input type="text" name="coverImage" value="<?= $events["coverImage"] ?>">
  </div>
  <div>
    <label for="summary">Summary</label>
    <textarea name="summary"><?= $model["summary"] ?></textarea><div>
  <div>
    <label for="status">Status</label>
    <input type="text" name="status" value="<?= $events["status"] ?>">
  </div>
  <div>
    <label for="eventCreatedAt">Event Created At</label>
    <input type="datetime-local" name="eventCreatedAt" value="<?= $events["eventCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/events" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
