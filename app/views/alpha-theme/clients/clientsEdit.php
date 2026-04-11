  <div class="data-table">
  <div class="table-container">
  <h2> Edit  clients </h2>
<?php foreach ($params["clients"] as $key => $clients) : ?>
  <form method="post" action="<?= ROOT ?>/admin/clients/<?= $clients['clientIdentify'] ?>/modify">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?= $clients["name"] ?>">
  </div>
  <div>
    <label for="logo">Logo</label>
    <input type="text" name="logo" value="<?= $clients["logo"] ?>">
  </div>
  <div>
    <label for="companyType">Company Type</label>
    <input type="text" name="companyType" value="<?= $clients["companyType"] ?>">
  </div>
  <div>
    <label for="status">Status</label>
    <input type="text" name="status" value="<?= $clients["status"] ?>">
  </div>
  <div>
    <label for="clientCreatedAt">Client Created At</label>
    <input type="datetime-local" name="clientCreatedAt" value="<?= $clients["clientCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/clients" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
