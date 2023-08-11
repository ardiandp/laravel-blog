<!DOCTYPE html>
<html>
<head>
    <title>Artikel DataTable</title>
    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
    <table id="artikel-table" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Judul SEO</th>
                <th>Artikel</th>
                <th>Publish</th>
                <th>Edit</th>
            </tr>
        </thead>
    </table>

    <!-- Include jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Initialization -->
    <script>
       $(document).ready(function() {
    $('#artikel-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('artikel.index') }}",
        columns: [
            { data: 'id' },
            { data: 'judul' },
            { data: 'judul_seo' },
            { data: 'artikel' },
            { data: 'publish' },
            { data: 'edit'},
           // { data: 'hapus', orderable: false, searchable: false },
        ]
    });
});

    </script>
</body>
</html>
