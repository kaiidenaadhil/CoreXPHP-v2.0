<div class="dashboard">
  <div class="top-row">
    <h2>Edit Tests</h2>
    <a href="<?= ROOT ?>/admin/tests" class="btn secondary">Back</a>
  </div>
  <?php $tests = $params["test"] ?? null; ?>
  <?php if ($tests): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/tests/<?= $tests->testIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="testString">Test String</label>
      <input type="text" id="testString" name="testString" value="<?= $tests->testString ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="testTimestamp">Test Timestamp</label>
      <input type="datetime-local" id="testTimestamp" name="testTimestamp" value="<?= strtotime($tests->testTimestamp) ? date("Y-m-d\TH:i", strtotime($tests->testTimestamp)) : "" ?>" required>
    </div>
    <div class="form-group">
      <label for="testEnum">Test Enum</label>
      <select id="testEnum" name="testEnum" required>
        <option value="value1" <?= $tests->testEnum == "value1" ? "selected" : "" ?>>Value1</option>
        <option value=" value2" <?= $tests->testEnum == " value2" ? "selected" : "" ?>> value2</option>
      </select>
    </div>
    <div class="form-group">
      <label for="testBoolean">Test Boolean</label>
      <input type="checkbox" id="testBoolean" name="testBoolean" value="1" <?= $tests->testBoolean ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="testFloat">Test Float</label>
      <input type="number" step="0.01" id="testFloat" name="testFloat" value="<?= $tests->testFloat ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="testDecimal">Test Decimal</label>
      <input type="number" step="0.01" id="testDecimal" name="testDecimal" value="<?= $tests->testDecimal ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="testDouble">Test Double</label>
      <input type="number" step="0.01" id="testDouble" name="testDouble" value="<?= $tests->testDouble ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="testJSON">Test J S O N</label>
      <input type="text" id="testJSON" name="testJSON" value="<?= $tests->testJSON ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="testFile">Test File</label>
      <input type="file" id="testFile" name="testFile">
    </div>
    <div class="form-group">
      <label for="testForeignKey">Test Foreign Key</label>
      <input type="number" id="testForeignKey" name="testForeignKey" value="<?= $tests->testForeignKey ?? "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/tests" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
