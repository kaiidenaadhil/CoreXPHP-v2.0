<div class="dashboard">
  <div class="top-row">
    <h2>Contacts</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/contacts/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/contacts/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/contacts/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="sort_contactCreatedAt">Sort:</label>
  <select name="sort_contactCreatedAt" id="sort_contactCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_contactCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_contactCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
  </select>
  <?php if (! empty($_GET["search"])): ?>
    <input type="hidden" name="search" value="<?= htmlspecialchars($_GET["search"]) ?>">
  <?php endif; ?>
</form>
</div>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)" /></th>
          <th>#</th>
          <th>Contact Id</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Source</th>
          <th>Ip Address</th>
          <th>User Agent</th>
          <th>Is Read</th>
          <th>Received At</th>
          <th>Contact Created At</th>
          <th>Contact Updated At</th>
          <th>Contact Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($contacts)) : ?>
<?php foreach ($contacts as $index => $contact) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $contact->contactIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($contact->contactId) ? htmlspecialchars($contact->contactId) : "-" ?></td>
          <td><?= isset($contact->fullName) ? htmlspecialchars($contact->fullName) : "-" ?></td>
          <td><?= isset($contact->email) ? htmlspecialchars($contact->email) : "-" ?></td>
          <td><?= isset($contact->phone) ? htmlspecialchars($contact->phone) : "-" ?></td>
          <td><?= isset($contact->subject) ? htmlspecialchars($contact->subject) : "-" ?></td>
          <td><?= isset($contact->message) ? htmlspecialchars($contact->message) : "-" ?></td>
          <td><?= isset($contact->source) ? htmlspecialchars($contact->source) : "-" ?></td>
          <td><?= isset($contact->ipAddress) ? htmlspecialchars($contact->ipAddress) : "-" ?></td>
          <td><?= isset($contact->userAgent) ? htmlspecialchars($contact->userAgent) : "-" ?></td>
          <td><?= isset($contact->isRead) ? htmlspecialchars($contact->isRead) : "-" ?></td>
          <td><?= strtotime($contact->receivedAt) ? date("d M y, H:i", strtotime($contact->receivedAt)) : "-" ?></td>
          <td><?= strtotime($contact->contactCreatedAt) ? date("d M y, H:i", strtotime($contact->contactCreatedAt)) : "-" ?></td>
          <td><?= strtotime($contact->contactUpdatedAt) ? date("d M y, H:i", strtotime($contact->contactUpdatedAt)) : "-" ?></td>
          <td><?= isset($contact->contactIdentify) ? htmlspecialchars($contact->contactIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/contacts/<?= $contact->contactIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/contacts/<?= $contact->contactIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/contacts/<?= $contact->contactIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="17"><div class="no-data-box"><p class="no-data-message">No contacts found.</p><a href="<?= ROOT ?>/admin/contacts/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/contacts/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
