<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<!-- Include jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>


<table id="siswa-table" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Gender</th>
            <th>aksi</th>
        </tr>
    </thead>
</table>

<script>
    $(document).ready(function() {
        $('#siswa-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('siswa.index') }}",
            columns: [
                { data: 'id' },
                { data: 'nis' },
                { data: 'nama' },
                { data: 'tempat_lahir' },
                { data: 'tanggal_lahir' },
                { data: 'phone' },
                { data: 'email' },
                { data: 'gender' },
                {
                    data: 'id',
                    render: function(data, type, row) {
                        var editUrl = '{{ route("siswa.edit", ":id") }}';
                        editUrl = editUrl.replace(':id', data);
                        return '<a href="' + editUrl + '" class="btn btn-primary btn-sm">Edit</a>';
                    }
                }
            ]
        });
    });
</script>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>