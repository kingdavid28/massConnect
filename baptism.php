<!DOCTYPE html>
<html>
<head>
  <title>Baptism CRUD Operations</title>
  <style>
    body {
      background-color: #E8F5E9;
      color: #388E3C;
      font-family: Arial, sans-serif;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      text-align: center;
    }

    .form-container {
      background-color: rgba(56, 142, 60, 0.2);
      padding: 20px;
      border-radius: 15px;
      margin-bottom: 20px;
      width: 80%;
    }

    .form-container input, .form-container textarea, .form-container button {
      margin: 5px 0;
      width: 98%;
      padding: 10px;
      font-size: 18px;
    }

    .table {
      margin-top: 20px;
      border-collapse: collapse;
      width: 100%;
    }

    .table, .table th, .table td {
      border: 1px solid #388E3C;
    }

    .table th, .table td {
      padding: 8px;
      text-align: center;
    }

    .button {
      background-color: #388E3C;
      border: none;
      color: whitesmoke;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 24px;
      margin: 10px 5px;
      cursor: pointer;
      border-radius: 10px;
    }

    .button:hover {
      background-color: #2e7d32;
    }
  </style>
</head>
<body>
  <h1>Baptism Records Management</h1>

  <div class="form-container">
    <h2>Add Baptism Record</h2>
    <form id="baptismForm" method="POST" action="add_baptism.php">
      <input type="text" name="name" placeholder="Name" required>
      <input type="date" name="bday" placeholder="Birthday" required>
      <input type="date" name="baptismal_date" placeholder="Baptismal Date" required>
      <input type="text" name="parents_name" placeholder="Parents' Name">
      <input type="text" name="baptized_by" placeholder="Baptized By">
      <textarea name="godparent_names" placeholder="Godparent Names"></textarea>
      <input type="text" name="parish_church" placeholder="Parish Church">
      <input type="number" name="canonical_book_number" placeholder="Canonical Book Number">
      <button type="submit" class="button">Add Record</button>
    </form>
  </div>

  <div>
    <h2>Baptism Records</h2>
    <table class="table" id="baptismTable">
      <thead>
        <tr>
          <th>Information Saved</th>
        </tr>
      </thead>
      <tbody id="recordsBody">
      </tbody>
    </table>
  </div>

  <script>
    function loadBaptismRecords() {
      const xhr = new XMLHttpRequest();
      xhr.open('GET', 'fetch_baptism.php', true);
      xhr.onload = function() {
        if (this.status === 200) {
          const records = JSON.parse(this.responseText);
          const baptismTableBody = document.getElementById('recordsBody');
          records.forEach(record => {
            const row = baptismTableBody.insertRow();
            row.insertCell(0).innerText = record.name;
            const actionsCell = row.insertCell(1);
            actionsCell.innerHTML = `<button onclick="editRecord('${record.name}')">Edit</button>
                                     <button onclick="deleteRecord('${record.name}')">Delete</button>`;
          });
        }
      };
      xhr.send();
    }

    function editRecord(name) {
      alert(`Edit record for: ${name}`);
    }

    function deleteRecord(name) {
      alert(`Delete record for: ${name}`);
    }

    window.onload = loadBaptismRecords;
  </script>
</body>
</html>
