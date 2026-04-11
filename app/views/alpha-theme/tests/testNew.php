<div class="dashboard">
  <div class="top-row">
    <h2>Create New Tests</h2>
    <a href="<?= ROOT ?>/admin/tests" class="btn secondary">Back</a>
  </div>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/tests/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="testString">Test String</label>
      <input type="text" id="testString" name="testString" required>
    </div>
    <div class="form-group">
      <label for="testTimestamp">Test Timestamp</label>
      <input type="datetime-local" id="testTimestamp" name="testTimestamp" required>
    </div>
    <div class="form-group">
      <label for="testEnum">Test Enum</label>
      <select id="testEnum" name="testEnum" required>
        <option value="value1">Value1</option>
        <option value=" value2"> value2</option>
      </select>
    </div>
    <div class="form-group">
      <label for="testBoolean">Test Boolean</label>
      <input type="checkbox" id="testBoolean" name="testBoolean" value="1">
    </div>
    <div class="form-group">
      <label for="testFloat">Test Float</label>
      <input type="number" step="0.01" id="testFloat" name="testFloat" required>
    </div>
    <div class="form-group">
      <label for="testDecimal">Test Decimal</label>
      <input type="number" step="0.01" id="testDecimal" name="testDecimal" required>
    </div>
    <div class="form-group">
      <label for="testDouble">Test Double</label>
      <input type="number" step="0.01" id="testDouble" name="testDouble" required>
    </div>
    <div class="form-group">
      <label for="testJSON">Test J S O N</label>
      <input type="text" id="testJSON" name="testJSON" >
    </div>
    <div class="form-group">
      <label for="testFile">Test File</label>
      <input type="file" id="testFile" name="testFile">
    </div>
    <div class="form-group">
      <label for="testForeignKey">Test Foreign Key</label>
      <input type="number" id="testForeignKey" name="testForeignKey" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/tests" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
