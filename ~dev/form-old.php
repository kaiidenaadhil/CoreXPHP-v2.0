<!DOCTYPE html>
<html>
<head>
	<title>Database Schema Generator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
.schema-form {
  background: #fff;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  margin: 2rem auto;
  max-width: 1200px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin: 1.5rem 0;
  background: #fff;
  border: 1px solid #e2e8f0;
}

th, td {
  padding: 12px 16px;
  text-align: left;
  border-bottom: 1px solid #e2e8f0;
}

th {
  background-color: #f8fafc;
  font-weight: 600;
  color: #0f172a;
}

input[type="text"],
select {
  width: 100%;
  padding: 10px 14px;
  border: 2px solid #cbd5e1;
  border-radius: 8px;
  font-size: 14px;
  transition: all 0.2s ease;
}

input[type="text"]:focus,
select:focus {
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
  outline: none;
}

input[type="checkbox"] {
  width: 20px;
  height: 20px;
  accent-color: #3b82f6;
}

button {
  background-color: #1f1f1f;  /* Dark charcoal background */
  color: white;
  border: none;
  padding: 12px 24px;
  font-size: 1rem;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s ease;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

button:hover {
  background-color: #333333;  /* Lighter shade on hover */
  transform: translateY(-1px);
}

button:active {
  background-color: #444444;  /* Slightly darker on click */
  transform: translateY(1px);
}

.foreign-key-section {
  display: grid;
  grid-template-columns: auto 1fr auto;
  gap: 1rem;
  align-items: center;
  margin-top: 1.5rem;
}

.foreign-key-section label {
  font-weight: 500;
  color: #475569;
}

.plus-sign {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  background-color: #3b82f6;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.2s ease;
}

.plus-sign:hover {
  background-color: #2563eb;
  transform: rotate(90deg);
}

.plus-sign:before,
.plus-sign:after {
  content: "";
  position: absolute;
  background-color: white;
}

.plus-sign:before {
  height: 2px;
  width: 16px;
}

.plus-sign:after {
  width: 2px;
  height: 16px;
}
.delete-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  background-color: #fee2e2;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.2s ease;
  position: relative;
}

.delete-button:hover {
  background-color: #fecaca;
  transform: rotate(90deg);
}

.delete-button:before,
.delete-button:after {
  content: "";
  position: absolute;
  background-color: #dc2626;
  width: 16px;
  height: 2px;
  transition: all 0.2s ease;
}

.delete-button:before {
  transform: rotate(45deg);
}

.delete-button:after {
  transform: rotate(-45deg);
}

/* Responsive: Mobile View */
@media (max-width: 768px) {
  th, td {
    font-size: 0.9rem;
    padding: 6px;
  }

  .foreign-key-section {
    flex-direction: column;
    align-items: stretch;
  }

  button {
    width: 100%;
  }

  .plus-sign,
  .delete-button {
    margin: 0 auto;
    display: block;
  }
}


	</style>
</head>

<body>
<form id="generate-schema-form" class="schema-form">
    <table id="fields-table">
      <thead>
        <tr>
          <th>Field Name</th>
          <th>Data Type</th>
          <th>Length</th>
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
    </select>
  </td>
  <td><input type="text" name="length[]" placeholder="255"></td>
  <td><input type="checkbox" name="nullable[]"></td>
  <td>
    <select name="indexType[]">
      <option value="">None</option>
      <option value="primary_key">Primary</option>
      <option value="unique">Unique</option>
    </select>
  </td>
  <td><input type="checkbox" name="autoIncrement[]"></td>
  <td><a id="add-row" class="plus-sign"></a></td>
</tr>
      </tbody>
    </table>

    <div class="foreign-key-section">
      <label for="foreignKey">Foreign Key (Optional):</label>
      <input type="text" name="foreignKey" placeholder="ForeignTable:ForeignKey">
      <button type="submit">Generate Schema</button>
    </div>
  </form>

	<script>
		$(document).ready(function() {


			// Delete tr
			$('#fields-table').on('click', '.delete-button', function() {
				$(this).closest('tr').remove();
			});



			// Add a new row to the fields table
			$('#add-row').click(function() {
				var newRow = '<tr>' +
					'<td><input type="text" name="fieldName[]" /></td>' +
					'<td>' +
					'<select name="dataType[]">' +
					'<option value="integer">Integer</option>' +
					'<option value="string">String</option>' +
					'<option value="timestamp">Timestamp</option>' +
					'</select>' +
					'</td>' +
					'<td><input type="text" name="length[]" /></td>' +
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

			// Handle form submission
			$('#generate-schema-form').submit(function(event) {
				event.preventDefault();

				// Build the schema object from the table data
				var schema = {};
				$('#fields-table tbody tr').each(function() {
					var fieldName = $(this).find('input[name="fieldName[]"]').val();
					var dataType = $(this).find('select[name="dataType[]"]').val();
					var length = $(this).find('input[name="length[]"]').val();
					var nullable = $(this).find('input[name="nullable[]"]').is(':checked');
					var indexType = $(this).find('select[name="indexType[]"]').val();
					var autoIncrement = $(this).find('input[name="autoIncrement[]"]').is(':checked');

					// Build the schema object
					var field = dataType;
					if (length) {
						field += '|max:' + length;
					}
					if (nullable) {
						field += '|nullable';
					}
					if (indexType) {
						field += '|' + indexType;
					}
					if (autoIncrement) {
						field += '|auto_increment';
					}

					schema[fieldName] = field;
				});

				// Add the foreign key to the schema if it exists
				var foreignKey = $('input[name="foreignKey"]').val();
				if (foreignKey) {
					var foreignKeyField = 'PersonID';
					if (foreignKey.indexOf(':') !== -1) {
						var parts = foreignKey.split(':');
						foreignKey = parts[0];
						foreignKeyField = parts[1];
					}
					schema[foreignKeyField] = 'integer|foreign:' + foreignKey;
				}

				// Display the generated schema in JSON format
				var jsonOutput = JSON.stringify(schema, null, 2);
				$('.textarea').text(jsonOutput);
				//alert(jsonOutput);
			});
		});
	</script>
</body>

</html>