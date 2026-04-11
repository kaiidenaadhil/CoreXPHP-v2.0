  <div class="data-table">
  <div class="table-container">
  <h2> Edit  portfolio </h2>
<?php foreach ($params["portfolio"] as $key => $portfolio) : ?>
  <form method="post" action="<?= ROOT ?>/admin/portfolio/<?= $portfolio['portfolioIdentify'] ?>/modify">
  <div>
    <label for="eventId">Event Id</label>
    <input type="number" name="eventId" value="<?= $portfolio["eventId"] ?>">
  </div>
  <div>
    <label for="galleryImage">Gallery Image</label>
    <input type="text" name="galleryImage" value="<?= $portfolio["galleryImage"] ?>">
  </div>
  <div>
    <label for="caption">Caption</label>
    <input type="text" name="caption" value="<?= $portfolio["caption"] ?>">
  </div>
  <div>
    <label for="portfolioCreatedAt">Portfolio Created At</label>
    <input type="datetime-local" name="portfolioCreatedAt" value="<?= $portfolio["portfolioCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/portfolio" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
