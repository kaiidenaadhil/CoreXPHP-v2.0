<!DOCTYPE html>
<html>
<head>
    <title>Database Schema Generator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<form id="generate-schema-form" class="schema-form">
    <table id="fields-table">
        <thead>
            <tr>
                <th>Field Name</th>
                <th>Data Type</th>
                <th>Length/ Value</th>
                <th>Nullable</th>
                <th>Index</th>
                <th>Auto Inc.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="fieldName[]" placeholder="e.g., id"></td>
                <td>
                    <select name="dataType[]">
                        <option value="integer">Integer</option>
                        <option value="string">String</option>
                        <option value="timestamp">Timestamp</option>
                        <option value="enum">Enum</option>
                        <option value="boolean">Boolean</option>
                        <option value="float">Float</option>
                    </select>
                </td>
                <td><input type="text" name="length[]" placeholder="Enter length or values"></td>
                <td><input type="checkbox" name="nullable[]"></td>
                <td>
                    <select name="indexType[]">
                        <option value="">None</option>
                        <option value="primary_key">Primary</option>
                        <option value="unique">Unique</option>
                    </select>
                </td>
                <td><input type="checkbox" name="autoIncrement[]"></td>
                <td><a id="add-row" class="plus-sign">+</a></td>
            </tr>
        </tbody>
    </table>
    <style>
  .foreign-key-section {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    gap: 10px;
  }

  #foreignKeyContainer {
    display: flex;
    flex-direction: column; /* Stack each foreign key input in a column on small screens */
    gap: 10px;
    width: 100%;
  }

  .fk-row {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
  }

  #addForeignKey {
    padding: 8px 12px;
    background-color: #a2a2a2;
    color: white;
    border: none;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    height: 40px;
    width: 60px;
    flex-shrink: 0;
  }

  .fk-input-group {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .fk-input-group input[type="text"] {
    flex: 1;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .fk-input-group .remove-foreign-key {
    background-color: #fee2e2;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  @media (max-width: 768px) {
    .foreign-key-section {
      flex-direction: column;
      align-items: stretch;
    }

    #addForeignKey {
      width: 60px; /* Make the button take full width on small screens */
    }
    .fk-row {
    gap: 10px;
}
    .fk-input-group {
      flex-direction: row; /* Stack inputs vertically */
      width: 100%;
    }

    .fk-input-group input {
      width: 100%; /* Make input fields and buttons take full width */
    }
    .fk-input-group button{
      width: 60px; /* Make input fields and buttons take full width */
    }
  }

</style>

<!-- Foreign Key Section -->
<div class="foreign-key-section">
  <label>Foreign Keys (Optional):</label>
  <div id="foreignKeyContainer">
    <div class="fk-row">
      <button type="button" id="addForeignKey">+FK</button>
      <div class="fk-input-group">
        <input type="text" name="foreignKey" placeholder="e.g., categoryId:category:id">
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('foreignKeyContainer');
    const addBtn = document.getElementById('addForeignKey');

    // Add FK input row
    addBtn.addEventListener('click', function () {
      const row = document.createElement('div');
      row.className = 'fk-row';
      row.innerHTML = ` 
        <div class="fk-input-group">
          <button type="button" class="remove-foreign-key">x</button>
          <input type="text" name="foreignKey" placeholder="e.g., categoryId:category:id">
        </div>
      `;
      container.appendChild(row);
    });

    // Remove FK input row
    container.addEventListener('click', function (e) {
      if (e.target.classList.contains('remove-foreign-key')) {
        e.target.closest('.fk-row').remove();
      }
    });
  });
</script>



</div>

</form>

<div class="container">
<pre class="textarea"></pre>
</div>

