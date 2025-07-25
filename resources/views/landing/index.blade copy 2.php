<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <input type="text" id="searchInput" placeholder="Search nama...">

    <table id="myTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Kota</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Erik Cahya</td>
                <td>erik@textmail.com</td>
                <td>Denpasar</td>
            </tr>
            <tr>
                <td>Putri Anjani</td>
                <td>putri@mail.com</td>
                <td>Ubud</td>
            </tr>
        </tbody>
    </table>
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#myTable tbody tr');

            rows.forEach(row => {
                const nama = row.cells[0].textContent.toLowerCase();
                const email = row.cells[1].textContent.toLowerCase();

                const isVisible = nama.includes(filter) || email.includes(filter);
                row.style.display = isVisible ? '' : 'none';
            });
        });
    </script>

</body>

</html>
