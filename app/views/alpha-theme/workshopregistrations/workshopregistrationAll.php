<div class="dashboard">
  <div class="top-row">
    <h2>Workshopregistrations</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/workshopregistrations/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/workshopregistrations/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/workshopregistrations/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_ticketType">TicketType:</label>
  <select name="filter_ticketType" id="filter_ticketType" class="filter-select">
    <option value="">All</option>
    <option value="Free" <?= ($_GET["filter_ticketType"] ?? "") === "Free" ? "selected" : "" ?>>Free</option>
    <option value="Standard" <?= ($_GET["filter_ticketType"] ?? "") === "Standard" ? "selected" : "" ?>>Standard</option>
    <option value="VIP" <?= ($_GET["filter_ticketType"] ?? "") === "VIP" ? "selected" : "" ?>>VIP</option>
  </select>
  <label for="filter_paymentStatus">PaymentStatus:</label>
  <select name="filter_paymentStatus" id="filter_paymentStatus" class="filter-select">
    <option value="">All</option>
    <option value="Pending" <?= ($_GET["filter_paymentStatus"] ?? "") === "Pending" ? "selected" : "" ?>>Pending</option>
    <option value="Paid" <?= ($_GET["filter_paymentStatus"] ?? "") === "Paid" ? "selected" : "" ?>>Paid</option>
    <option value="Cancelled" <?= ($_GET["filter_paymentStatus"] ?? "") === "Cancelled" ? "selected" : "" ?>>Cancelled</option>
  </select>
  <label for="sort_workshopregistrationCreatedAt">Sort:</label>
  <select name="sort_workshopregistrationCreatedAt" id="sort_workshopregistrationCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_workshopregistrationCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_workshopregistrationCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Registration Id</th>
          <th>Workshop Id</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Ticket Type</th>
          <th>Payment Status</th>
          <th>Registered At</th>
          <th>Workshopregistration Created At</th>
          <th>Workshopregistration Updated At</th>
          <th>Workshopregistration Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($workshopregistrations)) : ?>
<?php foreach ($workshopregistrations as $index => $workshopregistration) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $workshopregistration->workshopregistrationIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($workshopregistration->registrationId) ? htmlspecialchars($workshopregistration->registrationId) : "-" ?></td>
          <td><?= isset($workshopregistration->workshopId) ? htmlspecialchars($workshopregistration->workshopId) : "-" ?></td>
          <td><?= isset($workshopregistration->fullName) ? htmlspecialchars($workshopregistration->fullName) : "-" ?></td>
          <td><?= isset($workshopregistration->email) ? htmlspecialchars($workshopregistration->email) : "-" ?></td>
          <td><?= isset($workshopregistration->phone) ? htmlspecialchars($workshopregistration->phone) : "-" ?></td>
          <td><?= isset($workshopregistration->ticketType) ? htmlspecialchars($workshopregistration->ticketType) : "-" ?></td>
          <td><?= isset($workshopregistration->paymentStatus) ? htmlspecialchars($workshopregistration->paymentStatus) : "-" ?></td>
          <td><?= strtotime($workshopregistration->registeredAt) ? date("d M y, H:i", strtotime($workshopregistration->registeredAt)) : "-" ?></td>
          <td><?= strtotime($workshopregistration->workshopregistrationCreatedAt) ? date("d M y, H:i", strtotime($workshopregistration->workshopregistrationCreatedAt)) : "-" ?></td>
          <td><?= strtotime($workshopregistration->workshopregistrationUpdatedAt) ? date("d M y, H:i", strtotime($workshopregistration->workshopregistrationUpdatedAt)) : "-" ?></td>
          <td><?= isset($workshopregistration->workshopregistrationIdentify) ? htmlspecialchars($workshopregistration->workshopregistrationIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/workshopregistrations/<?= $workshopregistration->workshopregistrationIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/workshopregistrations/<?= $workshopregistration->workshopregistrationIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/workshopregistrations/<?= $workshopregistration->workshopregistrationIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="14"><div class="no-data-box"><p class="no-data-message">No workshopregistrations found.</p><a href="<?= ROOT ?>/admin/workshopregistrations/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/workshopregistrations/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