<script>
$(document).ready(function() {

    // Add a new row to the fields table
    $('#add-row').click(function() {
        var newRow = '<tr>' +
            '<td><input type="text" name="fieldName[]" /></td>' +
            '<td>' +
            '<select name="dataType[]">' +
            '<option value="integer">Integer</option>' +
            '<option value="string">String</option>' +
            '<option value="timestamp">Timestamp</option>' +
            '<option value="enum">Enum</option>' +
            '<option value="boolean">Boolean</option>' +
            '<option value="float">Float</option>' +
            '</select>' +
            '</td>' +
            '<td><input type="text" name="length[]" placeholder="Enter length or values" /></td>' +
            '<td><input type="checkbox" name="nullable[]" /></td>' +
            '<td>' +
            '<select name="indexType[]">' +
            '<option value="">None</option>' +
            '<option value="primary_key">Primary</option>' +
            '<option value="unique">Unique</option>' +
            '</select>' +
            '</td>' +
            '<td><input type="checkbox" name="autoIncrement[]" /></td>' +
            '<td><a class="delete-button"></a></td>' +
            '</tr>';
        $('#fields-table tbody').append(newRow);
    });

    // Handle delete button for each row
    $('#fields-table').on('click', '.delete-button', function() {
        $(this).closest('tr').remove();
        updateSchemaPreview(); // Update preview after row is deleted
    });

    // Handle input change for real-time schema generation
    $('#generate-schema-form').on('input change', function() {
        updateSchemaPreview();
    });

    // Function to generate and update the schema preview in real-time
    function updateSchemaPreview() {
        var schema = {};

        $('#fields-table tbody tr').each(function() {
            var fieldName = $(this).find('input[name="fieldName[]"]').val();
            var dataType = $(this).find('select[name="dataType[]"]').val();
            var length = $(this).find('input[name="length[]"]').val();
            var nullable = $(this).find('input[name="nullable[]"]').is(':checked');
            var indexType = $(this).find('select[name="indexType[]"]').val();
            var autoIncrement = $(this).find('input[name="autoIncrement[]"]').is(':checked');

            var field = dataType;

            // Handle data type specific rules
            if (dataType === "float") {
                field += '|float:' + length;  // Use float with precision
            } else if (dataType === "enum") {
                field += '|enum:' + length;  // Treat length as enum values
            } else if (dataType !== "boolean" && length) {
                field += '|max:' + length;  // Apply max constraint for strings
            }

            // Handle timestamp default value (CURRENT_TIMESTAMP)
            if (dataType === "timestamp") {
                field += '|default:CURRENT_TIMESTAMP';
            }

            if (nullable) {
                field += '|nullable';
            }

            if (indexType) {
                field += '|' + indexType;
            }

            // Apply auto_increment for integer types only
            if (autoIncrement && dataType === 'integer') {
                field += '|auto_increment';
            }

            schema[fieldName] = field;
        });

        // Add the foreign key to the schema if it exists
        var foreignKey = $('input[name="foreignKey"]').val();
        if (foreignKey && foreignKey.indexOf(':') !== -1) {
            var parts = foreignKey.split(':');
            if (parts.length === 3) {
                var referencingColumn = parts[0];     // e.g., categoryId
                var referencedTable = parts[1];       // e.g., category
                var referencedColumn = parts[2];      // e.g., id
                schema[referencingColumn] = 'integer|foreign:' + referencedTable + ':' + referencedColumn;
            } else if (parts.length === 2) {
                var referencedTable = parts[0];       // e.g., category
                var referencedColumn = parts[1];      // e.g., id
                schema[referencedColumn] = 'integer|foreign:' + referencedTable + ':' + referencedColumn;
            }
        }


        // Display the generated schema in JSON format
        var jsonOutput = JSON.stringify(schema, null, 2);
        $('.textarea').text(jsonOutput);
    }

    // Handle changes to data type or index to ensure autoIncrement is valid
    $('#fields-table').on('change', 'select[name="dataType[]"], select[name="indexType[]"]', function() {
        var row = $(this).closest('tr');
        var dataType = row.find('select[name="dataType[]"]').val();
        var indexType = row.find('select[name="indexType[]"]').val();
        var autoIncrement = row.find('input[name="autoIncrement[]"]');
        var lengthField = row.find('input[name="length[]"]');

        // Disable Auto Increment for non-integer types
        if (dataType !== "integer") {
            autoIncrement.prop('disabled', true).prop('checked', false); // Disable and uncheck the auto increment
        } else {
            autoIncrement.prop('disabled', false); // Enable auto increment for integer types
        }

        // Automatically apply auto_increment when primary_key is selected
        if (indexType === "primary_key" && dataType === "integer") {
            autoIncrement.prop('checked', true).prop('disabled', true);  // Enable auto_increment and disable it for editing
            lengthField.prop('readonly', true).val('');  // Set Length/Value field to readonly and clear it
        } else {
            autoIncrement.prop('disabled', false);  // Enable auto_increment for other cases
            lengthField.prop('readonly', false);  // Allow the Length/Value field to be editable again
        }

        // Disable Length for Boolean
        if (dataType === "boolean") {
            lengthField.prop('disabled', true).val('');  // Disable and clear the length for boolean
            lengthField.attr('placeholder', 'No length required');  // Set placeholder for boolean
        } else {
            lengthField.prop('disabled', false);  // Enable the length input for other data types
            lengthField.attr('placeholder', 'Enter length or values');  // Reset the placeholder for other data types
        }

        // Disable nullable for primary_key and auto_increment
        if (indexType === "primary_key" || autoIncrement.prop('checked')) {
            row.find('input[name="nullable[]"]').prop('disabled', true).prop('checked', false);
        } else {
            row.find('input[name="nullable[]"]').prop('disabled', false);
        }

        // Adjust placeholders for other data types
        if (dataType === "integer") {
            row.find('input[name="length[]"]').attr('placeholder', 'e.g., 123');
        } else if (dataType === "string") {
            row.find('input[name="length[]"]').attr('placeholder', 'e.g., "example text"');
        } else if (dataType === "timestamp") {
            row.find('input[name="length[]"]').attr('placeholder', 'e.g., "2021-12-31 23:59:59"');
        } else if (dataType === "float") {
            row.find('input[name="length[]"]').attr('placeholder', 'e.g., 8, 2');
        } else if (dataType === "enum") {
            row.find('input[name="length[]"]').attr('placeholder', 'e.g., "value1,value2,value3"');
        }
    });

});
</script>

</body>
</html>
