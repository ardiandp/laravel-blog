<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<table id="users-table" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbarui</th>
            <th>Aksi</th>
        </tr>
    </thead>
</table>
<!-- Include jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'email' },
                { data: 'created_at' },
                { data: 'updated_at' },
                { data: 'action', orderable: false, searchable: false },
            ]
        });
    });


    function hapusUser(id) {
    if (confirm("Apakah Anda yakin ingin menghapus pengguna ini?")) {
        $.ajax({
            url: 'users/' + id,
            type: 'DELETE',
            data: {
                "_token": "{{ csrf_token() }}"
            },
            success: function (response) {
                // Tampilkan pesan berhasil dihapus menggunakan SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: response.message,
                });

                // Lakukan sesuatu setelah penghapusan berhasil
                // Contoh: Reload DataTable atau hapus baris dari tampilan
            }
        });
    }
}


</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div id="pesan"></div>
